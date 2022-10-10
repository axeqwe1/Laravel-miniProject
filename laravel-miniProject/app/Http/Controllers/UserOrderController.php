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
        $user = user_order::all();
        return view('user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
        user_order::create([
            //'user_id' => $input['user_id'],
            'user_fname' => $input['user_fname'],
            'user_lname' => $input['user_lname'],
            'user_username' => $input['user_username'],
            'user_password' => $input['user_password'],
           // 'user_sex' => $input['user_sex'],
            'user_address' => $input['user_address'],
            'user_bod' => $input['user_bod'],
            'user_tel' => $input['user_tel'],
            'user_email' => $input['user_email'],
            //'role' => $input['role']
        ]);
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_order  $user_order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = user_order::find($id);
        return view('user.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_order  $user_order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = user_order::find($id);
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user_order  $user_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = user_order::find($id);
        //$user->user_id = $request->get('user_id');
        $user->user_fname = $request->get('user_fname');
        $user->user_lname = $request->get('user_lname');
        $user->user_username = $request->get('user_username');
        $user->user_password = $request->get('user_password');
        //$user->user_sex = $request->get('user_sex');
        $user->user_address = $request->get('user_address');
        $user->user_bod = $request->get('user_bod');
        $user->user_tel = $request->get('user_tel');
        $user->user_email = $request->get('user_email');
        //$user->role = $request->get('role');
        $user->save();
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_order  $user_order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $destroy = user_order::find($id);
        $destroy->delete();
        return redirect('user');
    }
}
