<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-12 py-2 bg-[#FF4C29] border border-transparent rounded-md font-semibold text-lg text-white hover:bg-white hover:text-[#FF4C29] focus:bg-[#FF4C29] active:bg-[#FF4C29]focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
