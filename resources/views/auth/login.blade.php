<x-guest-layout>

    <x-authentication-card>
        <x-slot name="logo">
            <img class="h-20 w-auto" src="{{ asset('img/pcteam.png') }}" alt="Polibatam Cyber Team">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" class="text-xl mb-4" value="{{ __('Masuk') }}" />
            </div>

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            

            <div class="flex items-center justify-start mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-indigo-500 hover:text-indigo-800  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Lupa Password Anda?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-center mt-4">
                <button type="submit" class="text-center items-center text-amber-400 px-4 py-2 bg-white border border-amber-400 rounded-md font-semibold text-xs uppercase tracking-widest font-bold focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Masuk
                </button>
            </div>

            <p class="text-center text-xs mt-4">Belum memiliki Akun? <a class="text-indigo-400" href="{{ route('register') }}">Daftar Sekarang</a></p>
        </form>
    </x-authentication-card>
</x-guest-layout>
