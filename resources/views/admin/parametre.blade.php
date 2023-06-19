<x-admin>
    <h3>accueil</h3>
    @foreach ($parametres as $parametre)
        <form method="POST" action="{{ route('admin.parametre.update', $parametre->id) }}"
            class="d-flex justify-content-center">
            <div class="col-md-8 col-12">
                @csrf
                @if ($parametre->id == 1)
                    <h4 class="mt-3">Message d'accueil</h4>
                @elseif ($parametre->id == 2)
                    <h4 class="mt-3">Actualité ou autre</h4>
                @endif
                <x-text-input id="par_name" class="mt-2" type="text" name="par_name"
                    value="{{ $parametre->par_name }}" required />
                <textarea id="par_contenue" class="form-control block w-100 mt-3" type="text" name="par_contenue" rows="10"
                    required>{{ $parametre->par_contenue }}</textarea>

                <button type="submit" class="btn btn-success me-1 mt-2">modifier</button>
            </div>
        </form>
    @endforeach

</x-admin>
