<x-app-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <div class="container border border-danger text-white rounded-3 bg-dark px-2 py-3">
        <div class="py-2 px-4">
            Bienvenue chez les Démones Écarlates. Pour finaliser votre inscription rejoignez-nous sur discord, un de nos modérateurs vous y accueillera sur le canal recrutement.
        </div>
        <div class="py-2 px-4">
            <a class=" d-grid gap-2 d-md-flex justify-content-md-center"href="https://discord.com/invite/z6xNxCZ" target="_blank">
            <button class="btn btn-primary px-5" href="">
                <i class="bi bi-discord fs-4"></i>
            </button>
        </a>
        </div>
    </div>
</x-app-layout>