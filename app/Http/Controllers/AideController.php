<?php

namespace App\Http\Controllers;

use App\Models\Aide;
use Illuminate\Http\Request;

class AideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $aide = Aide::make();
        $aide->aid_titre = $request->input()['aid_titre'];
        $aide->aid_lien = $request->input()['aid_lien'];
        $aide->aid_cat_id = $id = $request->input()['aid_cat_id'];
        $aide->save();

        $aides = Aide::where('aid_cat_id', '=', $id)->orderBy('aid_titre')->get();

        return view('aide.show', [
            'aides' => $aides,'id' => $id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aide  $aide
     *
     */
    public function show(int $id)
    {
        $aides = Aide::where('aid_cat_id', '=', $id)->orderBy('aid_titre')->get();

        return view('aide.show', [
            'aides' => $aides,'id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aide  $aide
     *
     */
    public function edit(Aide $aide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aide  $aide
     *
     */
    public function update(Request $request, Aide $aide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aide  $aide
     *
     */
    public function destroy(int $id)
    {
        Aide::destroy($id);
        return redirect(route('aide.index'));
    }
}
