@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Cart Show') }}</div>
                <div class="card-body">
                    <a class="btn btn-danger" href="{{url('cart')}}">Back</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">user_id</th>
                            <th scope="col">cart_p_id</th>
                            <th scope="col">cart_p_qty</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{$carts->id}}</td>
                            <td>{{$carts->user_id}}</td>
                            <td>{{$carts->cart_p_id}}</td>
                            <td>{{$carts->cart_p_qty}}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
