<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-reservio border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-reservio-darker active:bg-reservio-darker focus:outline-none disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
