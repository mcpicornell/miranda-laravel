<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrdersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'roomNumber' => 'required|numeric|min:1|max:100',
            'type' => 'required',
            'description' => 'required',
        ]);

        $order = new Order();
        $order->roomNumber = $request->input('roomNumber');
        $order->type = $request->input('type');
        $order->description = $request->input('description');
        $order->user_guest_id = Auth::id();

        $order->save();

        return redirect('/orders')->with('success', 'Order sended correctly!');
    }

    public function index()
    {
        $orders = Order::all();
        return view('orders', ['orders' => $orders]);
    }
}
