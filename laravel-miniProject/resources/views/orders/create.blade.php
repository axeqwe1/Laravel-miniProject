@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Orders ADD') }}</div>
                <div class="card-body">
                    <form action="/orders" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                          <label for="" class="form-label">id</label>
                          <input type="text" class="form-control" name="id" id="cat_name" placeholder="Category Name">
                          <small id="helpId" class="form-text text-muted">id</small>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">buyer_fname</label>
                          <input type="text" class="form-control" name="buyer_fname" id="buyer_fname" placeholder="Name">
                          <small id="helpId" class="form-text text-muted">buyer_fname</small>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">buyer_lname</label>
                          <input type="text" class="form-control" name="buyer_lname" id="buyer_lname" placeholder="Last Name">
                          <small id="helpId" class="form-text text-muted">buyer_lname</small>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">buyer_address</label>
                          <input type="text" class="form-control" name="buyer_address" id="buyer_address" placeholder="Address">
                          <small id="helpId" class="form-text text-muted">buyer_address</small>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">buyer_tel</label>
                          <input type="text" class="form-control" name="buyer_tel" id="buyer_tel" placeholder="Tels">
                          <small id="helpId" class="form-text text-muted">buyer_tel</small>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">buyer_email</label>
                          <input type="text" class="form-control" name="buyer_email" id="buyer_email" placeholder="Email">
                          <small id="helpId" class="form-text text-muted">buyer_email</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">con_status</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>การจัดส่ง</option>
                                <option value="1">ส่ง</option>
                                <option value="2">ยังไม่ส่ง</option>
                            </select>
                            <small id="helpId" class="form-text text-muted">con_status</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">transfer_id</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>การจัดส่ง</option>
                                <option value="1">ส่ง</option>
                                <option value="2">ยังไม่ส่ง</option>
                            </select>
                            <small id="helpId" class="form-text text-muted">transfer_id</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">order_date</label>
                            <input type="date" class="form-control" name="buyer_address" id="buyer_address" placeholder="Address">
                            <small id="helpId" class="form-text text-muted">order_date</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">shipping_cost</label>
                            <input type="text" class="form-control" name="buyer_address" id="buyer_address" placeholder="Address">
                            <small id="helpId" class="form-text text-muted">shipping_cost</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">total_price</label>
                            <input type="text" class="form-control" name="buyer_address" id="buyer_address" placeholder="Address">
                            <small id="helpId" class="form-text text-muted">total_price</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">postal_number</label>
                            <input type="text" class="form-control" name="buyer_address" id="buyer_address" placeholder="Address">
                            <small id="helpId" class="form-text text-muted">total_price</small>
                        </div>
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
