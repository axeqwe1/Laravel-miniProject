@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Edit') }}</div>
                <div class="card-body">
                    <form action="{{url('user/'.$user->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">User Firstname</label>
                            <input type="text" class="form-control" name="user_fname" id="user_fname" placeholder="User firstname">

                            <label for="" class="form-label">User Lastname</label>
                          <input type="text" class="form-control" name="user_lname" id="user_lname" placeholder="User Lastname">

                          <label for="" class="form-label">User Username</label>
                          <input type="text" class="form-control" name="user_username" id="user_username" placeholder="User Username">

                          <label for="" class="form-label">User Password</label>
                          <input type="password" class="form-control" name="user_password" id="user_password" placeholder="User Password">

                          <label for="" class="form-label">User Address</label>
                          <input type="text" class="form-control" name="user_address" id="user_address" placeholder="User Address">

                          <label for="" class="form-label">User birth of date</label>
                          <input type="date" class="date form-control" name="user_bod" id="user_bod">

                          <label for="" class="form-label">User phone number</label>
                          <input type="text" class="form-control" name="user_tel" id="user_tel" placeholder="User Phone number">

                          <label for="" class="form-label">User Email</label>
                          <input type="text" class="form-control" name="user_email" id="user_email" placeholder="User Email">

                        </div>
                        <button type="submit" class="btn btn-primary" onclick="window.location='{{url('/user/')}}'">Edit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
