<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoomDetailsController extends Controller
{
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