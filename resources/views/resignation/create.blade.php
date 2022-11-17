@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Resignation')
@section('content')
<style>
    .headline {
        margin-top: 5px;
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 10px;
        margin-bottom: 15px;
    }

    #submit1 {
        margin-left: 7px;
    }

    #form1 {
        font-family: Arial, Helvetica, sans-serif;
    }

    #button1 {
        margin-left: 7px;
        margin-top: 7px;
        margin-bottom: 3px;
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
<a class="btn btn-primary btn-sm" id="button1" href="{{ route('resignation.index') }}">Back</a>
<h4 class="headline">Resignation Form</h4>



<form action="{{ route('resignation.store') }}" method="POST" id="form1" class="ml-2 mr-2">
    @csrf
    <div class="col-sm ">
        <div class="form-group">
            <strong>Full Name</strong>
            <input type="text" name="nama" class="form-control" placeholder="Full Name">
        </div>
    </div>

    <div class="col-sm">
        <div class="form-group">
            <strong>When are you leaving us? </strong>
            <input type="text" name="reason" class="form-control" placeholder="When are you leaving us? ">
        </div>
    </div>

    <div class="col-sm">
        <div class="form-group">
            <strong>Please rate your experience in our company</strong>

            <select type="text" class="form-control" name="rate" placeholder="">
                <option style="background-color: #808080; color: white;"></option>
                <option>Sangat Tidak Baik</option>
                <option>Tidak Baik</option>
                <option>Baik</option>
                <option>Sangat Baik</option>
            </select>

        </div>
    </div>

    <div class="col-sm">
        <div class="form-group">
            <strong>How much have you learned from your time with us?</strong>
            <input type="text" name="long_learn" class="form-control" placeholder="How much have you learned from your time with us?">
        </div>
    </div>

    <!--<div class="">
        <div class="form-group">
            <strong hidden>Action</strong>
            <select type="text" class="form-control" name="status" placeholder="">
                <option>Unassigned</option>
                <option>Approve</option>
                <option>Reject</option>
            </select>
        </div>
    </div>-->

    <button type="submit" class="btn btn-success" id="submit1">Submit</button>

    </div>
</form>
@endsection