@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User ADD') }}</div>
                <div class="card-body">
                    <form action="/user" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                          <label for="" class="form-label">User ID</label>
                          <input type="text" class="form-control" name="user_id" id="user_id" placeholder="User ID">

                          <label for="" class="form-label">User Firstname</label>
                          <input type="text" class="form-control" name="user_fname" id="user_fname" placeholder="User Firstname">

                          <label for="" class="form-label">User Lastname</label>
                          <input type="text" class="form-control" name="user_lname" id="user_lname" placeholder="User Lastname">

                          <label for="" class="form-label">User Username</label>
                          <input type="text" class="form-control" name="user_username" id="user_username" placeholder="User Username">

                          <label for="" class="form-label">User Password</label>
                          <input type="text" class="form-control" name="user_password" id="user_password" placeholder="User Password">

                          <label for="" class="form-label">User Gender</label>
                          <input type="text" class="form-control" name="user_sex" id="user_sex" placeholder="User Gender">

                          <label for="" class="form-label">User Address</label>
                          <input type="text" class="form-control" name="user_address" id="user_address" placeholder="User Address">

                          <label for="" class="form-label">User birth of date</label>
                          <input type="text" class="date form-control" type="date" name="user_bod" id="user_bod">

                          <label for="" class="form-label">User phone number</label>
                          <input type="text" class="form-control" name="user_tel" id="user_tel" placeholder="User Phone number">

                          <label for="" class="form-label">User Email</label>
                          <input type="text" class="form-control" name="user_email" id="user_email" placeholder="User Email">

                          <label for="" class="form-label">Role</label>
                          <input type="text" class="form-control" name="role" id="role" placeholder="Role">

                        </div>
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
