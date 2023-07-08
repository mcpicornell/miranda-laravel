<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Support\Facades\Session;
class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        return view('rooms', ['rooms' => $rooms]);
    }
    public function roomDetails($id)
    {
        $room = Room::find($id);
        if(!$room){
            Session::flash('error', 'Server error, please reload');
        }
        $rooms = Room::all();
        return view('roomDetails', compact('room', 'rooms'));
    }
    public function offers()
    {
        $rooms = Room::all();

        return view('offers', ['rooms' => $rooms]);
    }
}