@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Timesheet')
@section('content')

<div class="container">
    <div class="row mt-0 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Timesheet</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('timesheet.create') }}"> Add New</a>
            </div>
        </div>
    </div>

    <!-- Pemberitahuan -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <!-- Akhir Pemberitahuan -->

    <!-- Pencarian -->
    <form class="form" method="get" action="{{ route('search') }}">
    <label>Filter by :</label>
        <div class="input-group">
            <select type="text" class="form-control form-control-lg" id="search" name="search">
                <option>Select User</option>
                <option>Muhamad Asep Wildan Muholadun</option>
                <option>Chirfansyah</option>
                <option>Drajat Danu Wardana</option>
            </select>
            <div class="input-group-append">
                <button type="submit" class="btn btn-lg btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <br />
    </form>
    <!-- Akhir Pencarian -->

    <!-- Tabel -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="20px" class="text-center">No</th>
                        <th>Name</th>
                        <th>Tanggal</th>
                        <th>Proyek</th>
                        <th>Tempat Kerja</th>
                        <th>Waktu Masuk</th>
                        <th>Waktu Keluar</th>
                        <th>Aktivitas</th>
                        <th width="280px" class="text-center">Action</th>
                    </tr>
                </thead>
                @foreach ($timesheet as $timesheet)
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

                            <a class="btn btn-primary btn-sm" href="{{ route('timesheet.edit',$timesheet->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data ?')">Delete</button>
                        </form>
                        </th>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- Akhir Tabel -->
    </div>
</div>

@endsection