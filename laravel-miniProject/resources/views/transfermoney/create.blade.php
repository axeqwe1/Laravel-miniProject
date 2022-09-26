@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TransferMoney ADD') }}</div>
                <div class="card-body">
                    <form action="/transfermoney" method="POST">
                        @csrf
                        @method('POST')

                        <div class="mb-3">
                          <label for="" class="form-label">Transfer Datetime</label>
                          <input type="date" class="form-control" name="transfer_datetime" id="transfer_datetime" placeholder="Transfer Datetime">
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

                        <button type="submit" class="btn btn-primary">ADD</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
