@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Order Item Show') }}</div>
                <div class="card-body">
                    <a class="btn btn-danger" href="{{url('orderitem')}}">Back</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">order_id</th>
                            <th scope="col">order_p_id</th>
                            <th scope="col">order_p_qty</th>
                            <th scope="col">order_p_total_price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{$order_items->id}}</td>
                            <td>{{$order_items->order_id}}</td>
                            <td>{{$order_items->order_p_id}}</td>
                            <td>{{$order_items->order_p_qty}}</td>
                            <td>{{$order_items->user_id }}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
