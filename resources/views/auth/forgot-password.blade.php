<x-guest-layout>
    <div class="flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl w-full space-y-8 bg-white md:border md:rounded-lg md:p-6 md:shadow-lg">
            <div>
                <div class="flex justify-center align-center">
                    <a href="{{ route('welcome') }}" class="inline-block">
                        <img class="mx-auto h-12 w-auto" src="{{ asset('img/logo.png') }}" alt="Diagnose Logo">
                    </a>
                </div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    {{ __('Reset Password') }}
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </p>
            </div>

            <x-jet-validation-errors class="my-4" />

            @if (session('status'))
                <div class="my-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form class="mt-8 space-y-6" method="POST" action="{{ route('password.email') }}">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="rounded-xl shadow-sm -space-y-px">
                    <div>
                        <label for="email-address" class="sr-only">{{ __('Email address') }}</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="appearance-none  relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-xl focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                            placeholder="{{ __('Email address') }}" value="{{ old('email') }}" autofocus>
                    </div>
                </div>

                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    {{ __('Email Password Reset Link') }}
                </button>

            </form>
        </div>
    </div>
</x-guest-layout>
