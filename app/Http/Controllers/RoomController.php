<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        return view('rooms', ['rooms' => $rooms]);
    }
    public function show($id)
    {
        $room = Room::find($id);
        if(!$room){
            Session::flash('error', 'Server error, please reload');
        }
        $rooms = Room::all();
        return view('roomDetails', compact('room', 'rooms'));
    }
}