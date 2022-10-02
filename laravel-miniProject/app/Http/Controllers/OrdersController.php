<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user_order;
use App\Models\Transfer_money;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = orders::all();
        return view('orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $transfer_id = Transfer_money::all();
        return view('orders.create',compact('transfer_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $id = Auth::user()->id;
        $input = $request->all();
        orders::create([
            'buyer_fname' => $input['buyer_fname'],
            'buyer_lname' => $input['buyer_lname'],
            'buyer_address' => $input['buyer_address'],
            'buyer_tel' => $input['buyer_tel'],
            'buyer_email' => $input['buyer_email'],
            'con_status' => $input['con_status'],
            'transfer_id' => $input['transfer_id'],
            'order_date' => $input['order_date'],
            'shipping_cost' => $input['shipping_cost'],
            'total_price' => $input['total_price'],
            'postal_number' => $input['postal_number'],
            'user_id' => $id
        ]);
        return redirect('order');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $orders = orders::find($id);
        return view('orders.show', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $orders = orders::find($id);
        $transfer_id = Transfer_money::all();
        return view('orders.edit',compact('orders','transfer_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $orders = orders::find($id);
        $orders->buyer_fname = $request->get('buyer_fname');
        $orders->buyer_lname = $request->get('buyer_lname');
        $orders->buyer_address = $request->get('buyer_address');
        $orders->buyer_tel = $request->get('buyer_tel');
        $orders->con_status = $request->get('con_status');
        $orders->transfer_id = $request->get('transfer_id');
        $orders->order_date = $request->get('order_date');
        $orders->shipping_cost = $request->get('shipping_cost');
        $orders->total_price = $request->get('total_price');
        $orders->postal_number = $request->get('postal_number');
        $orders->save();
        return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $destroy = orders::find($id);
        $destroy->delete();
        return redirect('order');
    }
}
