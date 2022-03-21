<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Machine;
use App\Models\Package;
use App\Models\DeliveryPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveryPoints = DeliveryPoint::all();
        $packages = Package::all();
        $orders = Order::where('user_id', auth()->id())->get();
        return view('pages.orders', compact('orders', 'packages', 'deliveryPoints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $machines = Machine::all();
        $packages = Package::all();
        $deliveryPoints = DeliveryPoint::all();
        return view('pages.orders-form', compact('deliveryPoints', 'machines', 'packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'machine_id' => 'required|not_in:0',
            'package_id' => 'required|not_in:0',
            'rating' => 'required|not_in:0|min:1|max:5'
        ]);


        $order = new Order();
        $order->machine_id = $request->machine_id;
        $order->package_id = $request->package_id;
        $order->user_id = auth()->id();
        $order->rating = $request->rating;
        $order->delivered = false;
        $order->save();

        return redirect('/orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $machines = Machine::all();
        $packages = Package::all();
        $deliveryPoints = DeliveryPoint::all();
        return view('pages.show-orders', compact('order', 'deliveryPoints', 'machines', 'packages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $machines = Machine::all();
        $packages = Package::all();
        $deliveryPoints = DeliveryPoint::all();
        return view('pages.orders-form', compact('order' ,'deliveryPoints', 'machines', 'packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'machine_id' => 'required|min:1',
            'package_id' => 'required|min:1',
            'rating' => 'required|min:1|max:5'
        ]);

        $order->machine_id = $request->machine_id;
        $order->package_id = $request->package_id;
        $order->user_id = auth()->id();
        $order->rating = $request->rating;
        $order->delivered = false;
        $order->save();

        return redirect('/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect('/orders');
    }
}
