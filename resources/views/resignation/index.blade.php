@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Resignation')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<style>
    .table1 {
        margin-left: 15px;
        margin-top: -5px;
        margin-bottom: 10px;
    }

    .headline {
        margin-top: 5px;
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 10px;
    }

    #table2 {
        color: black;
        background-color: #C6EBC5;
    }

    .tr1 {
        background-color: #367E18;
        color: white;
    }
</style>

<div class="container">
    <div class="row mt-0 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Resignation</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('resignation.create') }}"> Add New</a>
            </div>
        </div>
    </div>

    <form class="form" method="get" action="{{ route('carinama') }}">
        <label>Filter by :</label>
        <div class="input-group">
            <input type="search" class="form-control form-control-lg" id="carinama" name="carinama" placeholder="Search By Name">
            <div class="input-group-append">
                <button type="submit" class="btn btn-lg btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <br />
    </form>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Full Name</th>
                        <th>Reason</th>
                        <th>Rate Company</th>
                        <th>Long Learned</th>
                        <th>Status</th>
                        <th class="text-center">Option</th>

                    </tr>
                </thead>
                @foreach ($resignation as $resignation)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $resignation->nama }}</td>
                    <td>{{ $resignation->reason }}</td>
                    <td>{{ $resignation->rate }}</td>
                    <td>{{ $resignation->long_learn }}</td>
                    <td>{{ $resignation->status }}</td>
                    <td class="text-center">
                        <form action="{{ route('resignation.destroy',$resignation->id) }}" method="POST">

                            <a hidden class="btn btn-info btn-sm" href="">Action</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('resignation.edit',$resignation->id) }}">Action</a>

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

@endsection