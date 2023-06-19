<x-app-layout>
    <x-slot name="header">
        {{ __('Évènements') }}
    </x-slot>

    <div class="py-12">
        <div class="d-flex flex-column align-items-center">
            <div id="time" class="text-center text-white fs-4"></div>

            @auth
                @if (Auth::user()->use_role_id >= 4)
                    <div class="dropdown d-flex flex-column text-white">
                        <x-success-button class="m-4" data-bs-toggle="collapse" data-bs-target="#demo">Ajouter un
                            évènement</x-success-button>
                        <form id="demo" method="POST" action="{{ route('event.store') }}"
                            class="collapse bg-dark p-3 rounded-3">
                            @csrf

                            <div class="form-group">
                                <label for="titre" class="col-form-label">Image</label>

                                <div>
                                    <select id="image" name="image">
                                        <?php foreach ($images as $image) : ?>
                                        <option value="{{ $image->id }}">{{ $image->ime_nom }}</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <x-input-label for="eve_titre" :value="__('Titre')" />
                                <x-text-input id="eve_titre" class="block mt-1 w-full" type="text" name="eve_titre"
                                    required autofocus />
                            </div>

                            <div class="mt-2">
                                <x-input-label for="eve_contenu" :value="__('Contenu')" />
                                <x-text-input id="eve_contenu" class="block mt-1 w-full" type="text" name="eve_contenu"
                                    required />
                            </div>
                            <div class="mt-2">
                                <x-input-label for="eve_date_event" :value="__('Date début event')" />

                                <x-text-input-datetime id="eve_date_event" class="block mt-1 w-full" type="datetime-local"
                                    name="eve_date_event" required />
                            </div>
                            <div class="mt-2">
                                <x-input-label for="eve_fin_event" :value="__('Date fin event')" />

                                <x-text-input-datetime id="eve_fin_event" class="block mt-1 w-full" type="datetime-local"
                                    name="eve_fin_event" required />
                            </div>

                            <div class="flex items-center justify-end mt-2">
                                <x-primary-button class="ml-3">
                                    {{ __('Enregistrer') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                @endif
            @endauth
            @foreach ($events as $event)
                <article
                    class="row justify-content-center text-center col-md-7  bg-dark text-white m-4 border border-danger rounded-3 py-3">
                    <header class="w-full text-center">
                        @if ($event->eve_date_event <= date('Y-m-d H:i:s'))
                            évènement cours
                        @endif
                        <div class=" d-flex justify-content-center" style="height: 300px;">
                            <img src="{{ asset($event->eve_ime->ime_lien) }}" class=" mx-auto my-auto w-auto"
                                alt="..." style="max-height: 300px; max-width: 100%;">
                        </div>
                        <h3 class="my-3">{{ $event->eve_titre }}</h3>
                    </header>
                    <main class="mb-3 text-center">
                        <p>{{ $event->eve_contenu }}</p>
                        Début le {{ gmdate('d/m/Y H:i', strtotime($event->eve_date_event)) }} - fin le
                        {{ gmdate('d/m/Y H:i', strtotime($event->eve_fin_event)) }}
                    </main>
                    <footer class="d-flex justify-content-center">
                        @auth
                            @if (Auth::user()->use_role_id >= 5)
                                <a href="{{ route('event.edit', $event) }}"class="mx-2">
                                <x-success-button >modifier</x-success-button></a>
                                <form method="POST" action="{{ route('event.destroy', $event) }}">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button type='submit' class="mx-2">
                                        {{ __("Supprimer") }}
                                    </x-danger-button>
                                </form>
                            @endif
                        @endauth
                    </footer>
                </article>
            @endforeach
        </div>
    </div>
</x-app-layout>
