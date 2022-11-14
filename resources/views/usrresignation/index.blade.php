@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Leave')
@section('content')
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

    .form1 {}


    #table2 {



        color: black;
        background-color: #C6EBC5;
    }

    .tr1 {
        background-color: #367E18;
        color: white;
    }
</style>

<h4 class="headline">Resignation List</h4>






@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table1">
    <tr>
        <th><a class="btn btn-success btn-sm" href="{{ route('usrresignation.create') }}">+ Add</a></th>
    </tr>
</table>
<center>
    <form class="form" method="get" action="{{ route('search') }} " id="search">
        <div class="form-group">
            <label for="search" class="d-block mr-2">Filter</label>
            <input type="text" name="search" class="form-control w-25 d-inline-block" id="search" placeholder="Search...">
            <button type="submit" class="btn btn-primary mb-1">Search</button>
        </div>

    </form>
</center>


<center>
    <table cellpadding="15" id="table2">

        <tr class="tr1">
            <th>No</th>
            <th>Full Name</th>
            <th>Reason</th>
            <th>Rate Company</th>
            <th>Long Learned</th>
            <th>Status</th>
            <th class="text-center">Option</th>

        </tr>
        </thead>
        @foreach ($usrresignation as $resignation)
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

                    <a hidden class="btn btn-primary btn-sm" href="{{ route('resignation.edit',$resignation->id) }}">Action</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data ?')">Delete</button>
                </form>
            </td>

        </tr>
        <tr></tr>

        @endforeach

    </table>
</center>
@endsection