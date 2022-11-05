@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'Edit Client Data')
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

<form action="{{ route('posts.update',$post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="row md-5 mb-5">
            <div class="col-lg-5 margin-top 0">
                <div class="float-left">
                    <h1>Edit Data</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Client</strong>
                    <input type="text" name="cclient" class="form-control" value="{{ $post->cclient }}" placeholder="Client">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ads Type</strong>
                    <input type="text" class="form-control" name="adstype" value="{{ $post->adstype }}" placeholder="Ads Type"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Size</strong>
                    <input type="text" class="form-control" name="size" value="{{ $post->size }}" placeholder="Size" />
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address</strong>
                    <input type="text" class="form-control" name="address" value="{{ $post->address }}" placeholder="Adress" />
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</form>
@endsection