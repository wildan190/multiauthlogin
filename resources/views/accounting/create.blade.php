@extends('dashboards.admins.layouts.admin-dash-layout')
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
                <h1>Accounting</h1>
            </div>
        </div>
    </div>
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Add Data</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('accounting.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <strong>Tanggal</strong>
                            <input type="date" name="tanggal" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <strong>Kas</strong>
                            <input type="number" name="cash" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <strong>tools</strong>
                            <input type="number" name="tools" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <strong>Equipment</strong>
                            <input type="number" name="equipment" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <strong>Debt</strong>
                            <input type="number" name="debt" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <strong>Catatan</strong>
                            <input type="text" name="details" class="form-control" placeholder="Name">
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