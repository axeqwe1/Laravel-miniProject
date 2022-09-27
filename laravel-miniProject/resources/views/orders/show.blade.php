@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Orders Show') }}</div>
                <div class="card-body">
                    <a class="btn btn-danger" href="{{url('order')}}">Back</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">buyer_fname</th>
                            <th scope="col">buyer_lname</th>
                            <th scope="col">buyer_address</th>
                            <th scope="col">buyer_tel</th>
                            <th scope="col">buyer_email</th>
                            <th scope="col">con_status</th>
                            <th scope="col">transfer_id</th>
                            <th scope="col">order_date</th>
                            <th scope="col">shipping_cost</th>
                            <th scope="col">total_price</th>
                            <th scope="col">postal_number</th>
                            <th scope="col">user_id</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{$orders->id}}</td>
                            <td>{{$orders->con_order_id}}</td>
                            <td>{{$orders->buyer_fname}}</td>
                            <td>{{$orders->buyer_lname}}</td>
                            <td>{{$orders->buyer_address}}</td>
                            <td>{{$orders->buyer_tel}}</td>
                            <td>{{$orders->buyer_email}}</td>
                            <td>{{$orders->con_status}}</td>
                            <td>{{$orders->transfer_id }}</td>
                            <td>{{$orders->order_date}}</td>
                            <td>{{$orders->shipping_cost}}</td>
                            <td>{{$orders->total_price}}</td>
                            <td>{{$orders->postal_number}}</td>
                            <td>{{$orders->user_id }}</td>
                          </tr>
                        </tbody>
                      </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
