<x-admin>

    <div class="">
        <section class="bg-white">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                    </tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>choix</th>
                </thead>
                <tbody class="table-light">
                    @foreach ($users as $user)
                        @if ($user->use_role_id == 1)
                            <tr>
                                <td>{{ $user->use_firstname }}</td>
                                <td>{{ $user->use_lastname }}</td>
                                <td class="d-flex flex-row">
                                    <form action="{{ route('admin.updateDemande', $user->id) }}" method="post"
                                        class="mx-3">
                                        @csrf
                                        @method('post')

                                        <x-primary-button>
                                            {{ __('accepter') }}
                                        </x-primary-button>
                                    </form>
                                    <form action="{{ route('admin.destroy', $user->id) }}" method="post" class="mx-3">
                                        @csrf
                                        @method('delete')

                                        <x-danger-button>
                                            {{ __('refuser') }}
                                        </x-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>

</x-admin>
