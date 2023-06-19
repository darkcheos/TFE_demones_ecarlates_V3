<x-app-layout>
    <x-slot name="header">
        {{ __('Aides') }}
    </x-slot>

    <div class="">

        <div>
            <a href="{{ route('aide.index') }}" class="btn btn-primary  m-3">
                retour
            </a>
        </div>

        @auth
            @if (Auth::user()->use_role_id >= 4)
                <div class="dropdown text-white">
                    <div class="d-flex flex-column align-items-start">
                        <div class="dropdown d-flex flex-column text-white m-3">
                            <button class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#demo"> Ajouter
                            </button>

                            <form id="demo" method="POST" action="{{ route('aide.store') }}"
                                class="collapse bg-dark p-1 rounded-3">
                                @csrf

                                <div>
                                    <x-input-label for="aid_titre" :value="__('Nom de l\'aide')" />
                                    <x-text-input id="aid_titre" class="block mt-1 w-full" type="text" name="aid_titre"
                                        required autofocus />
                                    <x-input-label for="aid_lien" :value="__('Lien')" />
                                    <x-text-input id="aid_lien" class="block mt-1 w-full" type="text" name="aid_lien" />
                                    <input name="aid_cat_id" hidden value="{{ $id }}" hidden>
                                </div>

                                <div class="flex items-center justify-end mt-4">
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

        <ul class="list-group list-group-flush bg-dark">
            <div class="mt-6 text-gray-500">
                @foreach ($aides as $aide)
                    <li
                        class="list-group-item border-danger border-bottom-0 border-end-0 border-top-0 bg-dark text-white m-1 d-flex flex-row align-items-center justify-content-center)">
                        @if (isset($aide->aid_lien))
                            <a href="{{ ucwords($aide->aid_lien) }}" class="btn text-white p-0 m-0" > {{ $aide->aid_titre }} <i class="bi bi-box-arrow-up-right"></i></a>
                        @else
                            {{ ucwords($aide->aid_titre) }}
                        @endif
                        @if (Auth::user()->use_role_id >= 4)
                            <form method="POST" action="{{ route('aide.destroy', $aide->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn">
                                    <i class="bi bi-x-circle text-danger"></i>
                                </button>
                            </form>
                        @endif
                @endforeach
            </div>
        </ul>
    </div>
</x-app-layout>
