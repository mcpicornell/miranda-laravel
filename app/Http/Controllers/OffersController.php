<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        return view('offers', ['rooms' => $rooms]);
    }
}