<div>
    {{-- Stop trying to control. --}}

    <div class="QA_table mb_30">
        <!-- table-responsive -->
        {{--  <table class="table lms_table_active">  --}}
        <table id="example" class="table table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal Publikasi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @isset($berita)
                    @foreach ($berita as $index => $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div>
                                    <!-- Link untuk Lightbox -->
                                    <a href="{{ Storage::url($item->gambar) }}" data-lightbox="gallery"
                                        data-title="{{ $item->judul }}">
                                        <img src="{{ Storage::url($item->gambar) }}" alt="Gambar {{ $item->judul }}"
                                            class="thumbnail" />
                                    </a>
                                </div>
                            </td>

                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->penulis->name ?? 'Penulis Tidak Ditemukan' }}</td>
                            <td>{{ $item->kategori->nama ?? 'Kategori Tidak Ditemukan' }}</td>
                            <td>
                                @if ($item->status == 1)
                                    <span class="px-2 py-1 text-white bg-red-500 rounded">Tidak Publis</span>
                                @elseif($item->status == 2)
                                    <span class="px-2 py-1 text-white bg-green-500 rounded">Publis</span>
                                @else
                                    <span class="px-2 py-1 text-white bg-gray-500 rounded">Tidak Diketahui</span>
                                @endif
                            </td>
                            <td>{{ $item->tanggal_publikasi }}</td>
                            <td>
                                <x-button wire:click="$dispatch('reinit-ckeditor')" wire:navigate
                                    href="/berita/{{ $item->id }}/edit/">Edit</x-button>
                                <x-danger-button
                                    @click="$dispatch('dispatch-berita-table-hapus', {id: {{ $item->id }}, judul: '{{ $item->judul }}'})">
                                    Hapus</x-danger-button>
                            </td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
</div>
