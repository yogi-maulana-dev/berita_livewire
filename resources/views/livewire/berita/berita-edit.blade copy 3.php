<div>
    <div class="main_content_iner">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="white_box mb_30 p-4">
                                <form wire:submit.prevent="edit">
                                    <!-- Nama Kategori -->
                                    <div class="mb-4">
                                        <x-label for="kategori_id" value="Pilih Kategori" />
                                        <x-tom x-data="" x-init="$nextTick(() => {
                                            let tom = new TomSelect($el, {
                                                valueField: 'id',
                                                labelField: 'nama',
                                                searchField: 'nama',
                                                options: {{ json_encode($kategoris) }},
                                                items: ['{{ $kategori_id }}'],
                                                sortField: {
                                                    field: 'nama',
                                                    direction: 'asc'
                                                }
                                            });
                                        
                                            $watch('kategori_id', value => {
                                                tom.setValue(value, true);
                                            });
                                        })" id="kategori_id"
                                            wire:model.live="kategori_id" placeholder="Cari Kategori...">
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($kategoris as $kategori)
                                                <option value="{{ $kategori['id'] }}">{{ $kategori['nama'] }}</option>
                                            @endforeach
                                        </x-tom>
                                        {{--  <x-input-error for="kategori_id" class="mt-1" />  --}}
                                    </div>

                                    <!-- Judul -->
                                    <div class="mb-4">
                                        <x-label for="judul" value="Isi Judul" />
                                        <x-input wire:model.live="judul" id="judul" class="w-full mt-1" />
                                        {{--  <x-input-error for="judul" class="mt-1" />  --}}
                                    </div>

                                    <!-- Slug -->
                                    <div class="mb-4">
                                        <x-label for="slug" value="URL Preview" />
                                        <div
                                            class="flex items-center mt-1 space-x-2 text-gray-600 bg-gray-100 p-2 rounded">
                                            <span class="text-gray-500">{{ url('/') }}/</span>
                                            <span class="font-medium">{{ $slug ?: 'url-akan-muncul-disini' }}</span>
                                        </div>
                                        <x-input wire:model="slug" id="slug" class="w-full mt-1" readonly
                                            placeholder="Slug akan terisi otomatis" />
                                        {{--  <x-input-error for="slug" class="mt-1" />  --}}
                                    </div>

                                    <!-- Konten -->
                                    <div class="mb-4" wire:ignore>
                                        <x-label for="message" :value="__('Compose message')" />
                                        <textarea class="w-full mt-1 rounded-md border-gray-300 shadow-sm" name="konten" id="konten">{!! $konten !!}</textarea>
                                        {{--  <x-input-error for="konten" class="mt-1" />  --}}
                                    </div>

                                    <!-- Gambar Pertanyaan -->
                                    <div class="mb-4">
                                        <x-label for="gambar" value="Diskusi Gambar" />
                                        <input wire:model="gambar" id="gambar" type="file" class="w-full mt-1"
                                            accept="image/*" />


                                        @if ($gambar instanceof \Illuminate\Http\UploadedFile)
                                            <img src="{{ $gambar->temporaryUrl() }}"
                                                class="object-contain mt-2 max-h-48" alt="Preview Gambar Pertanyaan">
                                        @elseif ($oldGambarBerita)
                                            <img src="{{ asset('storage/' . $oldGambarBerita) }}"
                                                class="object-contain mt-2 max-h-48" alt="Gambar Pertanyaan Lama">
                                        @endif
                                    </div>

                                    <!-- Footer -->

                                    <x-secondary-button>
                                        Batal
                                    </x-secondary-button>
                                    <x-button class="ms-3" id="submit">
                                        Simpan
                                    </x-button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                console.log(editor.getData())
                @this.set('konten', editor.getData());
            });
        </script>

    </div>
</div>
