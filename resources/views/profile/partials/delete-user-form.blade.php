<section class="space-y-6">
    <header>
        <h3 class="">
            {{ __('Supprimer le compte') }}
        </h3>

        <p class="mt-1">
            {{ __('Une fois votre compte supprimé, toutes ses ressources et données seront définitivement supprimées. Avant de supprimer votre compte, veuillez télécharger les données ou informations que vous souhaitez conserver.') }}
        </p>
    </header>

    <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
        {{ __('Supprimer le compte') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h3 class="text-white">
                {{ __('Êtes-vous sûr de vouloir supprimer votre compte ?') }}
            </h3>

            <p class="mt-1">
                {{ __('Une fois votre compte supprimé, toutes ses ressources et données seront définitivement supprimées. Veuillez entrer votre mot de passe pour confirmer que vous souhaitez supprimer définitivement votre compte.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="Password" class="sr-only" />

                <x-text-input id="password" name="password" type="password" class="mt-1"
                    placeholder="Password" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Annuler') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Supprimer le compte') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>