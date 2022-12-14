@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category ADD') }}</div>
                <div class="card-body">
                    <form action="/category" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                          <label for="" class="form-label">Category Name</label>
                          <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Category Name">
                          <small id="helpId" class="form-text text-muted">Category Name</small>
                        </div>
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
