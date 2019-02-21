<?php

namespace App\Repositories;

use App\Models\Event;

class EventRepository {

    public function showAll()
    {
        $events = Event::where('status', 1)->with('image', 'address')->get();

        return $events;
    }

    // public function show($id)
    // {
    //     $event = Event::findOrFail($id)->with('image', 'address')->get();

    //     return $event;
    // }
}