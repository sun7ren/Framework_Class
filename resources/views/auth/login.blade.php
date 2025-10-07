<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 background-white" :status="session('status')" />

    <div class="ml-10 mr-10 rounded-xl">
        <h2 class="text-2xl font-bold text-green-700 text-center mb-6">Login to Your Account</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email"
                              class="block mt-1 w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500"
                              type="email"
                              name="email"
                              :value="old('email')"
                              required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password"
                              class="block mt-1 w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                           class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500"
                           name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 hover:text-green-600" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif

                <x-primary-button class="bg-green-600 hover:bg-green-700 focus:ring-green-500">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

            <!-- Register link -->
            <p class="mt-6 text-center text-sm text-gray-600">
                Don’t have an account?
                <a href="{{ route('register') }}" class="text-green-600 font-semibold hover:underline">Register here</a>
            </p>
        </form>
    </div>
</x-guest-layout>
