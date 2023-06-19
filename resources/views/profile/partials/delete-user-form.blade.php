<section class="space-y-6">
    <header>
        <h3 class="">
            {{ __('Supprimer le compte') }}
        </h3>

        <p class="mt-1">
            {{ __('Une fois votre compte supprimé, toutes ses ressources et données seront définitivement supprimées. Avant de supprimer votre compte, veuillez télécharger les données ou informations que vous souhaitez conserver.') }}
        </p>
    </header>

        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <div class="mt-6">
                <x-input-label for="password" value="Mot de passe" class="sr-only" />

                <x-text-input id="password" name="password" type="password" class="mb-2"
                    placeholder="Mot de passe" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">

                <x-danger-button class="ml-3">
                    {{ __('Supprimer le compte') }}
                </x-danger-button>
            </div>
        </form>
</section>
