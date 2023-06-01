<x-app-layout>
    <x-slot name="header">
        {{ __('Personnages') }}
    </x-slot>

    <div class="row justify-content-center">
        @foreach ($personnages as $personnage)
            @if ($personnage->use_role_id != 1)
                <div class="d-flex pt-1 pb-1 justify-content-center col-lg-3  flex-wrap mb-3 mt-3">
                    <a href="{{ route('personnage.show', $personnage) }}"
                        class=" justify-content-center btn btn-dark col-12 border border-danger" role="button">
                        <article class=" justify-content-center p-2">
                            <header style="height: 260px" class="d-flex align-items-center mb-4 mt-3">
                                <img src="{{ asset($personnage->use_avatar) }}"
                                    class="img-fluid rounded mx-auto d-block align-items-center" alt=""
                                    style="max-height: 260px">
                            </header>
                            <main>
                                <h4 class=" justify-content-center">
                                    {{ ucwords($personnage->use_firstname . ' ' . $personnage->use_lastname) }}</h4>
                                <p>{{ $personnage->use_role->rol_nom }}</p>
                            </main>
                            <footer class="mb-2">
                                @if ($personnage->use_tank == 1)
                                    Tank
                                @endif
                                @if ($personnage->use_DPS == 1)
                                    DPS
                                @endif
                                @if ($personnage->use_heal == 1)
                                    Heal
                                @endif
                            </footer>
                        </article>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</x-app-layout>
