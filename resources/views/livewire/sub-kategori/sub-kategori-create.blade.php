<div>
    <!-- Tombol untuk membuka modal -->
    <x-button @click="$wire.set('modalSubKategoriCreate', true)">
        Buat Kategori
    </x-button>

    <!-- Dialog Modal untuk tambah kategori -->
    <x-dialog-modal wire:model.live="modalSubKategoriCreate" submit="save">
        <x-slot name="title">
            Sub Kategori Tambah
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <x-label for="form.nama_sub" value="Nama Sub Kategori" />
                    <x-input wire:model="form.nama_sub" id="form.nama_sub" type="text" class="mt-1 w-full" required
                        autocomplete="form.nama_sub" />
                    <x-input-error for="form.nama_sub" class="mt-1" />
                </div>
            </div>
        </x-slot>


        <x-slot name="footer">
            <!-- Tombol Batal -->
            <x-secondary-button @click="$wire.set('modalSubKategoriCreate', false)" wire:loading.attr="disabled">
                Batal
            </x-secondary-button>

            <!-- Tombol Simpan -->
            <x-button class="ms-3" wire:loading.attr="disabled">
                Simpan
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
