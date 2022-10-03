<?php

namespace App\Http\Controllers;

use App\Models\Transfer_money;
use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransferMoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TransferMoney = Transfer_money::all();
        return view('Transfermoney.index',compact('TransferMoney'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transfermoney.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $input = $request->all();
        // $maxTfId = Transfer_money::max('id');
        // $maxOrId = orders::max('con_order_id');

        // $transferMoney = new Transfer_money();
        // $transferMoney->create([
        //     'transfer_datetime' => $input['transfer_datetime'],
        //     'transfer_money' => $input['transfer_money'],
        //     'transfer_evidence' => $input['transfer_evidence'],
        //     'transfer_staus' => $input['transfer_staus'],
        //     'con_order_id' => $maxOrId + 1
        // ])->orders1()->create([
        //     'user_id' => Auth::user()->id,
        //     'con_order_id' => $maxOrId + 1,
        //     'id' => $maxOrId + 1,
        // ]);
        $input = $request->all();
        Transfer_money::create([
            'transfer_datetime' => $input['transfer_datetime'],
            'transfer_money' => $input['transfer_money'],
            'transfer_evidence' => $input['transfer_evidence'],
            'transfer_staus' => $input['transfer_staus'],

        ]);
        // $transferMoney->refresh();
        return redirect('transfermoney');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transfer_money  $transfer_money
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $TransferMoney = Transfer_money::find($id);
        return view('Transfermoney.show',compact('TransferMoney'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transfer_money  $transfer_money
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $TransferMoney = Transfer_money::find($id);
        return view('Transfermoney.edit',compact('TransferMoney'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transfer_money  $transfer_money
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $TransferMoney = Transfer_money::find($id);
        $TransferMoney->transfer_datetime = $request->get('transfer_datetime');
        $TransferMoney->transfer_money = $request->get('transfer_money');
        $TransferMoney->transfer_evidence = $request->get('transfer_evidence');
        $TransferMoney->transfer_stausv = $request->get('transfer_staus');
        $TransferMoney->con_order_id = $request->get('con_order_id');

        $TransferMoney->save();

        return redirect('Transfermoney');
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transfer_money  $transfer_money
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Transfer_money::find($id);
        $destroy->delete();
        return redirect('Transfermoney');
    }
    }



