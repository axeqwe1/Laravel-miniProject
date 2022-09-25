@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category Show') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">{{$categorys->id}}</th>
                            <td>{{$categorys->cat_name}}</td>
                          </tr>
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
