@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','leavemanagement')
@section('content')

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

<form action="{{ route('leave.update', $leave->id) }}" method="POST" class="form1">
    @csrf
    @method('PUT')
    <div class="body2">
        <div class="container">
            <div class="row md-5 mb-5">
                <div class="col-lg-5 margin-top 0">
                    <div class="float-left">
                        <a class="btn btn-primary btn-sm" id="button1" href="{{ route('leave.index') }}">Back</a>
                        <h1 class="h1">Edit Record Leave</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <strong>Employee</strong>
                        <input type="text" value="{{ $leave->employee }}" name="employee" disabled="disabled" class="form-control" placeholder="Employee Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Leave Type</strong>
                        <select type="text" class="form-control"  value="{{ $leave->leave_type }}" name="leave_type" placeholder="">
                            <option>Vacation</option>
                            <option>Other</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <strong>From</strong>
                        <input type="date"  disabled="disabled" value="{{ $leave->from_date }}" name="from_date" class="form-control" placeholder="dd/mm/yy">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <strong>To</strong>
                        <input type="date"  disabled="disabled" value="{{ $leave->to_date }}" name="to_date" class="form-control" placeholder="dd/mm/yy">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <strong>Days</strong>
                        <input type="date"  disabled="disabled" value="{{ $leave->days }}" name="days" class="form-control" placeholder="dd/mm/yy">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <strong>Action By</strong>
                        <input type="text"  value="{{ $leave->action_by }}" name="action_by" class="form-control" placeholder="Action By">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <strong>Action Date</strong>
                        <input type="date"  disabled="disabled" value="{{ $leave->action_date }}" name="action_date" class="form-control" placeholder="dd/mm/yy">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Action</strong>
                        <select type="text" class="form-control" name="status" placeholder="">
                            <option>Approve</option>
                            <option>Reject</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success" id="submit1">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    alert("Dimohon untuk menginputkan data dengan baik dan benar");
</script>
@endsection