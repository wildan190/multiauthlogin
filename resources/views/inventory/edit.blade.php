@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Inventory')
@section('content')
<a class="btn btn-primary btn-sm" id="button1" href="">Back</a>



<form class="form" id="search" method="get" action="{{ route('search') }}">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Pencarian</label>
        <select type="text" name="search" class="form-control w-75 d-inline" id="search">
            <option>Pilih id</option>
            <option>0001</option>
            <option>0002</option>
            <option>0003</option>
        </select>
        <button type="submit" class="btn btn-primary mb-1">Update</button>
    </div>
</form>
@endsection