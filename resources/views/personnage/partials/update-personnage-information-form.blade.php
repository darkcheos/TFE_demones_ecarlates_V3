<div class="col-lg-8 ps-4">
    <form action="{{ route('personnage.update') }}?>" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="mb-3">
            <div class="row">

                <div class="mb-1 col-6">
                    <x-input-label for="use_firstname" :value="__('Prenom')" />
                    <x-text-input id="use_firstname" name="use_firstname" type="text" class="mt-1 block w-full"
                        :value="old('use_firstname', $personnage->use_firstname)" required autofocus autocomplete="use_firstname" />
                    <x-input-error class="mt-2" :messages="$errors->get('use_firstname')" />
                </div>

                <div class="mb-1 col-6">
                    <x-input-label for="use_lastname" :value="__('Nom')" />
                    <x-text-input id="use_lastname" name="use_lastname" type="text" class="mt-1 block w-full"
                        :value="old('use_lastname', $personnage->use_lastname)" required autofocus autocomplete="use_lastname" />
                    <x-input-error class="mt-2" :messages="$errors->get('use_lastname')" />
                </div>

            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="col-md-4 col-form-label">Description</label>

            <div class="">
                <textarea id="use_description" name="use_description" type="text"
                class="form-control block w-100 mt-3" rows="5">{{ $personnage->use_description }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('use_description')" />
            </div>
            <p class="mb-1">Rôle principal</p>
            <footer class="mb-2 d-flex">
                <div class="btn-group-toggle me-3" data-toggle="buttons">
                    <input type="checkbox" id="use_tank" name="use_tank" value="1" class="btn-check"
                        @if ($personnage->use_tank == 1) checked @endif autocomplete="off">
                    <label for="use_tank" class="btn btn-outline-primary">tank</label>
                </div>

                <div class="btn-group-toggle me-3" data-toggle="buttons">
                    <input type="checkbox" id="use_DPS" name="use_DPS" value="1" class="btn-check"
                        @if ($personnage->use_DPS == 1) checked @endif autocomplete="off">
                    <label for="use_DPS" class="btn btn-outline-danger">DPS</label>
                </div>

                <div class="btn-group-toggle mb-3" data-toggle="buttons">
                    <input type="checkbox" id="use_heal" name="use_heal" value="1" class="btn-check"
                        @if ($personnage->use_heal == 1) checked @endif autocomplete="off">
                    <label for="use_heal" class="btn btn-outline-success">heal</label>
                </div>
            </footer>
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Enregistrer
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
