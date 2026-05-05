<?php

namespace App\Http\Controllers;

class EventController extends Controller
{
    public function show($id)
    {
        return view('event.show', ['id' => $id]);
    }

    public function checkout()
    {
        return view('event.checkout');
    }

    public function ticket()
    {
        return view('event.ticket');
    }

    public function indexAdmin()
    {
        return view('admin.events.index');
    }
}
