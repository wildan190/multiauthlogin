@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Inventory')
@section('content')
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

<h4 class="headline">Inventory Barang</h4>
<!--button start -->
<table class="table1">
    <tr>
        <th><a class="btn btn-success btn-sm" href="{{ route('inventory.create') }}">+ Add</a></th>
    </tr>
</table>
<table class="table2">
    <Tr>
        <th><a class="btn btn-info btn-sm" href="{{ route('inventory.edit') }}">Update</a></th>
    </Tr>
</table>
<table class="table3">
    <tr>
        <th><a class="btn btn-danger btn-sm" href="">Delete</a></th>
    </tr>
</table>
<!--button end -->

<a href="" class="link1">Export Report</a>

<table class="table4" cellpadding="30">
    <tr class="tr1">
        <th>Id</th>
        <th>Kategori</th>
        <th>Nama Barang</th>
        <th>Jumlah Barang</th>
        <th>Tanggal Input</th>
        <th>Note</th>
    </tr>
    <tr>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
    </tr>
</table>


@endsection