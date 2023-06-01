<x-app-layout>
    <x-slot name="header">
        {{ __('Accueil') }}
    </x-slot>


    @if (session('status') === 'admin')
        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('Accès interdit, vous n\'êtes pas admin.') }}
        </p>
    @endif
    <div class="mb-4 container border border-danger text-white rounded-3 bg-dark p-2">
        @foreach ($accueils as $accueil)
            <h3>{{ $accueil->par_name }}</h3>
            <p class="m-2"><?php echo nl2br($accueil->par_contenue); ?></p>
        @endforeach
    </div>
    <div class="d-flex flex-row flex-wrap justify-content-center">
        <section class="col-lg col-lg-6 p-2 ">
            @foreach ($actus as $actu)
                <article class="border border-danger text-white rounded-3 bg-dark p-2">
                    <header>
                        <h3 class="mb-1 text-center">{{ $actu->par_name }}
                        </h3>
                    </header>
                    <main>
                        <p class="m-2"><?php echo nl2br($actu->par_contenue); ?></p>
                    </main>
                </article>
            @endforeach
        </section>
        <section class="col-lg col-lg-6 text-center p-2">
            <article class=" border border-danger text-white rounded-3 bg-dark p-2">
                <header>
                    <h3 class="mb-1 text-center">Prochain évènement</h3>
                </header>
                    @foreach ($events as $event)
                <main>
                        <img src="{{ asset($event->eve_ime->ime_lien) }}" class=" mx-auto my-auto w-auto" alt="..."
                            style="max-height: 300px; max-width: 100%;">
                        <h3 class="my-3">{{ $event->eve_titre }}</h3>
                        <?php echo nl2br($event->eve_contenu); ?></p>
                </main>
                <footer>
                        debut le {{ gmdate('d/m/Y H:i', strtotime($event->eve_date_event)) }} - fin le
                        {{ gmdate('d/m/Y H:i', strtotime($event->eve_fin_event)) }}
                </footer>
                    @endforeach
            </article>

        </section>
    </div>

</x-app-layout>
