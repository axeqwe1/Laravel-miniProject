@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cart Edit') }}</div>
                <div class="card-body">
                    <form action="{{url('cart/'.$cart->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="" class="form-label">User ID</label>
                          <input type="text" class="form-control" name="user_id" id="user_id" placeholder="User ID">
                          <small id="helpId" class="form-text text-muted">User ID</small>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">Cart product ID</label>
                          <input type="text" class="form-control" name="cart_p_id" id="cart_p_id" placeholder="Cart product ID">
                          <small id="helpId" class="form-text text-muted">Cart product ID</small>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">Cart product quantity</label>
                          <input type="text" class="form-control" name="cart_p_qty" id="cart_p_qty" placeholder="Cart product quantity">
                          <small id="helpId" class="form-text text-muted">Cart product quantity</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
