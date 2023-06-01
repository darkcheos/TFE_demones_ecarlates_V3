<x-guest-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Inscription') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="login" :value="__('Login')" />
            <x-text-input id="login" class="block w-full" type="text" name="login" :value="old('login')" required
                autofocus />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>

        <div class="mt-2">
            <x-input-label for="use_firstname" :value="__('Prenom du perso')" />
            <x-text-input id="use_firstname" class="block w-full" type="text" name="use_firstname" :value="old('use_firstname')"
                required autofocus />
            <x-input-error :messages="$errors->get('use_firstname')" class="mt-2" />
        </div>

        <div class="mt-2">
            <x-input-label for="use_lastname" :value="__('Nom du perso')" />
            <x-text-input id="use_lastname" class="block w-full" type="text" name="use_lastname" :value="old('use_lastname')"
                required autofocus />
            <x-input-error :messages="$errors->get('use_lastname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-2">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full" type="password" name="password_confirmation"
                required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-2">
            <a class="" href="{{ route('login') }}">
                {{ __('Déjà enregistré?') }}
            </a>

            <div class="row justify-content-center">
                <x-primary-button class="col-md-4">
                    {{ __('Inscription') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
