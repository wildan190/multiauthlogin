@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Timesheet')
@section('content')
<div class="container">
<div class="row mt-0 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Timesheet</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('usrtimesheet.create') }}"> Add New</a>
            </div>
        </div>
</div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <form class="form" method="get" action="{{ route('search') }}">
        <div class="form-group w-100 mb-3">
            <label for="search" class="d-block mr-2">Pencarian</label>
                <select type="text" name="search" class="form-control w-75 d-inline" id="search">
                    <option>Muhamad Asep Wildan Muholadun</option>
                    <option>User 1</option>
                    <option>Admin 1</option>
                </select>
            <button type="submit" class="btn btn-primary mb-1">Cari</button>
        </div>
    </form>

    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Name</th>
            <th>Tanggal</th>
            <th>Proyek</th>
            <th>Tempat Kerja</th>
            <th>Waktu Masuk</th>
            <th>Waktu Keluar</th>
            <th>Aktivitas</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
    </thead>
        @foreach ($usrtimesheet as $timesheet)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $timesheet->nama }}</td>
            <td>{{ $timesheet->tanggal }}</td>
            <td>{{ $timesheet->proyek }}</td>
            <td>{{ $timesheet->tempat_kerja }}</td>
            <td>{{ $timesheet->waktu }}</td>
            <td>{{ $timesheet->waktu_out }}</td>
            <td>{{ $timesheet->aktivitas }}</td>
            <td class="text-center">
                <form action="{{ route('timesheet.destroy',$timesheet->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('timesheet.show',$timesheet->id) }}">Show</a>
 
                    <!--<a class="btn btn-primary btn-sm" href="{{ route('timesheet.edit',$timesheet->id) }}">Edit</a>-->
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data ?')">Delete</button>
                </form>
            </th>
        </tr>
        @endforeach
    </table>
</div>
@endsection