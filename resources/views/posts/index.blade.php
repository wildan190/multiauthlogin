@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','View Client Data')
@section('content')

<div class="container">
    <div class="row mt-0 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Client Table Data</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Add New</a>
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
                        <th width="280px" class="text-center">Action</th>
                    </tr>
                </thead>
                @foreach ($posts as $post)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td>{{ $post->cclient }}</td>
                    <td>{{ $post->adstype }}</td>
                    <td>{{ $post->size }}</td>
                    <td>{{ $post->address }}</td>
                    <td class="text-center">
                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('posts.show',$post->id) }}">Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data ?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
{!! $posts->links() !!}
@endsection