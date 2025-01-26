<div class="QA_table mb_30">
    <table class="table lms_table_active">
        <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">SubKategori</th>
                <th scope="col">Urutan</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @isset($data)
                @foreach ($data as $subkategori)
                    <tr>
                        <td class="p-2 text-center border">
                            {{ $loop->iteration }}
                        </td>
                        <td class="p-2 border">{{ $subkategori->nama_sub }}</td>
                        <td class="p-2 border">{{ $subkategori->urut }}</td>
                        <td class="p-2 text-center border">
                            <div class="flex justify-center space-x-2">
                                <x-button type="button"
                                    @click="$dispatch('dispatch-subkategori-table-edit', {id: {{ $subkategori->id }}})"
                                    class="bg-blue-500 hover:bg-blue-600">
                                    Edit
                                </x-button>
                                <x-danger-button wire:click="$dispatch('reinit-ckeditor')" wire:navigate
                                    href="/subkategori/{{ $subkategori->id }}/">
                                    Hapus
                                </x-danger-button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>
</div>
