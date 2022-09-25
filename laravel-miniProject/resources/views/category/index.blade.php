@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category') }}</div>
                <div class="card-body">
                    <a class="btn btn-secondary d-flex justify-content-center" href="{{url('category/create')}}">Add Category</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $categorys)
                          <tr>
                            <th scope="row">{{$categorys->id}}</th>
                            <td>{{$categorys->cat_name}}</td>
                            <td>
                                <form action="{{url('category/'.$categorys->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-warning" onclick="window.location='{{url('/category/'.$categorys->id.'/edit')}}'">Edit</button>
                                    <button type="button" class="btn btn-primary" onclick="window.location='{{url('/category/'.$categorys->id)}}'">show</button>
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
