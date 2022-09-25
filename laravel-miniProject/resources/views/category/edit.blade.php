@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category Edit') }}</div>
                <div class="card-body">
                    <form action="{{url('category/'.$category->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="" class="form-label">Category Name</label>
                          <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Category Name">
                          <small id="helpId" class="form-text text-muted">Category Name</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
