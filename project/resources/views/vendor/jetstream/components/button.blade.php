<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-block px-6 py-2.5 bg-[#29A9DF] text-white font-medium text-s leading-tight rounded-full shadow-md hover:bg-[#29A9DF] hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out text-center font-bold']) }}>
    {{ $slot }}
</button>
