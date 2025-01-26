<div class="QA_table mb_30">
    <table id="example" class="table table-striped nowrap" style="width:100%">
        <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Kategori</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @isset($data)
                @foreach ($data as $kategori)
                    <tr>
                        <td class="p-2 text-center border">
                            {{ $loop->iteration }}
                        </td>
                        <td class="p-2 border">{{ $kategori->nama }}</td>
                        <!-- <td class="p-2 text-center border">
                                                            <span
                                                                class="px-2 py-1 text-xs font-semibold rounded-full {{ $kategori->status === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                                                {{ ucfirst($kategori->status) }}
                                                            </span>
                                                        </td> -->
                        <td class="p-2 text-center border">
                            <div class="flex justify-center space-x-2">
                                <x-button type="button"
                                    @click="$dispatch('dispatch-kategori-table-edit', {id: {{ $kategori->id }}})"
                                    class="bg-blue-500 hover:bg-blue-600">
                                    Edit
                                </x-button>
                                <x-danger-button
                                    @click="$dispatch('dispatch-kategori-table-hapus', {id: {{ $kategori->id }}, kategori: '{{ $kategori->nama }}'})"
                                    class="bg-red-500 hover:bg-red-600">
                                    Hapus
                                </x-danger-button>

                                <x-success-button wire:click="$dispatch('reinit-ckeditor')" wire:navigate
                                    href="/subkategori/{{ $kategori->id }}/">
                                    Sub Kategori
                                </x-success-button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>
</div>
