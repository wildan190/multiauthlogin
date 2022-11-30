@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Accounting')
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

<div class="container">
    <div class="row md-5 mb-5">
        <div class="col-lg-5 margin-top 0">
            <div class="float-left">
                <h1>Edit</h1>
            </div>
        </div>
    </div>
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Data</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('usraccounting.update', $usraccounting->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <strong>Tanggal</strong>
                            <input type="date" value="{{$usraccounting->tanggal}}" name="tanggal" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <strong>Kas</strong>
                            <input type="number" value="{{$usraccounting->cash}}" name="cash" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <strong>tools</strong>
                            <input type="number" value="{{$usraccounting->tools}}" name="tools" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <strong>Equipment</strong>
                            <input type="number" value="{{$usraccounting->equipment}}" name="equipment" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <strong>Debt</strong>
                            <input type="number" value="{{$usraccounting->debt}}" name="debt" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <strong>Catatan</strong>
                            <input type="text" value="{{$usraccounting->details}}" name="details" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection