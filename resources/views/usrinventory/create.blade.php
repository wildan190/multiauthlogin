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

<style>
    .headline {
        margin-left: 10px;
        margin-top: 10px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .body2 {

        border-radius: 15px;
        background-color: #C6EBC5;
    }

    #button1 {
        margin-top: 5px;
        margin-left: 10px;
        margin-bottom: 15px;
    }

    #submit1 {
        margin-left: 530px;
        margin-bottom: 205px;


    }
</style>
<form action="{{ route('usrinventory.store') }}" method="POST" class="form1">
    @csrf
    <h4 class="headline">Add Catalogue</h4>
    <div class="body2">
        <a class="btn btn-primary btn-sm" id="button1" href="">Back</a>

        <div class="col-sm">
            <div class="form-group">
                <strong>Id Item</strong>
                <input type="text" name="kd_barang" class="form-control" placeholder="Id Number">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <strong>Category</strong>
                <input type="text" name="kategori" class="form-control" placeholder="Category">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <strong>Item Name</strong>
                <input type="text" name="nama_barang" class="form-control" placeholder="Item Name">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <strong>Amount Item</strong>
                <input type="text" name="jml_barang" class="form-control" placeholder="Amount Item">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <strong>Input Date</strong>
                <input type="date" name="tgl_input" class="form-control" placeholder="Input Date">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <strong>Notes</strong>
                <input type="text" name="note" class="form-control" placeholder="Note">
            </div>
        </div>
        <button type="submit" class="btn btn-success" id="submit1">Submit</button>
    </div>
</form>
@endsection