<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonnageUpdateRequest;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PersonnageController extends Controller
{
    public function index()
    {
        $personnages = User::with('use_role')->where('use_role_id' , '>', 1)->orderBy('use_role_id', 'desc')->orderBy('use_firstname')->get();

        return view('personnage.index', [
            'personnages' => $personnages,
        ]);
    }

    public function edit(Request $personnage):view
    {
        return view('personnage.edit', [
            'personnage' => $personnage->user(),
        ]);
    }

    public function show(int $id)
    {
        $personnage = User::findOrFail($id);

        return view('personnage.show', [
            'personnage' => $personnage,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     *
     */
    public function update(PersonnageUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->input('use_tank')==null) {
            $request->user()->use_tank = 0;
        } ;
        if ($request->input('use_DPS')==null) {
            $request->user()->use_DPS = 0;
        } ;
        if ($request->input('use_heal')==null) {
            $request->user()->use_heal = 0;
        } ;

        $request->user()->save();

        return Redirect::route('personnage.edit')->with('status', 'profile-updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     *
     */

    public function updateAvatar(Request $request): RedirectResponse
    {
        $request->validate([
            'avatar' => ['required', 'image', 'max:2000'],
        ]);

        $path = Storage::url($request->file('avatar')->store('avatars', 'public'));

        $user = $request->user();
        $user->use_avatar = $path;
        $user->save();

        return Redirect::route('personnage.edit')->with('status', 'avatar-updated');
    }
}
