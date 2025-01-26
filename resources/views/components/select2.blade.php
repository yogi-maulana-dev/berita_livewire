@props(['id' => null, 'name' => null, 'options' => [], 'placeholder' => 'Pilih...'])

<div class="select2-container">
    <select id="{{ $id }}" name="{{ $name }}" class="form-select w-full" {{ $attributes }}>
        <option value="" disabled selected>{{ $placeholder }}</option>
        @foreach ($options as $value => $label)
            <option value="{{ $value }}">{{ $label }}</option>
        @endforeach
    </select>
</div>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $('#{{ $id }}').select2({
                placeholder: '{{ $placeholder }}',
                allowClear: true,
                dropdownParent: $('#modalForm')
            });
        });
    </script>
@endpush
