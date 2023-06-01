<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Parametre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminParametreController extends Controller
{
    public function edit()
    {
        $parametres = Parametre::all();

        return view('admin.parametre', [
            'parametres' => $parametres,
        ]);
    }

    public function update(Request $request, int $id)
    {
        $parametre = Parametre::findOrFail($id);
        $parametre->par_name = $request->input()['par_name'];
        $parametre->par_contenue = $request->input()['par_contenue'];
        $parametre->save();

        return Redirect::route('admin.parametre');
    }
}
