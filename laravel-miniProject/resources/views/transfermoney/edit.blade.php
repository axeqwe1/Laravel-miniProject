@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TransferMoney Edit') }}</div>
                <div class="card-body">
                    <form action="{{url('transfermoney/'.$TransferMoney->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">Transfer Datetime</label>
                            <input type="text" class="form-control" name="transfer_datetime" id="transfer_datetime" placeholder="Transfer Datetime">
                            <small id="helpId" class="form-text text-muted">Transfer Datetime</small>
                          </div>

                          <div class="mb-3">
                              <label for="" class="form-label">Transfer Money</label>
                              <input type="text" class="form-control" name="transfer_money" id="transfer_money" placeholder=">Transfer Money">
                              <small id="helpId" class="form-text text-muted">Transfer Money</small>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Transfer Evidence</label>
                              <input type="text" class="form-control" name="transfer_evidence" id="transfer_evidence" placeholder="Transfer Evidence">
                              <small id="helpId" class="form-text text-muted">Transfer Evidence</small>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Transfer Staus</label>
                              <input type="text" class="form-control" name="transfer_staus" id="transfer_staus" placeholder="Transfer Staus">
                              <small id="helpId" class="form-text text-muted">Transfer Staus</small>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Con Order ID</label>
                              <input type="text" class="form-control" name="con_order_id" id="con_order_id" placeholder="Con Order ID">
                              <small id="helpId" class="form-text text-muted">Con Order ID</small>
                            </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
