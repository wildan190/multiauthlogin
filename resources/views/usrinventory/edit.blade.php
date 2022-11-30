@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Inventories')
@section('content')

<style>
    .headline{
        margin-left: 5px;
        font-family: arial;
    }
    #button1{
        margin-left: 5px;
        margin-top: -5px;
    }
</style>
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

<form action="{{ route('usrinventory.update', $usrinventory->id) }}" method="POST" class="form1">
    @csrf
    @method('PUT')
    <h4 class="headline">Edit Barang</h4>
    <div class="body2">
        <a class="btn btn-primary btn-sm" id="button1" href="">Back</a>

        <div class="col-sm">
            <div class="form-group">
                <strong>Id Item</strong>
                <input type="text" name="kd_barang" value="{{ $usrinventory->kd_barang }}" class="form-control" placeholder="Id Number">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <strong>Category</strong>
                <select type="text" name="kategori" value="{{ $usrinventory->kategori }}" class="form-control" placeholder="Kategori">
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                </select>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <strong>Item Name</strong>
                <input type="text" name="nama_barang" value="{{ $usrinventory->nama_barang }}" class="form-control" placeholder="Nama Barang">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <strong>Amount Item</strong>
                <input type="text" name="jml_barang" value="{{ $usrinventory->jml_barang }}" class="form-control" placeholder="Jumlah Barang">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <strong>Input Date</strong>
                <input type="date" name="tgl_input" class="form-control">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <strong>Notes</strong>
                <textarea type="text" name="note" value="{{ $usrinventory->note }}" class="form-control" placeholder="Note"></textarea>
            </div>
        </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success" id="submit1">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection