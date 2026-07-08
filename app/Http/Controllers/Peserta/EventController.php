<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();

        return view('peserta.events.index', compact('events'));
    }


    public function show(Event $event)
    {
        return view('peserta.events.show', compact('event'));
    }
}