@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TransferMoney') }}</div>
                <div class="card-body">
                    <a class="btn btn-secondary d-flex justify-content-center" href="{{url('transfermoney/create')}}">Add TransferMoney</a>
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
                            @foreach ($TransferMoney as $TransferMoneys)
                          <tr>
                            <th scope="row">{{$TransferMoneys->id}}</th>
                            <td>{{$TransferMoneys->transfer_datetime}}</td>
                            <td>{{$TransferMoneys->transfer_money}}</td>
                            <td>{{$TransferMoneys->transfer_evidence}}</td>
                            <td>{{$TransferMoneys->transfer_staus}}</td>
                            <td>{{$TransferMoneys->con_order_id}}</td>
                            <td>
                                <form action="{{url('TransferMoney/'.$TransferMoneys->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-warning" onclick="window.location='{{url('/transfermoney/'.$TransferMoneys->id.'/edit')}}'">Edit</button>
                                    <button type="button" class="btn btn-primary" onclick="window.location='{{url('/transfermoney/'.$TransferMoneys->id)}}'">show</button>
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
