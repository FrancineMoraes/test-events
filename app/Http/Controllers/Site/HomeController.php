<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\EventRepository;

class HomeController extends Controller
{
    private $event;

    public function __construct(){
        $this->event = new EventRepository();
    }

    public function index()
    {
        $events = $this->event->showAll();

        return view('site.layouts.app', compact('events'));
    }
}
