@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Accounting')
@section('content')
<style>
    #button1 {
        margin-top: 5px;
        margin-left: 1px;
    }

    #submit1 {
        margin-bottom: 205px;
    }

    .h1 {
        margin-top: 3px;
        margin-bottom: -20px;
    }

    .form1 {
        font-family: Arial, Helvetica, sans-serif;
        margin-top: 5px;
        background-color: #C6EBC5;
        border-radius: 18px;
        box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    }
</style>


    <div class="body2">
        <div class="container">
            <div class="row md-5 mb-5">
                <div class="col-lg-5 margin-top 0">
                    <div class="float-left">
                        <a class="btn btn-primary btn-sm" id="button1" href="{{ route('accounting.index') }}">Back</a>
                        <h1 class="h1">Add Invoice</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <strong>Client ID</strong>
                        <input type="text" name="client_id" class="form-control" placeholder="ID of Client">
                    </div>
                <div class="col-sm">
                    <div class="form-group">
                        <strong>Date</strong>
                        <input type="date" name="from_date" class="form-control" placeholder="dd/mm/yy">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <strong>Item Category</strong>
                        <input type="text" name="client_name" class="form-control" placeholder="Name of Client">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <strong>Amount</strong>
                        <input type="number" class="form-control" name="amount" value="0" min="0">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <strong>Debet</strong>
                        <input type="number" class="form-control" name="debet" value="0" min="0">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <strong>Kredit</strong>
                        <input type="number" class="form-control" name="kredit" value="0" min="0">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong hidden>Action</strong>
                        <select type="text" hidden class="form-control" name="status" placeholder="">
                            <option>Approve</option>
                            <option>Reject</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <strong hidden>Action By</strong>
                        <input type="text" hidden name="action_by" class="form-control" placeholder="Action By">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success" id="submit1">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection