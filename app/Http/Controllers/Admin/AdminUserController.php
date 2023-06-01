<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDemande()
    {
        $users = User::with('use_role')->orderBy("use_firstname")->get();

        return view('admin.index', [
            'users' => $users,
        ]);
    }
    public function indexMembre()
    {
        $users = User::with('use_role')->orderBy("use_role_id")->orderBy("use_firstname")->get();
        $roles = Role::all();

        return view('admin.user', [
            'users' => $users, 'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updateDemande(int $id)
    {
        $user = User::findOrFail($id);
        $user->use_role_id = 2;
        $user->save();

        return Redirect::route('admin.index');
    }

    public function updateMembre(Request $request, int $id)
    {
        $user = User::findOrFail($id);
        $user->use_role_id = $request->input("role");
        $user->save();

        return Redirect::route('admin.user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        User::destroy($id);
        return Redirect::route('admin.index');
    }
    public function destroyMembre(int $id)
    {
        User::destroy($id);
        return Redirect::route('admin.user');
    }
}
