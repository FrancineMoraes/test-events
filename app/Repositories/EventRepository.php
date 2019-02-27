<?php

namespace App\Repositories;

use App\Models\Event;
use App\Models\Cart;

class EventRepository {

    public function showAll()
    {
        $events = Event::where('status', 1)->with('image', 'address')->get();

        return $events;
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return $event;
    }

    public function addCart($id)
    {
        $event = $this->show($id);
        if($event->tickets[0] == null)
        {
            $event->tickets()->create([
                'quantity' => 1,
                'price' => 100.00,
                'type' => 'Adulto'
            ]);
        
        }
        return $event;
    }

    public function changeQuantity($request)
    {
        $event = $this->show($request->event_id);
        $new_price = 100.00*$request->quantity;
        $event->tickets()->update([
            'quantity' => $request->quantity,
            'price' => $new_price,
            'type' => 'Adulto'
        ]);

        return $event;

    }
}