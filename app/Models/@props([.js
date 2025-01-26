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

                // Prevent loading all options at start
                preload: false,

                // Minimum characters to start search
                minLength: 2,

                // Custom loading states
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

                // Load options through Livewire
                load: function(query, callback) {
                    if (!query.length || query.length < 2) {
                        callback();
                        return;
                    }

                    @this.searchKategori(query).then(results => {
                        callback(results);
                    }).catch(() => callback());
                },

                // Only search when typing
                shouldLoad: function(query) {
                    return query.length >= 2;
                }
            });

            // Reset tomselect when modal is hidden
            Livewire.on('hidden-dialog-modal', () => {
                select.clear();
            });
        });
    </script>
@endpush
