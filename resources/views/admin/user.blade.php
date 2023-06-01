<x-admin>

    <div class="">
        <section class="bg-white">
            <table class="table">
                <thead class="table-dark">
                    <th>prenom du perso</th>
                    <th>nom du perso</th>
                    <th>description</th>
                    <th colspan="3">role</th>
                </thead>
                <tbody class="table-light">
                    @foreach ($users as $user)
                        @csrf
                        @if ($user->use_role_id != 1)
                            <tr>
                                <td>{{ $user->use_firstname }}</td>
                                <td>{{ $user->use_lastname }}</td>
                                <td>{{ $user->use_description }}</td>
                                @if ($user->use_role_id < Auth::user()->use_role_id)
                                    <td>
                                        <form id="demo" method="POST"
                                            action="{{ route('admin.updateMembre', $user->id) }}">
                                            @csrf
                                            <select id="role" name="role">
                                                @foreach ($roles as $role)
                                                    @if ($role->id < Auth::user()->use_role_id)
                                                        <option value="{{ $role->id }}"
                                                            @if ($role->id == $user->use_role_id) selected @endif>
                                                            {{ $role->rol_nom }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                    </td>
                                    <td class="d-flex flex-row">
                                        @if ($user->use_role_id < Auth::user()->use_role_id)
                                            <button type="submit" class="btn btn-success me-1">modifier</button>
                                        @endif
                                        </form>
                                        @if (Auth::user()->use_role_id == 9)
                                            <form action="{{ route('admin.destroyMembre', $user->id) }}" method="post"
                                                class="mx-3">
                                                @csrf
                                                @method('delete')

                                                <x-danger-button>
                                                    {{ __('refuser') }}
                                                </x-danger-button>
                                            </form>
                                        @endif
                                    </td>
                                @else
                                    <td>
                                        {{ $user->use_role->rol_nom }}
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-success me-1 disabled">modifier</button>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
</x-admin>
