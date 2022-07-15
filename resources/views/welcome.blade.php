<x-guest-layout>
    <div class="relative  overflow-hidden">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class=" mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-40">
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-center ">
                    <h1
                        class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-center sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">
                            {{ __('Kudang Koding') }}
                        </span>
                        <span class="block text-gray-500 xl:inline">
                            {{ __('x') }}
                        </span>
                        <span class="block text-blue-600 xl:inline">
                            {{ __('Pakar') }}
                        </span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500">
                        {{ __('Kudang Koding X Pakar membuat aplikasi untuk mengetahui kecemasanmu.') }}
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                        <div class="rounded-xl shadow">
                            <a href="{{ route('dashboard') }}"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-xl text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-10">
                                {{ __('Get Started') }}
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</x-guest-layout>
