<x-app-layout>
    <x-slot name="header">
        {{ __('Évenements') }}
    </x-slot>

    <div class="py-12">
        <div class="d-flex flex-column align-items-center">
            <div id="time" class="text-center text-white fs-4"></div>
            <article
                class="row justify-content-center text-center col-md-7  bg-dark text-white m-4 pt-5 border border-danger rounded-3 py-3">
                <form method="POST" action="{{ route('event.update', $event) }}">
                    @csrf
                    @method('patch')
                    <header class="w-full text-center">
                        <div class=" d-flex justify-content-center" style="height: 300px;">
                            <img src="{{ asset($event->eve_ime->ime_lien) }}" class=" mx-auto my-auto w-auto"
                                alt="..." style="max-height: 300px; max-width: 100%;">
                        </div>

                        <div class="form-group">
                            <label for="titre" class="col-form-label">image</label>

                            <div>
                                <select id="image" name="image">
                                    <?php foreach ($images as $image) : ?>
                                    <option value="{{ $image->id }}"
                                        @if ($image->id == $event->eve_ime_id) selected @endif>{{ $image->ime_nom }}</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div>
                            <x-input-label for="eve_titre" :value="__('titre')" />
                            <x-text-input id="eve_titre" class="block mt-1 w-full" type="text" name="eve_titre"
                                value="{{ $event->eve_titre }}" required autofocus />
                        </div>
                    </header>
                    <main class="mb-3 text-center">
                        <div class="mt-2">
                            <x-input-label for="eve_contenu" :value="__('contenu')" />
                            <x-text-input id="eve_contenu" class="block mt-1 w-full" type="text" name="eve_contenu"
                                value="{{ $event->eve_contenu }}" required />
                        </div>

                        <div class="mt-2">
                            <x-input-label for="eve_date_event" :value="__('date de l\'event')" />

                            <x-text-input-datetime id="eve_date_event" class="block mt-1 w-full" type="datetime-local"
                                name="eve_date_event" value="{{ $event->eve_date_event }}" required />
                        </div>

                        <div class="mt-2">
                            <x-input-label for="eve_fin_event" :value="__('date fin l\'event')" />

                            <x-text-input-datetime id="eve_fin_event" class="block mt-1 w-full" type="datetime-local"
                                name="eve_fin_event" value="{{ $event->eve_fin_event }}" required />
                        </div>
                    </main>
                    <footer>
                        <button class="btn btn-success m-4" data-bs-toggle="collapse" data-bs-target="#demo">
                            modifier</button>
                    </footer>
                </form>
            </article>
        </div>
    </div>
</x-app-layout>
