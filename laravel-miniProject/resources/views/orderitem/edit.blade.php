@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Orders Edit') }}</div>
                <div class="card-body">
                    <form action="{{url('orderitem/'.$orderitem->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">Order id</label>
                            <input type="text" class="form-control" name="order_id" id="order_id" placeholder="Order Id">
                            <small id="helpId" class="form-text text-muted">Order id</small>
                          </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Order product id</label>
                            <input type="text" class="form-control" name="order_p_id" id="order_p_id" placeholder="Order Product Id">
                            <small id="helpId" class="form-text text-muted">Order product id</small>
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Order product quantity</label>
                            <input type="text" class="form-control" name="order_p_qty" id="order_p_qty" placeholder="Order product quantity">
                            <small id="helpId" class="form-text text-muted">Order product quantity</small>
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Order product total price</label>
                            <input type="text" class="form-control" name="order_p_total_price" id="order_p_total_price" placeholder="Order product total price">
                            <small id="helpId" class="form-text text-muted">Order product total price</small>
                          </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
