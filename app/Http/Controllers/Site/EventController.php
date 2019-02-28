<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\EventRepository;

class EventController extends Controller
{
    private $event;

    public function __construct(){
        $this->event = new EventRepository();
    }

    public function show($id)
    {
        $event = $this->event->show($id);

        return view('site.events.event', compact('event'));
    }

    public function addCart($id)
    {
        $event = $this->event->addCart($id);

        return view('site.events.cart', compact('event'));
    }

    public function changeQuantity(Request $request)
    {
        $event = $this->event->changeQuantity($request);

        return view('site.events.cart-response', compact('event'))->render();
    }

    public function finished(Request $request)
    {
        $events = $this->event->finished($request);

        if($events)
        {
            return redirect()
            ->route('home', compact('events'))->with('message', 'Seu pedido foi efetuado com sucesso!');
        }

        return redirect()
            ->route('home', compact('events'))->with('message', 'Seu pedido não foi efetuada, tente novamente.');
    }
}
