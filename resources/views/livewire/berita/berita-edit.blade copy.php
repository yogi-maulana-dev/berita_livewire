<div>
    @push('styles')
        <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.css" crossorigin>
        {{--  <link rel="stylesheet"
            href="https://cdn.ckeditor.com/ckeditor5-premium-features/44.1.0/ckeditor5-premium-features.css" crossorigin>  --}}
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
                <div class="col-span-12">
                    <x-label for="editor" value="Isi konten" />
                    <textarea id="editor" wire:key="editor-{{ now() }}" class="w-full mt-1 rounded-md border-gray-300 shadow-sm"></textarea>
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
            <x-secondary-button @click="$wire.set('modalBeritaEdit', false)" wire:loading.attr="disabled">
                Batal
            </x-secondary-button>
            <x-button class="ms-3" wire:loading.attr="disabled">
                Simpan
            </x-button>
        </x-slot>
    </x-dialog-modal>


    <!-- JavaScript yang diperlukan -->
    @push('scripts')
        <script src="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.umd.js"></script>
        <script>
            const {
                ClassicEditor,
                Essentials,
                Paragraph,
                Bold,
                Italic,
                Font
            } = CKEDITOR;
            // Create a free account and get <YOUR_LICENSE_KEY>
            // https://portal.ckeditor.com/checkout?plan=free
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NjcxMzkxOTksImp0aSI6IjYxODQwNDc0LTQ2ZDItNDk4OS04NzYwLWQ0NGNlNDdkYTc5YSIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiXSwiZmVhdHVyZXMiOlsiRFJVUCJdLCJ2YyI6IjgwN2Q3NWFjIn0.ZZfWwiwUNLa0SSuo-WQ9jH-43AloysF0eyrc_Eom4ol3DnWTP0SwFDmnWAYsqlD6hZh3aWz4sR8banDMuNRbrA',
                    plugins: [Essentials, Paragraph, Bold, Italic, Font],
                    toolbar: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                })
                .then(editor => {
                    window.editor = editor;
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush

</div>
