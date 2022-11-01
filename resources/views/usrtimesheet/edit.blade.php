@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Edit Record')
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
 
    <form action="{{ route('timesheet.update',$timesheet->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
<div class="row md-5 mb-5">
    <div class="col-lg-5 margin-top 0">
        <div class="float-left">
            <h1>Timesheet</h1>
        </div>
    </div>
</div>
    <div class="row">
    <div class="col-sm">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="nama" class="form-control" value="{{ $timesheet->nama }}" placeholder="Name">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <strong>Tanggal</strong>
                <input type="date" name="tanggal" class="form-control" value="{{ $timesheet->tanggal }}" placeholder="dd/mm/yy">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Proyek</strong>
                <select type="text" class="form-control" name="proyek" value="{{ $timesheet->proyek }}" placeholder="">
                    <option style="background-color: #808080; color: white;">Select</option>
                    <option>Sinarmas - Videotron</option>
                    <option>Lippo Mal Karawaci - Billboard</option>
                    <option>Ciputra - Billboard</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Place</strong>
                <select type="text" class="form-control" name="tempat_kerja" value="{{ $timesheet->tempat_kerja }}" placeholder="Work Place">
                    <option style="background-color: #808080; color: white;">Select</option>
                    <option>Office - Lengkong Karya</option>
                    <option>Outside</option>
                    <option>Work From Home</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Masuk</strong>
                <input type="time" class="form-control" name="waktu" value="{{ $timesheet->waktu }}" placeholder="" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Keluar</strong>
                <input type="time" class="form-control" name="waktu" value="{{ $timesheet->waktu_out }}" placeholder="" />
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <strong>Aktivitas</strong>
                <input type="text" name="aktivitas" class="form-control" value="{{ $timesheet->aktivitas }}" placeholder="Activity">
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</div>
</form>

@endsection