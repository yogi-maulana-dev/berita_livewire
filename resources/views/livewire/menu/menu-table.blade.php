<div class="QA_table mb_30">
    <table class="table lms_table_active">
        <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Urut</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @isset($data)
                @foreach ($data as $menu)
                    <tr>
                        <td class="p-2 text-center border">
                            {{ $loop->iteration }}
                        </td>
                        <td class="p-2 border">{{ $menu->nama_menu }}</td>
                        <td class="p-2 border">{{ $menu->urut }}</td>
                        <td class="p-2 text-center border">
                            <div class="flex justify-center space-x-2">
                                <x-button type="button"
                                    @click="$dispatch('dispatch-menu-table-edit', {id: {{ $menu->id }}})"
                                    class="bg-blue-500 hover:bg-blue-600">
                                    Edit
                                </x-button>
                                <x-danger-button
                                    @click="$dispatch('dispatch-menu-table-hapus', {id: {{ $menu->id }}, judul: '{{ $menu->nama_menu }}'})"
                                    class="bg-red-500 hover:bg-red-600">
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
