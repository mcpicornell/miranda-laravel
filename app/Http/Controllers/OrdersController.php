<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Room;

class OrdersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'roomNumber' => 'required|numeric|min:1',
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

    public function update(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'roomNumber' => 'required|numeric|min:1',
            'type' => 'required',
            'description' => 'required',
        ]);

        $order = Order::findOrFail($request->input('order_id'));
        $order->roomNumber = $request->input('roomNumber') ?? $order->roomNumber;
        $order->type = $request->input('type');
        $order->description = $request->input('description') ?? $order->description;
        $order->user_guest_id = Auth::id();
    
        $order->save();

        return redirect('/orders')->with('success', 'Order updated correctly!');
    }

    public function delete(Request $request)
    {
        $orderId = $request->input('order_id');
        $order = Order::findOrFail($orderId);
        $order->delete();

        return redirect('/orders')->with('success', 'Order deleted successfully!');
    }
    public function deleteOrder()
    {
        $orders = Order::all();
        return view('deleteOrder', ['orders' => $orders]);
    }

    public function index()
    {
        $orders = Order::all();
        return view('orders', ['orders' => $orders]);
    }

    public function newOrder()
    {
        $rooms = Room::all();
        return view('newOrder', ['rooms' => $rooms]);
    }

    public function orderChanges()
    {
        $orders = Order::all();
        $rooms = Room::all();
        return view('orderChanges', ['orders' => $orders, 'rooms' => $rooms]);
    }
}
