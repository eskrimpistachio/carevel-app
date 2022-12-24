<div class="flex flex-row bg-[#082032] justify-evenly">
    <div>
        <x-application-logo></x-application-logo>
        <x-guest-layout>
            <div class="justify-center text-center mb-8">
                <h1 class="text-3xl font-semibold">Welcome Back!</h1>
                <p class="text-sm font-light">a fast, safe, and practical place to accompany your trip</p>
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Username')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
    
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
    
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
    
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
    
                <!-- Remember Me -->
                <div class="flex mt-4 justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded dark:bg-[#082032] border-white text-[#082032] shadow-sm focus:ring-[#082032] dark:focus:ring-[#082032]"
                            name="remember">
                        <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-white text-sm" href="{{ route('password.request') }}">
                            {{ __('Forgot password') }}
                        </a>
                    @endif
                </div>
    
                <div class="flex flex-col items-center justify-end mt-4">
                    <x-primary-button class="ml-3">
                        {{ __('Login') }}
                    </x-primary-button>
                    <div class="flex justify-evenly gap-2 text-center my-4 font-semibold">
                        <p class="text-gray-500">Belum punya akun?</p>
                        <a class="text-white" href="/register">Daftar</a>
                    </div>
                </div>
            </form>
        </x-guest-layout>
    </div>
    <img src="./img/login-bg.png" alt="missing img" class="h-screen ml-auto">
</div>

