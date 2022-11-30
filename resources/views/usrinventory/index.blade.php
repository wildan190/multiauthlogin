@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Inventory')
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

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<!--
<style>
    .headline {
        margin-left: 10px;
        margin-top: 10px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .table1 {
        display: inline-block;
        margin-left: 20px;
        margin-top: 5px;
    }

    .table2 {
        display: inline-block;
        margin-left: 10px;
        margin-top: 5px;
    }

    .table3 {
        display: inline-block;
        margin-left: 10px;
        margin-top: 5px;
    }

    .table4 {
        margin-left: auto;
        margin-right: auto;
        background-color: #C6EBC5;
        ;
        padding-bottom: -20px;
        padding-top: -30px;
        text-align: center;
    }

    .link1 {
        display: block;
        margin-left: 20px;
        margin-top: 10px;
        margin-bottom: 5px;
        color: black;
    }

    .tr1 {
        background-color: #367E18;
        color: white;
    }

    .pencarian {
        display: inline-block;
        margin-left: -30px;
        margin-top: -30pxs;
    }

    #submit1 {
        margin-left: 650px;
        margin-top: -105px;
    }

    #filter {

        padding-right: 100px;
    }

    #label1 {
        margin-left: -130px;
        margin-bottom: -30px;

    }

    #search {
        margin-bottom: 20px;
    }
</style>
-->



<div class="container">
    <div class="row mt-0 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Inventory</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('inventory.create') }}"> Add New</a>
            </div>
        </div>
    </div>

    <!-- Form Pencarian -->
    <form class="form" method="get" action="{{ route('pencarian') }}">
        <label>Filter by :</label>
        <div class="input-group">
            <select type="text" class="form-control form-control-lg" id="pencarian" name="pencarian">
                <option>Category 1</option>
                <option>Category 2</option>
                <option>Category 3</option>
            </select>
            <div class="input-group-append">
                <button type="submit" class="btn btn-lg btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <br />
    </form>
    <!-- Akhir form pencarian -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="20px" class="text-center">No</th>
                        <th>ID Barang</th>
                        <th>Kategori</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Tanggal Input</th>
                        <th>Note</th>
                        <th width="280px" class="text-center">Action</th>
                    </tr>
                </thead>
                @foreach ($usrinventory as $inventory)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td>{{$inventory->kd_barang}}</td>
                    <td>{{$inventory->kategori}}</td>
                    <td>{{$inventory->nama_barang}}</td>
                    <td>{{$inventory->jml_barang}}</td>
                    <td>{{$inventory->tgl_input}}</td>
                    <td>{{$inventory->note}}</td>
                    <td class="text-center">

                        <form action="{{ route('inventory.destroy',$inventory->id) }}" method="POST">

                            <a class="btn btn-info btn-sm" hidden href="{{ route('inventory.show',$inventory->id) }}">Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('usrinventory.edit',$inventory->id) }}">Edit</a>


                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data ?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection