<div>
    <x-button @click="$wire.set('modalBeritaCreate', true)">
        Buat Soal
    </x-button>

    <x-dialog-modal wire:model.live="modalBeritaCreate" submit="save">
        <x-slot name="title">
            Soal Tambah
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">
                <!-- Nama Kategori -->
                <div class="col-span-12">
                    <x-label for="form.kategori_id" value="Nama Kategori" />
                    <select wire:model="form.kategori_id" id="form.kategori_id" class="w-full mt-1" required>
                        <!-- Populate options dynamically -->
                        <option value="">Pilih Data</option>
                        {{--  @foreach ($kategori as $category)
                            <option value="{{ $category->id }}">{{ $category->nama }}</option>
                        @endforeach  --}}
                    </select>
                    <x-input-error for="form.kategori_id" class="mt-1" />
                </div>

                <!-- Soal -->
                <div class="col-span-12">
                    <x-label for="form.soal" value="Soal" />
                    <textarea wire:model="form.soal" id="form.soal" class="w-full mt-1" required></textarea>
                    <x-input-error for="form.soal" class="mt-1" />
                </div>

                <!-- Gambar Pertanyaan -->
                <div class="col-span-12">
                    <x-label for="form.gambar_pertanyaan" value="Gambar Pertanyaan" />
                    <input wire:model="form.gambar_pertanyaan" id="form.gambar_pertanyaan" type="file"
                        class="w-full mt-1" accept=".jpg,.jpeg,.png" />
                    <!-- Pratinjau Gambar Pertanyaan -->
                    @if ($gambarPertanyaanPreview)
                        <div class="mt-2">
                            <span>Pratinjau Gambar Pertanyaan:</span>
                            <img src="{{ $gambarPertanyaanPreview }}" alt="Pratinjau Gambar Pertanyaan" class="mt-2"
                                style="max-width: 200px;">
                        </div>
                    @endif
                    <x-input-error for="form.gambar_pertanyaan" class="mt-1" />
                </div>

                <!-- Diskusi Gambar -->
                <div class="col-span-12">
                    <x-label for="form.diskusi_gambar" value="Diskusi Gambar" />
                    <input wire:model="form.diskusi_gambar" id="form.diskusi_gambar" type="file" class="w-full mt-1"
                        accept=".jpg,.jpeg,.png" />
                    <!-- Pratinjau Diskusi Gambar -->
                    @if ($diskusiGambarPreview)
                        <div class="mt-2">
                            <span>Pratinjau Diskusi Gambar:</span>
                            <img src="{{ $diskusiGambarPreview }}" alt="Pratinjau Diskusi Gambar" class="mt-2"
                                style="max-width: 200px;">
                        </div>
                    @endif
                    <x-input-error for="form.diskusi_gambar" class="mt-1" />
                </div>


                <!-- Diskusi -->
                <div class="col-span-12">
                    <x-label for="form.diskusi" value="Diskusi" />
                    <x-input wire:model="form.diskusi" id="form.diskusi" type="text" class="w-full mt-1" />
                    <x-input-error for="form.diskusi" class="mt-1" />
                </div>

                <!-- Jawaban -->
                <div class="col-span-12">
                    <x-label for="form.jawaban" value="Jawaban" />
                    <select wire:model="form.jawaban" id="form.jawaban" class="w-full mt-1" required>
                        <!-- Populate options for jawaban -->
                        <option value="">Pilih Jawaban</option>
                        <option value="1">Jawaban 1</option>
                        <option value="2">Jawaban 2</option>
                        <option value="3">Jawaban 3</option>
                        <option value="4">Jawaban 4</option>
                    </select>
                    <x-input-error for="form.jawaban" class="mt-1" />
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
