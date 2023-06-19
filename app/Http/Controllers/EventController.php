<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Image_event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $events = Event::with('eve_ime')->where('eve_fin_event' , '>', now())->orderBy('eve_date_event')->get();

        $images = Image_event::all() ;

        return view('event.index', [
            'events' => $events, 'images' => $images
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request): RedirectResponse
    {
        $event = Event::make();
        $event->eve_titre = $request->input()['eve_titre'];
        $event->eve_contenu = $request->input()['eve_contenu'];
        $event->eve_ime_id = $request->input()['image'];
        $event->eve_date_event = $request->input()['eve_date_event'];
        $event->eve_fin_event = $request->input()['eve_fin_event'];
        $event->save();

        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     *
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     *
     */
    public function edit(Event $event)
    {
        $images = Image_event::all() ;
        return view('event.edit', [
            'event' => $event, 'images' => $images
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     *
     */
    public function update(Request $request, Event $event)
    {
        $event->eve_titre = $request->input()['eve_titre'];
        $event->eve_contenu = $request->input()['eve_contenu'];
        $event->eve_ime_id = $request->input()['image'];
        $event->eve_date_event = $request->input()['eve_date_event'];
        $event->eve_fin_event = $request->input()['eve_fin_event'];
        $event->save();

        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     *
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect(route('event.index'));
    }
}
