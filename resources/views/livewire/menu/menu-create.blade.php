<div>
    <!-- Tombol untuk membuka modal -->
    <x-button @click="$wire.set('modalMenuCreate', true)">
        Buat Menu
    </x-button>

    <!-- Dialog Modal untuk tambah kategori -->
    <x-dialog-modal wire:model.live="modalMenuCreate" submit="save">
        <x-slot name="title">
            Menu Tambah
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <x-label for="form.nama_menu" value="Nama Menu" />
                    <x-input wire:model="form.nama_menu" id="form.nama_menu" type="text" class="mt-1 w-full" required
                        autocomplete="form.nama_menu" />
                    <x-input-error for="form.nama_menu" class="mt-1" />
                </div>
                <div class="col-span-12">
                    <x-label for="form.url" value="Url" />
                    <x-input wire:model="form.url" id="form.url" type="text" class="mt-1 w-full"
                        autocomplete="form.url" />
                    <x-input-error for="form.url" class="mt-1" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <!-- Tombol Batal -->
            <x-secondary-button @click="$wire.set('modalMenuCreate', false)" wire:loading.attr="disabled">
                Batal
            </x-secondary-button>

            <!-- Tombol Simpan -->
            <x-button class="ms-3" wire:loading.attr="disabled">
                Simpan
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
