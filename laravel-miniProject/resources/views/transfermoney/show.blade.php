@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TransferMoney Show') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Transfer Datetime</th>
                            <th scope="col">Transfer Money</th>
                            <th scope="col">Transfer Evidence</th>
                            <th scope="col">Transfer Staus</th>
                            <th scope="col">Con Order ID</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">{{$TransferMoneys->id}}</th>
                            <td>{{$TransferMoney->transfer_datetime}}</td>
                            <td>{{$TransferMoney->transfer_money}}</td>
                            <td>{{$TransferMoney->transfer_evidence}}</td>
                            <td>{{$TransferMoney->transfer_staus}}</td>
                            <td>{{$TransferMoney->con_order_id}}</td>
                          </tr>
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
