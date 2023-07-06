<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('index', compact('rooms'));
    }
}