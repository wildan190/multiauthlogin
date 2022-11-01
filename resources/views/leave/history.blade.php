@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','leavemanagement')
@section('content')
<style>
    #search {
        margin-left: 25px;
    }

    #button1 {
        margin-top: 5px;
        margin-left: 3px;
        margin-bottom: 20px;
    }

    .table1 {
        margin-left: 60px;
        background-color: #C6EBC5;
        text-align: center;
    }

    .tr1 {
        background-color: #367E18;
        color: white;
    }

    .H5 {
        margin-left: 60px;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<a class="btn btn-primary btn-sm" id="button1" href="">Back</a>



<form class="form" id="search" method="get" action="{{ route('search') }}">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Pencarian</label>
        <select type="text" name="search" class="form-control w-75 d-inline" id="search">
            <option>Pilih Karyawan</option>
            <option>Muhamad Asep Wildan Muholadun</option>
            <option>Chirfansyah</option>
            <option>Drajat Danu Wardana</option>
        </select>
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>
</form>
<!-- ubah nama chirfan jadi di ambil otomatsi dari DB -->
<h5 class="H5">Chirfansyah</h5>
<!-- TABEL UTAMA -->
<table class="table1" cellpadding="10" border="0">
    <tr class="tr1">

        <th>No</th>
        <th>Leave Info</th>
        <th>Status</th>
        <th>Action By</th>
        <th>Action Date</th>
        <th width="280px" class="text-center">Action</th>

    </tr>

    <tr>
        <!--  ARRAY. cssnya di atas -->
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
    </tr>

</table>
<!-- AKHIR TABEL UTAMA -->
@endsection