<x-app-layout>
    <x-slot name="header">
        {{ __('Aides') }}
    </x-slot>

    <div class="">

        @auth
            @if (Auth::user()->use_role_id >= 4)
                <div class="dropdown text-white">
                    <div class="d-flex flex-column align-items-start">
                        <div class="dropdown d-flex flex-column text-white m-3">
                            <button class="btn btn-success m-1" data-bs-toggle="collapse" data-bs-target="#demo">
                                ajoute
                            </button>

                            <form id="demo" method="POST" action="{{ route('categorie.store') }}"
                                class="collapse bg-dark p-1 rounded-3">
                                @csrf

                                <div>
                                    <x-input-label for="cat_nom" :value="__('nom de la catégorie')" />
                                    <x-text-input id="cat_nom" class="block mt-1 w-full" type="text" name="cat_nom"
                                        required autofocus />
                                </div>

                                <div class="mt-3">
                                    <x-primary-button class="ml-3">
                                        {{ __('Enregistrer') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        @endauth

        <div class="d-flex flex-wrap">
            @foreach ($categories as $categorie)
            <div class="d-flex ms-2 my-2 border border-danger bg-dark">
                <a href="{{ route('aide.show', $categorie->id) }}" class=""><button
                        class="btn btn-dark">{{ ucwords($categorie->cat_nom) }}</button></a>
                @if (Auth::user()->use_role_id >= 4)
                    <form method="POST" action="{{ route('aide.cat.destroy', $categorie->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn">
                            <i class="bi bi-x-circle text-danger"></i>
                        </button>
                    </form>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
