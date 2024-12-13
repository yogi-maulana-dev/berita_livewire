<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full px-8 py-4 mt-4 text-white bg-indigo-500 rounded-lg hover:bg-indigo-700']) }}>
    {{ $slot }}
</button>
