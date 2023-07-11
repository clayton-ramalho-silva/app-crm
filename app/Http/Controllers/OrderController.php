<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('orders.index',[
            'orders' => Order::all(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::where('status', 'active')->get();
        $products = Product::where('status', 'active')->get();
        return view('orders.create', compact('customers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $subtotal = [];

        foreach($request->products as $product){
            $data = Product::find($product);
            array_push($subtotal, $data->price);
        }


        $order = new Order;
        $order->customer_id = $request->customer;
        $order->subtotal = array_sum($subtotal);
        $order->total = $order->subtotal - $request->desconto;
        $order->desconto = $request->desconto;
        $order->obs = $request->obs;

        $order->save();

        foreach($request->products as $product){
            $order->products()->attach($product);
        }

        return redirect()->route('order.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {

        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    public function status(Request $request, string $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }
}
