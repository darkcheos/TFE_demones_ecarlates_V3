<nav x-data="{ open: false }" class=" col-xl-1">
    <div class="d-flex flex-xl-column">
        <div class="p-xl-auto p-2">
            <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                {{ __('Demande') }}
            </x-nav-link>
        </div>
        <div class="p-xl-auto p-2">
            <x-nav-link :href="route('admin.user')" :active="request()->routeIs('admin.user')">
                {{ __('Membres') }}
            </x-nav-link>
        </div>
        <div class="p-xl-auto p-2">
            <x-nav-link :href="route('admin.parametre')" :active="request()->routeIs('admin.parametre')">
                {{ __('Paramètres') }}
            </x-nav-link>
        </div>
    </div>
</nav>
