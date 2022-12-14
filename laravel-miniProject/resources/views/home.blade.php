@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body d-flex flex-column-reverse">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="{{url('category')}}">category list</a><br>
                    <a class="btn btn-primary" href="{{url('transfermoney')}}">transfermoney list</a><br>
                    <a class="btn btn-primary" href="{{url('order')}}">order list</a><br>
                    <a class="btn btn-primary" href="{{url('orderitem')}}">Order Item</a><br>
                    <a class="btn btn-primary" href="{{url('user')}}">User Order</a><br>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
