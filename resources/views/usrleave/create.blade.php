@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Leave')
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

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('usrleave.store') }}" method="POST" class="form1">
    @csrf
    <div class="body2">
        <div class="container">
            <div class="row md-5 mb-5">
                <div class="col-lg-5 margin-top 0">
                    <div class="float-left">
                        <a class="btn btn-primary btn-sm" id="button1" href="{{ 'index' }}">Back</a>
                        <h1 class="h1">Add Record Leave</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <strong>Employee</strong>
                        <input type="text" name="employee" class="form-control" placeholder="Employee Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Leave Type</strong>
                        <select type="text" class="form-control" name="leave_type" placeholder="">
                            <option style="background-color: #808080; color: white;">Select</option>
                            <option>Vacation</option>
                            <option>Other</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <strong>From</strong>
                        <input type="date" name="from_date" class="form-control" placeholder="dd/mm/yy">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <strong>To</strong>
                        <input type="date" name="to_date" class="form-control" placeholder="dd/mm/yy">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <strong>Days</strong>
                        <input type="date" name="days" class="form-control" placeholder="dd/mm/yy">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <strong>Action Date</strong>
                        <input type="date" name="action_date" class="form-control" placeholder="dd/mm/yy">
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