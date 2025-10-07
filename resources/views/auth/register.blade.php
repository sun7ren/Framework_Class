<x-guest-layout>
    <div class="ml-10 mr-10 xrounded-lg p-8">
        <h2 class="text-2xl font-bold text-green-700 text-center mb-6">Create an Account</h2>

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" class="font-medium text-gray-700" />
                <x-text-input id="name" class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring-green-500" 
                              type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="font-medium text-gray-700" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring-green-500" 
                              type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="font-medium text-gray-700" />
                <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring-green-500"
                              type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-medium text-gray-700" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring-green-500"
                              type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
            </div>

            <!-- Register Button -->
            <div class="flex items-center justify-between">
                <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-green-700">Already registered?</a>
                <x-primary-button class="bg-green-600 hover:bg-green-700 focus:ring-green-500">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
