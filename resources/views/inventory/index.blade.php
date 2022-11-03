@extends('dashboards.admins.layouts.admin-dash-layout')
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
</style>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<h4 class="headline">Inventory Barang</h4>
<!--button start -->
<table class="table1">
    <tr>
        <th><a class="btn btn-success btn-sm" href="{{ route('inventory.create') }}">+ Add</a></th>
    </tr>
</table>
<!--button end -->

<a href="" class="link1">Export Report</a>

<!-- Form Pencarian -->
<center>
<form class="form" method="get" action="{{ route('search') }}">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Pencarian</label>
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Search...">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>
</form>
</center>

<form action="{{ route('leave.store') }}" method="POST" class="form1">
<table class="table4" cellpadding="30">
    <tr class="tr1">
        <th>Id</th>
        <th>Kategori</th>
        <th>Nama Barang</th>
        <th>Jumlah Barang</th>
        <th>Tanggal Input</th>
        <th>Note</th>
        <th width="280px" class="text-center">Action</th>
    </tr>
    @foreach ($inventory as $inventory)
    <tr>
        <td>{{$inventory->kd_barang}}</td>
        <td>{{$inventory->kategori}}</td>
        <td>{{$inventory->nama_barang}}</td>
        <td>{{$inventory->jml_barang}}</td>
        <td>{{$inventory->tgl_input}}</td>
        <td>{{$inventory->note}}</td>
        <td class="text-center">
            <form action="{{ route('inventory.destroy',$inventory->id) }}" method="POST">

                <a class="btn btn-info btn-sm" href="{{ route('inventory.show',$inventory->id) }}">Show</a>

                <a class="btn btn-primary btn-sm" href="{{ route('inventory.edit',$inventory->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data ?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</form>


@endsection