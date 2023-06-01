<nav x-data="{ open: false }" class="px-4 col-1">
    <div class="d-flex flex-column">
        <x-nav-link :href="route('admin.index')">
            {{ __('Demande') }}
        </x-nav-link>
        <x-nav-link :href="route('admin.user')">
            {{ __('Membre') }}
        </x-nav-link>
        <x-nav-link :href="route('admin.parametre')">
            {{ __('Parametre') }}
        </x-nav-link>
    </div>
</nav>
