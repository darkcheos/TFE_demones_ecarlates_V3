<div class="d-flex flex-column justify-content-center  align-items-center">
    <form method="post" action="{{ route('personnage.avatar.update') }}" class="d-flex flex-column mt-2 justify-content-center align-content-center"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="d-flex g-0 justify-content-center align-content-center  mx-auto" style="height: 300px;width: 300px;">
            <img src="{{ asset($personnage->use_avatar) }}" class=" img-fluid w-auto my-auto justify-content-center"
                alt="..." style="max-height: 300px;max-width: 300px;">
        </div>
        <div class="mb-1 ">
            <input id="avatar" type="file" class="form-control " name="avatar"
                value="{{ $personnage->use_avatar }}">
        </div>
        <div class="row mb-0">
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">
                    Enregistrer l'avatar
                </button>
            </div>
        </div>
    </form>
</div>
