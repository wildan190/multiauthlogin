@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Accounting')
@section('content')

<div class="container">
    <div class="row mt-0 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Accounting</h2>
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



    <!-- Tabel -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kas Keuangan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="20px" class="text-center">No</th>
                        <th>Tanggal</th>
                        <th>Kas</th>
                        <th>Peralatan</th>
                        <th>Perlengkapan</th>
                        <th>Utang</th>
                        <th>Catatan</th>
                        <th width="280px" class="text-center">Action</th>
                    </tr>
                </thead>
                @foreach ($accounting as $accounting)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td>{{ $accounting->tanggal }}</td>
                    <td>{{ $accounting->cash }}</td>
                    <td>{{ $accounting->tools }}</td>
                    <td>{{ $accounting->equipment }}</td>
                    <td>{{ $accounting->debt }}</td>
                    <td>{{ $accounting->details }}</td>
                    <td class="text-center">
                        <form action="{{ route('accounting.destroy',$accounting->id) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('accounting.show',$accounting->id) }}">Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('accounting.edit',$accounting->id) }}">Edit</a>

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
    <!-- Tabel -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Tabel Belanja Barang</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="20px" class="text-center">No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Satuan</th>
                        <th>Total Harga</th>
                        <th>Catatan</th>
                        <th width="280px" class="text-center">Action</th>
                    </tr>
                </thead>
                @foreach ($accounting as $accountings)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td>{{ $accounting->nama_barang }}</td>
                    <td>{{ $accounting->jumlah_barang }}</td>
                    <td>{{ $accounting->harga_satuan }}</td>
                    <td>{{ $accounting->total_harga }}</td>
                    <td>{{ $accounting->catatan }}</td>
                    <td class="text-center">
                        <form action="{{ route('accounting.destroy',$accounting->id) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('accounting.show',$accounting->id) }}">Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('accounting.edit',$accounting->id) }}">Edit</a>

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