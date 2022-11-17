@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Resignation')
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
<a class="btn btn-primary btn-sm" id="button1"href="{{ route('resignation.index') }}">Back</a>
<h4 class="headline">Resignation Form</h4>



<form action="{{ route('resignation.update', $resignation->id) }}" method="POST" id="form1" class="ml-2 mr-2">
    @csrf
    @method('PUT')
    <div class="col-sm ">
        <div class="form-group">
            <strong>Full Name</strong>
            <input type="text" disabled value="{{$resignation->nama}}" name="nama" class="form-control" placeholder="Full Name">
        </div>
    </div>

    <div class="col-sm">
        <div class="form-group">
            <strong>When are you leaving us? </strong>
            <input type="text" disabled value="{{$resignation->reason}}" name="reason" class="form-control" placeholder="When are you leaving us? ">
        </div>
    </div>

    <div class="col-sm">
        <div class="form-group">
            <strong>Please rate your experience in our company</strong>

            <select type="text" disabled value="{{$resignation->rate}}" class="form-control" name="rate" placeholder="">
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
            <input type="text" disabled value="{{$resignation->long_learn}}" name="long_learn" class="form-control" placeholder="How much have you learned from your time with us?">
        </div>
    </div>

    <div class="">
                    <div class="form-group">
                        <strong hidden>Action</strong>
                        <select type="text" class="form-control" name="status" placeholder="">
                            <option>Approve</option>
                            <option>Reject</option>
                        </select>
                    </div>
                </div>

    <button type="submit" class="btn btn-success" id="submit1">Submit</button>

    </div>
</form>

@endsection