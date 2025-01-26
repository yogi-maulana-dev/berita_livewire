<div>
    @push('styles')
    @endpush
    <x-dialog-modal wire:model.live="modalBeritaEdit" submit="edit">

        <x-slot name="title">
            Edit Berita
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">
                <!-- Nama Kategori -->

                <div class="col-span-12">
                    <x-label for="form.kategori_id" value="Pilih Kategori" />
                    <x-tom x-init="$el.kategori = new Tom($el, {
                        sortField: {
                            field: 'nama',
                            direction: 'asc'
                        },
                        valueField: 'id',
                        labelField: 'nama',
                        searchField: 'nama',
                    });"
                        @set-kategori-edit.window="
                    $el.kategori.addOption(event.detail.data);
                    $el.kategori.addItem(event.detail.id);
                    "
                        id="form.kategori_id" wire:model="form.kategori_id" placeholder="Cari Kategori...">
                        <option></option>
                    </x-tom>

                    <x-input-error for="form.kategori_id" class="mt-1" />
                </div>

                <div class="col-span-12">
                    <x-label for="form.judul" value="Isi Judul" />
                    <x-input wire:model.live="form.judul" id="form.judul" class="w-full mt-1" />
                    <x-input-error for="form.judul" class="mt-1" />
                </div>

                <!-- Slug -->
                <div class="col-span-12">
                    <x-label for="form.slug" value="URL Preview" />
                    <div class="flex items-center mt-1 space-x-1 text-gray-600 bg-gray-100 p-2 rounded">
                        <span class="text-gray-500">{{ url('/') }}/</span>
                        <span class="font-medium">{{ $form->slug ?: 'url-akan-muncul-disini' }}</span>
                    </div>
                    <x-input wire:model="form.slug" id="form.slug" class="w-full mt-1" readonly
                        placeholder="Slug akan terisi otomatis" />
                    <x-input-error for="form.slug" class="mt-1" />
                </div>

                <!-- Konten -->
                {{ $form->kotentex }}
                {{--  <div class="col-span-12" wire:ignore>
                    <x-label for="konten" value="Isi konten" />
                    <textarea id="konten" wire:model="form.kotentex" class="w-full mt-1 rounded-md border-gray-300 shadow-sm"
                        wire:model.defer="form.konten"></textarea>
                    <x-input-error for="form.konten" class="mt-1" />
                </div>  --}}
                <div wire:ignore class="col-span-12">
                    <x-label for="message" :value="__('Compose message')" />

                    <textarea wire:model="form.konten" class="w-full mt-1 rounded-md border-gray-300 shadow-sm" name="konten"
                        id="konten">{!! $form->kotentex !!}</textarea>
                    <x-input-error for="form.konten" class="mt-1" />

                </div>

                <!-- Gambar Pertanyaan -->
                <!-- Diskusi Gambar -->
                <div class="col-span-12">
                    <x-label for="gambar" value="Diskusi Gambar" />
                    <input wire:model="form.gambar" id="gambar" type="file" class="w-full mt-1"
                        accept="image/*" />
                    <x-input-error for="form.gambar" class="mt-1" />
                    @if ($form->gambar instanceof \Illuminate\Http\UploadedFile)
                        <img src="{{ $form->gambar->temporaryUrl() }}" class="object-contain mt-2 max-h-48"
                            alt="Preview Gambar Pertanyaan">
                    @elseif ($form->oldGambarBerita)
                        <img src="{{ asset('storage/' . $form->oldGambarBerita) }}" class="object-contain mt-2 max-h-48"
                            alt="Gambar Pertanyaan Lama">
                    @endif
                </div>

            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button id="submit" @click="$wire.set('modalBeritaEdit', false)"
                wire:loading.attr="disabled">
                Batal
            </x-secondary-button>
            <x-button class="ms-3" wire:loading.attr="disabled">
                Simpan
            </x-button>
        </x-slot>
    </x-dialog-modal>

    <script>
        // Konfigurasi CKEditor dengan Laravel File Manager
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };


        // Inisialisasi CKEditor
        const editor = CKEDITOR.replace('konten', {
            ...options,
            versionCheck: false,
            extraPlugins: 'autogrow,image2',
            autoGrow_onStartup: true,
            autoGrow_minHeight: 300,
            autoGrow_maxHeight: 700,
            autoGrow_bottomSpace: 50,
            toolbar: [{
                    name: 'clipboard',
                    items: ['Cut', 'Copy', 'Paste', '-', 'Undo', 'Redo']
                },
                {
                    name: 'editing',
                    items: ['Find', 'Replace']
                },
                {
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', '-', 'Strike', 'RemoveFormat']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Blockquote']
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink']
                },
                {
                    name: 'insert',
                    items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar']
                },
                {
                    name: 'styles',
                    items: ['Styles', 'Format', 'Font', 'FontSize']
                }
            ],
            on: {
                dialogDefinition: function(event) {
                    var dialogName = event.data.name;
                    var dialogDefinition = event.data.definition;

                    // Ubah ukuran default dialog gambar
                    if (dialogName === 'image') {
                        var infoTab = dialogDefinition.getContents('info');
                        if (infoTab) {
                            var widthField = infoTab.get('txtWidth');
                            var heightField = infoTab.get('txtHeight');
                            if (widthField) widthField['default'] = '400';
                            if (heightField) heightField['default'] = '400';
                        }
                    }
                }
            }
        });

        // Sinkronisasi data CKEditor dengan Livewire
        editor.on('change', function(event) {
            console.log(event.editor.getData())
            @this.set('konten', event.editor.getData());
        });


        document.querySelector("#submit").addEventListener("click", () => {
            // console.log(editor.getData())
            @this.set('message', editor.getData());
        });
    </script>




    {{--  <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('editor', options);
    </script>  --}}
    <!-- JavaScript yang diperlukan -->
    @push('scripts')
    @endpush

</div>
