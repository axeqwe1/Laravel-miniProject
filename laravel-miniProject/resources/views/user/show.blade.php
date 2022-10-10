@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Show') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>

                            <th scope="col">User Firstname</th>
                            <th scope="col">User Lastname</th>
                            <th scope="col">User Username</th>
                            <th scope="col">User Password</th>

                            <th scope="col">User Address</th>
                            <th scope="col">User Birth of Date</th>
                            <th scope="col">User Phone number</th>
                            <th scope="col">User Email</th>

                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">{{$users->id}}</th>

                            <td>{{$users->user_fname}}</td>
                            <td>{{$users->user_fname}}</td>
                            <td>{{$users->user_lname}}</td>
                            <td>{{$users->user_username}}</td>
                            <td>{{$users->user_password}}</td>

                            <td>{{$users->user_address}}</td>
                            <td>{{$users->user_bod}}</td>
                            <td>{{$users->user_tel}}</td>
                            <td>{{$users->user_email}}</td>

                          </tr>
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
