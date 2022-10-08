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
        $input = $request->all();
        order_item::create([
            'order_id' =>$input['order_id'],
            'order_p_id' =>$input['order_p_id'],
            'order_p_qty'=>$input['order_p_qty'],
            'order_p_total_price' =>$input['order_p_total_price']
        ]);
        return redirect('orderitem');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order_items = order_item::find($id);
        return view('orderitem.show',compact('order_items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderitem = order_item::find($id);
        return view('orderitem.edit',compact('orderitem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $order_items = order_item::find($id);
        $order_items->order_id = $request->get('order_id');
        $order_items->order_p_id = $request->get('order_p_id');
        $order_items->order_p_qty = $request->get('order_p_qty');
        $order_items->order_p_total_price = $request->get('order_p_total_price');
        $order_items->save();
        return redirect('orderitem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = order_item::find($id);
        $destroy->delete();
        return redirect('orderitem');
    }
}
