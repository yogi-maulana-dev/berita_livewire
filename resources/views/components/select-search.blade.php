@props([
    'options' => [],
    'placeholder' => 'Pilih Data',
    'name' => '',
    'id' => '',
    'wire' => null,
    'required' => false,
])

<div wire:ignore>
    <select id="{{ $id }}" name="{{ $name }}" {{ $wire ? "wire:model.live=$wire" : '' }}
        {{ $required ? 'required' : '' }} {{ $attributes->merge(['class' => 'w-full mt-1']) }}>
        <option value="">{{ $placeholder }}</option>
    </select>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:initialized', () => {
            let select = new TomSelect('#{{ $id }}', {
                create: false,
                maxItems: 1,
                valueField: 'id',
                labelField: 'nama',
                searchField: 'nama',
                placeholder: '{{ $placeholder }}',
                preload: false,
                minLength: 2,
                render: {
                    no_results: function(data, escape) {
                        return '<div class="py-2 px-3 text-gray-600">Tidak ada hasil ditemukan</div>';
                    },
                    loading: function(data, escape) {
                        return '<div class="py-2 px-3 text-gray-600">Mencari...</div>';
                    },
                    not_loading: function(data, escape) {
                        return '<div class="py-2 px-3 text-gray-600">Ketik minimal 2 karakter untuk mencari...</div>';
                    },
                },
                load: function(query, callback) {
                    if (!query.length || query.length < 2) {
                        callback();
                        return;
                    }

                    // Memanggil metode Livewire untuk mencari kategori berdasarkan query
                    @this.searchKategori(query).then(results => {
                        callback(results); // Menyediakan hasil pencarian
                    }).catch(() => {
                        callback(); // Jika terjadi error, panggil callback tanpa hasil
                    });
                },
                shouldLoad: function(query) {
                    return query.length >= 2; // Hanya memuat data jika query lebih dari 2 karakter
                }
            });

            // Set nilai awal untuk TomSelect jika ada
            @this.on('beritaLoaded', kategori_id => {
                select.setValue(kategori_id); // Set kategori yang sudah ada
            });

            // Reset TomSelect ketika modal disembunyikan
            Livewire.on('hidden-dialog-modal', () => {
                select.clear(); // Menghapus pilihan yang ada di select
            });
        });
    </script>
@endpush
