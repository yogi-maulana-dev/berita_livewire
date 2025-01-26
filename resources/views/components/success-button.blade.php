<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150', 'style' => 'background-color: #28a745; border-color: #28a745;']) }}>
    {{ $slot }}
</button>
