@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Add Client')
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

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

<div class="container">
<div class="row md-5 mb-5">
    <div class="col-lg-5 margin-top 0">
        <div class="float-left">
            <h2 class="mb-0">New Client</h2>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <strong>Client</strong>
                <input type="text" name="cclient" class="form-control" placeholder="Client">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ads Type</strong>
                <select type="text" class="form-control" name="adstype" placeholder="Ads Type">
                    <option>Billboard</option>
                    <option>Videotron</option>
                    <option>Banner</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Size</strong>
                <input type="text" class="form-control" name="size" placeholder="Size" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address</strong>
                <input type="text" class="form-control" name="address" placeholder="Adress" />
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</div>
 
</form>
@endsection