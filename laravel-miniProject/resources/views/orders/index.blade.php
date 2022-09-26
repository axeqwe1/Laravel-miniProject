@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category') }}</div>
                <div class="card-body">
                    <a class="btn btn-secondary d-flex justify-content-center" href="{{url('order/create')}}">Add Order</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $orderss)
                          <tr>
                            <th scope="row">{{$orders->id}}</th>
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
                            <td>
                                <form action="{{url('category/'.$orders->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-warning" onclick="window.location='{{url('/category/'.$orders->id.'/edit')}}'">Edit</button>
                                    <button type="button" class="btn btn-primary" onclick="window.location='{{url('/category/'.$orders->id)}}'">show</button>
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
