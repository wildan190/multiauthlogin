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
    .pencarian{
        display: inline-block;
        margin-left: -30px;
        margin-top: -30pxs;
    }
    #submit1{
        margin-left: 650px;
        margin-top: -105px;
    }
    #filter{
       
        padding-right: 100px;
    }
    #label1{
        margin-left: -130px;
        margin-bottom: -30px;
       
    }
    #search{
        margin-bottom: 20px;
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

<!-- 
<form class="form " method="get" action="{{ route('search') }} " id="search">
                <div class="form-group ">
                    <label for="search" class="d-block mr-2 ">Filter</label>
                    <input type="text" name="search" class="form-control w-25 d-inline-block" id="search" placeholder="Search...">
                    <button type="submit" class="btn btn-primary mb-1">Search</button>
                </div>

    </form>
<table class="pencarian">
    <tr>
        <td>
        <label class="d-block mr-0" id="label1">Filter by Category</label>
<form class="form" method="get" action="{{ route('filter') }}">
        <div class="row" >
            <div class="col-sm">
                <div class="form-group">
                    
                    <select type="text" name="search" class="form-control w-5 d-inline-block" id="filter">
                        <option>Category 1</option>
                        <option>Category 2</option>
                        <option>Category 3</option>
                        <option>Category 4</option>
                    </select>
                    
                </div>
            </div>
        </div> 
    </form>
    </td>
</tr>
</table>
</center>
<button type="submit" class="btn btn-primary mb-1" id="submit1">Search</button>
-->
<center>
<form class="form " method="get" action="{{ route('carikan') }} " id="search">
    <label for="search" class="d-block mr-2 ">Filter</label>
            <div class="col-sm">
                <div class="form-group">
                    
                    <select type="text" name="search" class="form-control w-5 d-inline-block" id="filter">
                        <option>Bilboard</option>
                        <option>Category 2</option>
                        <option>Category 3</option>
                        <option>Category 4</option>
                    </select>
                    
                </div>
            </div>
                <div  class=" col">
                        <input class="form-control" type="text" name="search"  placeholder="Search here..." />
                </div>
                    <div class="col">
                        <button class="btn btn-success">Search</button>
                    </div>
</center>
<!-- Akhir Form Pencarian -->

<form action="{{ route('inventory.store') }}" method="POST" class="form1">
    <table class="table4" cellpadding=20">
        <tr class="tr1">
            <th width="20px" class="text-center">No</th>
            <th>ID Barang</th>
            <th>Kategori</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Tanggal Input</th>
            <th>Note</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        @foreach ($inventory as $inventory)
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