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

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
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
    </div>
</div>
{!! $usrposts->links() !!}
@endsection