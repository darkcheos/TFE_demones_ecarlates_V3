<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="mx-auto">
        <ul class="navbar-nav">
            <!-- Navigation Links -->
            <li class="nav-item d-flex align-items-center d-flex justify-content-center">
                <x-nav-link :href="url('https://discord.com/invite/z6xNxCZ')" target="_blank">
                    <i class="bi bi-discord fs-3 d-flex align-items-center"></i>
                </x-nav-link>
            </li>
            <li class="nav-item d-flex align-items-center">
                <x-nav-link :href="route('mention')">
                    Mentions légales
                </x-nav-link>
            </li>
        </ul>
    </div>
</nav>
