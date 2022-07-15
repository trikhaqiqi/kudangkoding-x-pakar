<x-guest-layout>
    <div class="flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl w-full space-y-8 bg-white md:border md:rounded-lg md:p-6 md:shadow-lg">
            <div>
                <div class="flex justify-center align-center">
                    <a href="{{ route('welcome') }}" class="inline-block">
                        <img class="mx-auto h-12 w-auto" src="{{ asset('img/logo.png') }}" alt="Diagnose Logo">
                    </a>
                </div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900 px-3">
                    {{ __('Daftar ke') }}
                </h2>
                <h2 class="text-center text-3xl font-extrabold text-gray-900 px-3">
                    {{ __('Kudang Koding x Pakar ') }}
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    {{ __('Already have an account ?') }}
                    <a href="{{ route('login') }}" class="font-bold text-blue-600 hover:text-blue-500">
                        {{ __('Sign In') }}
                    </a>
                </p>
            </div>

            <x-jet-validation-errors class="my-4" />

            @if (session('status'))
                <div class="my-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="remember" value="true">

                <div class="rounded-xl shadow-sm -space-y-px">
                    <div>
                        <!-- name field -->
                        <label for="name" class="sr-only">{{ __('Fullname') }}</label>
                        <input id="name" name="name" type="text" autocomplete="name" required
                            class="appearance-none rounded-xl relative block w-full px-3 py-2 mb-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                            placeholder="{{ __('Full Name') }}" value="{{ old('name') }}" autofocus>

                    </div>

                    <div>
                        <!-- email field -->
                        <label for="email-address" class="sr-only">{{ __('Email address') }}</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="appearance-none relative block w-full px-3 py-2 mb-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-xl focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                            placeholder="{{ __('Email address') }}" value="{{ old('email') }}">

                    </div>

                    <div>
                        <!-- gender field -->
                        <label for="gender" class="sr-only">{{ __('Gender') }}</label>
                        @php
                            $gender = collect(['male', 'female']);
                        @endphp
                        <select name="gender" id="gender"
                            class="appearance-none relative block w-full px-3 py-2 mb-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-xl focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                            required>
                            @foreach ($gender as $item)
                                <option value="{{ $item }}" {{ old('gender') == $item ? 'selected' : '' }}>
                                    {{ $item === 'male' ? 'Laki-Laki' : 'Perempuan' }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <!-- age field -->
                        <label for="age" class="sr-only">{{ __('Age') }}</label>
                        <input id="age" name="age" type="number" autocomplete="age" min="17"
                            max="70" required
                            class="appearance-none relative block w-full px-3 py-2 mb-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-xl focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                            placeholder="{{ __('Age') }}" value="{{ old('age') }}">

                    </div>

                    <div>
                        <!-- password field -->
                        <label for="password" class="sr-only">{{ __('Password') }}</label>
                        <input id="password" name="password" type="password" autocomplete="new-password" required
                            class="appearance-none relative block w-full px-3 py-2 mb-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-xl focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                            placeholder="{{ __('Password') }}">

                    </div>

                    <!-- password confirmation field -->
                    <label for="password_confirmation" class="sr-only">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" name="password_confirmation" type="password"
                        autocomplete="new-password" required
                        class="appearance-none rounded-xl relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                        placeholder="{{ __('Password Confirmation') }}">
                </div>

                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 mb-3 border border-transparent text-sm font-bold rounded-xl text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    {{ __('Sign Up') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
