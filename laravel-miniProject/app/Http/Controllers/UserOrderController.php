<?php

namespace App\Http\Controllers;

use App\Models\user_order;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user_show.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_order  $user_order
     * @return \Illuminate\Http\Response
     */
    public function show(user_order $user_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_order  $user_order
     * @return \Illuminate\Http\Response
     */
    public function edit(user_order $user_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user_order  $user_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_order $user_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_order  $user_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_order $user_order)
    {
        //
    }
}
