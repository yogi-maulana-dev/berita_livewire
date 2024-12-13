<div class="QA_table mb_30">
    <!-- table-responsive -->
    <table class="table lms_table_active">
        <thead>
            <tr>
                <th scope="col">No Urut</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @isset($data)
                @foreach ($data as $kategori)
                    <tr>
                        <td class="p-2 text-center border border-spacing-1">{{ $loop->iteration }}</td>
                        <td class="p-2 border border-spacing-1">{{ $kategori->nama }}</td>
                        <td class="p-2 border border-spacing-1">
                            {{--  <x-button type="button"
                                @click="$dispatch('dispatch-kategori-table-edit', {id: {{ $kategori->id }}})">Edit</x-button>
                            <x-danger-button
                                @click="$dispatch('dispatch-kategori-table-hapus', {id: {{ $kategori->id }}})">Hapus</x-danger-button>  --}}
                        </td>
                    </tr>
                @endforeach
            @endisset

        </tbody>
    </table>
</div>
