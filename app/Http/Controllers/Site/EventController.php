<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    private $event;

    public function __construct(){
        $this->event = new EventRepository();
    }

    // public function show($id)
    // {
    //     $events = $this->event->show($id);

    //     return view('site.events.show', compact('event'));
    // }
}
