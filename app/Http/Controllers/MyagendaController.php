<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Session;
use Carbon\Carbon;

class MyagendaController extends Controller
{
    //
    public function index()
    {
        // get first event
        $event = Event::where(['id' => 1])->first();
        $start_time = Carbon::create($event->start_time);
        $end_time = Carbon::create($event->end_time);
        $now = Carbon::now();

        // get event list
        $event_list = Event::get();

        // get agenda information
        $session = Session::where('id', 1)->first();

        if($end_time->isPast()) {
            return view('auth.eventcomp', [
                'event_list' => $event_list,
                'session' => $session
            ]);
        } else if($start_time->isPast()) {
            return view('auth.my-agenda');
        } else {
            return view('auth.registcomp', [
                'event' => $event
            ]);
        }
    }
}
