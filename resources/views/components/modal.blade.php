@props(['id', 'maxWidth'])

@php
    $id = $id ?? md5($attributes->wire('model'));
    $maxWidth = [
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
        '2xl' => 'max-w-2xl',
        '4xl' => 'max-w-4xl',
    ][$maxWidth ?? '4xl'];
@endphp

<div x-data="{ show: @entangle($attributes->wire('model')) }" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-show="show"
    id="{{ $id }}" class="fixed inset-0 z-[9999] overflow-hidden" style="display: none;">
    <!-- Full page overlay -->
    <div x-show="show" class="fixed inset-0 bg-black bg-opacity-50 transition-opacity z-[9998]" x-on:click="show = false"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

    <!-- Modal Content -->
    <div class="fixed inset-0 z-[99999] overflow-y-auto">
        <div class="flex min-h-screen items-center justify-center p-4 mt-[100px]">
            <!-- Margin-top lebih besar untuk desktop -->
            <div
                class="relative w-full bg-white rounded-lg shadow-4xl transform transition-all {{ $maxWidth }} mx-auto sm:mx-2 sm:p-2">
                <!-- Modal Content -->
                <div x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

</div>
