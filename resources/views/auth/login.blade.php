<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>

        </div>

        <span class="flex justify-center w-full mt-2 text-gray-500"> - OR -</span>

        <div class="flex flex-col w-full mt-4 space-y-2">

            <x-social-login-button class="bg-blue-700 hover:bg-blue-600" href="{{ route('socialite.redirect','facebook') }}">
                <i class="fa-brands fa-facebook"></i>
                <span>Login With Facebook</span>
            </x-social-login-button>

            <x-social-login-button class="bg-red-700 hover:bg-red-600" href="{{ route('socialite.redirect','google') }}">
                <i class="fa-brands fa-google"></i>
                <span>Login With Google</span>
            </x-social-login-button>

            <x-social-login-button class="bg-gray-800 hover:bg-gray-700" href="{{ route('socialite.redirect','github') }}">
                <i class="fa-brands fa-github"></i>
                <span>Login With GitHub</span>
            </x-social-login-button>

            <x-social-login-button class="bg-orange-600 hover:bg-orange-500" href="{{ route('socialite.redirect','gitlab') }}">
                <i class="fa-brands fa-gitlab"></i>
                <span>Login With GitLab</span>
            </x-social-login-button>

            <x-social-login-button class="bg-sky-600 hover:bg-sky-500" href="{{ route('socialite.redirect','twitter') }}">
                <i class="fa-brands fa-twitter"></i>
                <span>Login With Twitter</span>
            </x-social-login-button>

            <x-social-login-button class="bg-cyan-700 hover:bg-cyan-600" href="{{ route('socialite.redirect','linkedin') }}">
                <i class="fa-brands fa-linkedin-in"></i>
                <span>Login With LinkedIn</span>
            </x-social-login-button>

            <x-social-login-button class="bg-blue-800 hover:bg-blue-700" href="{{ route('socialite.redirect','bitbucket') }}">
                <i class="fa-brands fa-bitbucket"></i>
                <span>Login With BitBucket</span>
            </x-social-login-button>

        </div>
    </form>
</x-guest-layout>
