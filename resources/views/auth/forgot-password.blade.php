<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <x-label for="email" class="text-xl mb-4" value="{{ __('Lupa Password') }}" />
            </div>

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <button type="submit" class="text-center w-full items-center text-white px-4 py-2 bg-amber-400 border border-amber-400 rounded-md font-semibold text-xs uppercase tracking-widest font-bold focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Email Reset Link
                </button>
            </div>

            <p class="text-center text-xs mt-4">Sudah memiliki Akun? <a class="text-indigo-400" href="{{ route('login') }}">Masuk</a></p>
        
        </form>
    </x-authentication-card>
</x-guest-layout>
