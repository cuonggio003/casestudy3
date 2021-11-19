<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    function showRoom()
    {
        $rooms = Room::all();
        return view('frontend.rooms.list', compact('rooms'));
    }

    function createRoom()
    {
        $rooms = Room::all();
        return view('frontend.rooms.create', compact('rooms'));
    }

}
