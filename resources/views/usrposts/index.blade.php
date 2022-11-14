@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Client Data')
@section('content')

<div class="container">
    <div class="row mt-0 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Client Table Data</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th width="20px" class="text-center">No</th>
                <th>Client Name</th>
                <th>Ads Type</th>
                <th>Size</th>
                <th>Address</th>
            </tr>
        </thead>
        @foreach ($usrposts as $post)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $post->cclient }}</td>
            <td>{{ $post->adstype }}</td>
            <td>{{ $post->size }}</td>
            <td>{{ $post->address }}</td>
        </tr>
        @endforeach
    </table>
</div>
{!! $usrposts->links() !!}
@endsection