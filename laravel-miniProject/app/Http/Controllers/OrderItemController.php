<?php

namespace App\Http\Controllers;

use App\Models\order_item;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderitem = order_item::all();
        return view('orderitem.index',compact('orderitem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orderitem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function show(order_item $order_item)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function edit(order_item $order_item)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order_item $order_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(order_item $order_item)
    {
    }
}
