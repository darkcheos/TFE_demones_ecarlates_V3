<nav class="navbar navbar-expand-md navbar-dark bg-dark bg-gradient px-3">

    <a class="navbar-brand text-danger" href="{{ route('accueil') }}">
        <div class=""> {{ config('app.name', 'Laravel') }} </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navigation Links -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <x-nav-link :href="route('accueil')" :active="request()->routeIs('accueil')">
                    {{ __('Accueil') }}
                </x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link :href="route('event.index')" :active="request()->routeIs('event.index')">
                    {{ __('Events') }}
                </x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link :href="route('personnage.index')" :active="request()->routeIs('personnage.index')">
                    {{ __('Membres') }}
                </x-nav-link>
            </li>
            @auth
                @if (Auth::user()->use_role_id >= 2)
                    <li class="nav-item">
                        <x-nav-link :href="route('aide.index')" :active="request()->routeIs('aide.index')">
                            {{ __('Aides') }}
                        </x-nav-link>
                    </li>
                @endif

                <li class="nav-item">
                    <div class="dropdown dropdown-end d-flex flex-column">
                        <button type="button" class="btn btn-dark dropdown-toggle fs-5" data-bs-toggle="dropdown">
                            {{ ucwords(auth::user()->login) }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-lg-end px-2">
                            <li class="nav-item text-center">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    {{ __('Compte') }}
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="dropdown-item" href="{{ route('personnage.edit') }}">
                                    {{ __('Personnage') }}
                                </a>
                            </li>
                            @if (auth::user()->use_role_id >= 6)
                                <li class="nav-item text-center">
                                    <a class="dropdown-item" href="{{ route('admin.index') }}">
                                        {{ __('Admin') }}
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item text-center">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Deconnexion') }}
                                </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            @else
            <li class="nav-item">
                <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                    {{ __('Inscription') }}
                </x-nav-link>
            </li>
                <li class="nav-item">
                    <div class="dropdown d-flex  flex-column">
                        <button type="button" class="btn btn-dark dropdown-toggle fs-5" data-bs-toggle="dropdown"
                            data-bs-auto-close="false" aria-expanded="false">
                            Connexion
                        </button>
                        <div class="dropdown-menu  dropdown-menu-end dropdown-menu-dark px-2"
                            aria-labelledby="dropdownMenuClickable">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- name Address -->
                                <div class="form-group">
                                    <x-input-label for="login" :value="__('login')" />
                                    <x-text-input id="login" class="" type="text" name="login"
                                        :value="old('login')" required autofocus />
                                    <x-input-error :messages="$errors->get('login')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="form-group mt-2">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="" type="password" name="password" required
                                        autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="form-group mt-3">
                                    <div class="form-check">
                                        <label for="remember_me" class="form-check-label">
                                            <input id="remember_me" type="checkbox" class="form-check-input"
                                                name="remember">
                                            <span
                                                class="">{{ __('se souvenir de moi') }}</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="d-flex flex-column mt-2">
                                    @if (Route::has('password.request'))
                                        <a class="dropdown-item" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublier?') }}
                                        </a>
                                    @endif

                                    <x-primary-button class="">
                                        {{ __('Login') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            @endauth
        </ul>
    </div>

</nav>
