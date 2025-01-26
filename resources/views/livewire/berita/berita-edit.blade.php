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
                                        <x-tom x-init="$el.kategori = new Tom($el, {
                                            sortField: {
                                                field: 'nama',
                                                direction: 'asc'
                                            },
                                            valueField: 'id',
                                            labelField: 'nama',
                                            searchField: 'nama',
                                            options: {{ json_encode($kategoris) }},
                                            placeholder: 'Pilih Kategori',
                                            items: ['{{ $kategori_id }}']
                                        });"
                                            @set-kategori-create.window="
                                                $el.kategori.addOptions(event.detail.data);
                                                $el.kategori.addItem(event.detail.id);
                                            "
                                            @set-reset.window="$el.kategori.clear()" wire:model.live="kategori_id"
                                            id="kategori-create" class="mt-1 w-full" required
                                            autocomplete="kategori-create">
                                            <option value="">Pilih Kategori</option>
                                        </x-tom>
                                        <x-input-error for="kategori_id" class="mt-1" />
                                    </div>

                                    <div class="mb-4">
                                        <x-label for="subkategori_id" value="Pilih Sub Kategori" />
                                        <x-tom x-init="$el.subkategori = new Tom($el, {
                                            sortField: {
                                                field: 'nama_sub',
                                                direction: 'asc'
                                            },
                                            valueField: 'id',
                                            labelField: 'nama_sub',
                                            searchField: 'nama_sub',
                                            options: {{ json_encode($subkategoris) }},
                                            placeholder: 'Pilih Sub Kategori',
                                            items: ['{{ $subkategori_id }}']
                                        });"
                                            @set-subkategori-create.window="
                                                        $el.subkategori.clear();
                                                        if (event.detail && event.detail.data && event.detail.data.length > 0) {
                                                            $el.subkategori.clearOptions();
                                                            $el.subkategori.addOptions(event.detail.data);
                                                            $el.subkategori.addItem(event.detail.id || '');
                                                            $el.subkategori.enable();
                                                        } else {
                                                            $el.subkategori.clearOptions();
                                                            $el.subkategori.disable();
                                                        }
                                                    "
                                            wire:model.live="subkategori_id" id="subkategori-create" class="mt-1 w-full"
                                            required autocomplete="subkategori-create">
                                            <option value="">Pilih Sub Kategori</option>
                                        </x-tom>
                                        <x-input-error for="subkategori_id" class="mt-1" />
                                    </div>


                                    <!-- Judul -->
                                    <div class="mb-4">
                                        <x-label for="judul" value="Isi Judul" />
                                        <x-input wire:model.live="judul" id="judul" class="w-full mt-1" />
                                        <x-input-error for="judul" class="mt-1" />
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
                                    </div>

                                    <div class="mb-4">
                                        <x-label for="type" value="Pilih Tipe" />
                                        <select wire:model.live="type" id="type"
                                            class="w-full mt-1 border-gray-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                            <option value="">-- Pilih Tipe --</option>
                                            <option value="1">Berita</option>
                                            <option value="2">Video</option>
                                        </select>
                                        <x-input-error for="type" class="mt-1" />
                                    </div>



                                    <!-- Konten -->
                                    <div class="mb-4" wire:ignore>
                                        <x-label for="konten" value="Isi Konten" />
                                        <textarea id="konten" wire:model.defer="konten" class="w-full mt-1 rounded-md border-gray-300 shadow-sm">{!! $konten !!}</textarea>
                                    </div>

                                    <x-input-error for="konten" class="mt-1" />

                                    <!-- Gambar -->
                                    <div class="mb-4">
                                        <x-label for="gambar" value="Gambar Berita" />
                                        <input wire:model="gambar" id="gambar" type="file" class="w-full mt-1"
                                            accept="image/*" />

                                        @if ($gambar instanceof \Illuminate\Http\UploadedFile)
                                            <img src="{{ $gambar->temporaryUrl() }}"
                                                class="object-contain mt-2 max-h-48" alt="Preview Gambar">
                                        @elseif ($oldGambarBerita)
                                            <img src="{{ asset('storage/' . $oldGambarBerita) }}"
                                                class="object-contain mt-2 max-h-48" alt="Gambar Lama">
                                        @endif
                                        <x-input-error for="gambar" class="mt-1" />
                                    </div>

                                    <!-- Footer -->
                                    <div class="flex justify-end mt-4">
                                        <x-secondary-button type="button" wire:navigate href="{{ route('berita') }}">
                                            Batal
                                        </x-secondary-button>
                                        <x-button class="ms-3" wire:click="edit">
                                            Simpan
                                        </x-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @push('scripts')
            <script>
                var options = {
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                };

                // Menggunakan CKEDITOR.replace dengan opsi konfigurasi
                var editor = CKEDITOR.replace('konten', {
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
                    ]
                });

                // Menangani perubahan data pada editor
                editor.on('change', function(event) {
                    console.log(event.editor.getData());
                    @this.set('konten', event.editor.getData());
                });

                // Event listener untuk tombol submit
                document.querySelector("#submit").addEventListener("click", function() {
                    console.log(editor.getData());
                    @this.set('konten', editor.getData());
                });
            </script>
        @endpush

    </div>
</div>
