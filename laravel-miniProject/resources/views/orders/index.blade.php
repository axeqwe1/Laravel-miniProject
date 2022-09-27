@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Orders') }}</div>
                <div class="card-body">
                    <a class="btn btn-secondary" href="{{url('order/create')}}">Add Order</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">con_order_id</th>
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
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $orderss)
                          <tr>
                            <td>{{$orderss->id}}</td>
                            <td>{{$orderss->con_order_id}}</td>
                            <td>{{$orderss->buyer_fname}}</td>
                            <td>{{$orderss->buyer_lname}}</td>
                            <td>{{$orderss->buyer_address}}</td>
                            <td>{{$orderss->buyer_tel}}</td>
                            <td>{{$orderss->buyer_email}}</td>
                            <td>{{$orderss->con_status}}</td>
                            <td>{{$orderss->transfer_id }}</td>
                            <td>{{$orderss->order_date}}</td>
                            <td>{{$orderss->shipping_cost}}</td>
                            <td>{{$orderss->total_price}}</td>
                            <td>{{$orderss->postal_number}}</td>
                            <td>{{$orderss->user_id }}</td>
                            <td>
                                <form action="{{url('order/'.$orderss->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-warning" onclick="window.location='{{url('/order/'.$orderss->id.'/edit')}}'">Edit</button>
                                    <button type="button" class="btn btn-primary" onclick="window.location='{{url('/order/'.$orderss->id)}}'">show</button>
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
