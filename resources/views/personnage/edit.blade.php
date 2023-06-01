<x-app-layout>
    <x-slot name="header">
            {{ __('Profile de votre perso') }}
    </x-slot>


    <section>
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        </form>
        @csrf
        <div class="card text-white bg-dark border-danger p-3">
            <div class="row g-0">
                <div class="col-lg-4 ">
                @include('personnage.partials.update-avatar-form')
                </div>
            <div class="col-lg-8">
                @include('personnage.partials.update-personnage-information-form')
                </div>
            </div>
    </section>
</x-app-layout>
