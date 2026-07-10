<?php

namespace App\Http\Controllers;

use App\Models\Event;

class LandingController extends Controller
{

    public function index()
    {

        $events = Event::latest()->get();


        return view('landing.index', compact('events'));

    }

}