@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','leavemanagement')
@section('content')
<style>
    .today {

        color: black;

    }

    .table1 {

        margin-left: 25px;
        background-color: #C6EBC5;
        text-align: left;
    }

    .b1 {
        margin-left: 5px;
        margin-bottom: 10px;
        border-radius: 19px;
    }

    .tr1 {
        background-color: #367E18;
        color: white;

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


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="container">
    <div class="row mt-0 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Leave Management</h2>
            </div>
        </div>
    </div>

    <button type="button" class="b1 btn-outline-success"><a href="{{ route('leave.create') }}">+ Add</a></button>
    <button class="b1"><a href="{{ route('leave.history') }}">Show History</a></button>

    <!-- TABEL UTAMA -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>

                    <th>No</th>
                    <th>Leave Info</th>
                    <th>Status</th>
                    <th>Action By</th>
                    <th>Action Date</th>
                    <th width="280px" class="text-center">Option</th>
                </thead>
                </tr>
                @foreach ($leave as $leave)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td class="paragraph">
                        <p>
                            employee : {{$leave->employee}}<br>
                            Leave Type : {{$leave->leave_type}}<br>
                            from : {{$leave->from_date}}<br>
                            To : {{$leave->to_date}}<br>
                            days : {{$leave->days}}<br>
                        </p>
                    </td>
                    <td>{{$leave->status}}</td>
                    <td>{{$leave->action_by}}</td>
                    <td>{{$leave->action_date}}</td>
                    <td class="text-center">

                        <form action="{{ route('leave.destroy',$leave->id) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('leave.show',$leave->id) }}">Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('leave.edit',$leave->id) }}">Action</a>


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

<!-- AKHIR TABEL UTAMA -->

@endsection