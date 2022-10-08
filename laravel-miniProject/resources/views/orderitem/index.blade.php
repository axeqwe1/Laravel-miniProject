@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Order Item') }}</div>
                <div class="card-body">
                    <a class="btn btn-secondary" href="{{url('orderitem/create')}}">Add Order</a>
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
                            @foreach ($orderitem as $order_items)
                          <tr>
                            <td>{{$order_items->id}}</td>
                            <td>{{$order_items->order_id}}</td>
                            <td>{{$order_items->order_p_id}}</td>
                            <td>{{$order_items->order_p_qty}}</td>
                            <td>{{$order_items->user_id }}</td>
                            <td>
                                <form action="{{url('orderitem/'.$order_items->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-warning" onclick="window.location='{{url('/orderitem/'.$order_items->id.'/edit')}}'">Edit</button>
                                    <button type="button" class="btn btn-primary" onclick="window.location='{{url('/orderitem/'.$order_items->id)}}'">show</button>
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
