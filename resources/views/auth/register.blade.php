<div class="flex flex-row bg-[#082032] justify-evenly">
    <div>
        <x-application-logo></x-application-logo>
        <x-guest-layout>
            <div class="justify-center text-center">
                <h1 class="text-3xl font-semibold mb-4">Register</h1>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mt-2">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded dark:bg-[#082032] border-white text-[#082032] shadow-sm focus:ring-[#082032] dark:focus:ring-[#082032]"
                            name="remember">
                        <span
                            class="ml-2 text-[0.8em] text-white">{{ __('I accept the Terms of Services as well as Privacy Policy') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-center mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
                <div class="mt-4 text-center justify-center flex flex-row gap-2">
                    <p class="text-gray-500">Already have an account?</p>
                    <a class=" dark:text-white hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('login') }}">
                        {{ __('Login Now') }}
                    </a>
                </div>
            </form>
        </x-guest-layout>
    </div>
    <img src="./img/register-bg.png" alt="missing img" class="h-screen ml-auto">
</div>
