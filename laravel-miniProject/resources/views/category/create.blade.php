@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category ADD') }}</div>
                <div class="card-body">
                    <form action="{{url('category')}}" method="post">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                          <label for="" class="form-label">Category Name</label>
                          <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
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
