<div>
    <x-dialog-modal wire:model.live="modalKategoriEdit" submit="edit">
        <x-slot name="title">
            Kategori Edit
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <x-label for="form.nama" value="Nama Kategori" />
                    <x-input wire:model='form.nama' id="form.nama" type="text" class="mt-1 w-full" required
                        autocomplete="form.nama" />
                    <x-input-error for="form.nama" class="mt-1" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalKategoriEdit', false)" wire:loading.attr="disabled">
                Batal
            </x-secondary-button>

            <x-button class="ms-3" wire:loading.attr="disabled">
                Update
            </x-button>
        </x-slot>
    </x-dialog-modal>

</div>
