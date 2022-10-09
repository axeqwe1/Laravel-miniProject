@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Cart') }}</div>
                <div class="card-body">
                    <a class="btn btn-secondary" href="{{url('cart/create')}}">Add Cart</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">user_id/th>
                            <th scope="col">cart_p_id</th>
                            <th scope="col">cart_p_qty</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $carts)
                          <tr>
                            <td>{{$carts->id}}</td>
                            <td>{{$carts->user_id}}</td>
                            <td>{{$carts->cart_p_id}}</td>
                            <td>{{$carts->cart_p_qty}}</td>
                            <td>
                                <form action="{{url('cart/'.$carts->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-warning" onclick="window.location='{{url('/cart/'.$carts->id.'/edit')}}'">Edit</button>
                                    <button type="button" class="btn btn-primary" onclick="window.location='{{url('/cart/'.$carts->id)}}'">show</button>
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
