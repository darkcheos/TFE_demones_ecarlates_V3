<x-app-layout>

    <div class="card text-white border-danger bg-dark mt-5">
        <div class="row g-0 ">
            <div class="col-lg-4 d-flex justify-content-center p-4">
                <div class="d-flex justify-content-center align-content-center"
                    style=" width:350px;height: 350px;">
                    <img src="{{ asset($personnage->use_avatar) }}" class=" img-fluid w-auto my-auto" alt="..."
                        style="max-height: 350px">
                </div>
            </div>
            <div class="col-lg-8 pt-3 d-flex flex-column">
                <div class="card-header">
                    <h3 class="">{{ ucwords($personnage->use_firstname . ' ' . $personnage->use_lastname) }}</h3>
                </div>
                <div class="card-body py-4">
                    <?php echo nl2br($personnage->use_description); ?></p>
                </div>

                <div class="card-footer mt-auto">
                    <h4>Rôle principal</h4>
                    <div class="mb-2">
                    @if ($personnage->use_tank == 1)
                        Tank
                    @endif
                    @if ($personnage->use_DPS == 1)
                        DPS
                    @endif
                    @if ($personnage->use_heal == 1)
                        Heal
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
