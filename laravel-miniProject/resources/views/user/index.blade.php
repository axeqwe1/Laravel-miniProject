@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User') }}</div>
                <div class="card-body">
                    <a class="btn btn-secondary d-flex justify-content-center" href="{{url('user/create')}}">Add User</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">User ID</th>
                            <th scope="col">User Firstname</th>
                            <th scope="col">User Lastname</th>
                            <th scope="col">User Username</th>
                            <th scope="col">User Password</th>
                            <th scope="col">User Gender</th>
                            <th scope="col">User Address</th>
                            <th scope="col">User Birth of Date</th>
                            <th scope="col">User Phone number</th>
                            <th scope="col">User Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $users)
                          <tr>
                            <th scope="row">{{$users->id}}</th>
                            <td>{{$users->user_id}}</td>
                            <td>{{$users->user_fname}}</td>
                            <td>{{$users->user_lname}}</td>
                            <td>{{$users->user_username}}</td>
                            <td>{{$users->user_password}}</td>
                            <td>{{$users->user_sex}}</td>
                            <td>{{$users->user_address}}</td>
                            <td>{{$users->user_bod}}</td>
                            <td>{{$users->user_tel}}</td>
                            <td>{{$users->user_email}}</td>
                            <td>{{$users->user_role}}</td>

                            <td>
                                <form action="{{url('user/'.$users->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-warning" onclick="window.location='{{url('/user/'.$users->id.'/edit')}}'">Edit</button>
                                    <button type="button" class="btn btn-primary" onclick="window.location='{{url('/user/'.$users->id)}}'">show</button>
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
