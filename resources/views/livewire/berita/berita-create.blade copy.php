<div>
    <x-button @click="$wire.set('modalBeritaCreate', true)">
        Tambah Konten
    </x-button>

    <x-dialog-modal wire:model.live="modalBeritaCreate" submit="save">
        <x-slot name="title">
            Form Tambah Konten
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
                        @set-kategori-create.window="$el.kategori.addOption(event.detail.data)"
                        @set-reset.window="$el.kategori.clear()" id="form.kategori_id" wire:model="form.kategori_id"
                        placeholder="Cari Kategori...">
                        <option></option>
                    </x-tom>

                    <x-input-error for="form.kategori_id" class="mt-1" />
                </div>

                <!-- Judul -->
                <div class="col-span-12">
                    <x-label for="form.judul" value="Isi Judul" />
                    <x-input wire:model.live="form.judul" id="form.judul" class="w-full mt-1"></x-input>
                    <x-input-error for="form.judul" class="mt-1" />
                </div>

                <!-- Slug -->
                <!-- Slug -->
                <div class="col-span-12">
                    <x-label for="form.slug" value="URL Preview" />
                    <div class="flex items-center mt-1 space-x-1 text-gray-600 bg-gray-100 p-2 rounded">
                        <span class="text-gray-500">{{ url('/') }}/</span>
                        <span class="font-medium">{{ $form->slug ?: 'url-akan-muncul-disini' }}</span>
                    </div>
                    <x-input wire:model="form.slug" id="form.slug" class="w-full mt-1" readonly
                        placeholder="Slug akan terisi otomatis"></x-input>
                    <x-input-error for="form.slug" class="mt-1" />
                </div>

                <!-- Konten -->
                <div class="col-span-12">
                    <x-label for="form.konten" value="Isi konten" />
                    <textarea wire:model="form.konten" id="form.konten" class="w-full mt-1" rows="3" required></textarea>
                    <x-input-error for="form.soal" class="mt-1" />
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
            <x-secondary-button @click="$wire.set('modalBeritaCreate', false)" wire:loading.attr="disabled">
                Batal
            </x-secondary-button>

            <x-button class="ms-3" wire:loading.attr="disabled">
                Simpan
            </x-button>


        </x-slot>
    </x-dialog-modal>
</div>
