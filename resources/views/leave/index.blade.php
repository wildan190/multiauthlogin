@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','leavemanagement')
@section('content')
<style>
.today{
   
    color: black;
   
   }
   .table1{
   
       margin-left: 25px;
       background-color: #C6EBC5;
       text-align: left;
   }
   .b1{
       margin-left: 5px;
       margin-bottom: 10px;
   }
   .tr1{
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
<h2 class="ml-1">Leave Management</h2>
 
 <button class="b1"><a href="{{ route('leave.create') }}">+ Add</a></button>
 <button class="b1"><a href="{{ route('leave.history') }}">Show History</a></button>
 
 <h4 class="ml-1">On procces</h4>
<!-- TABEL UTAMA -->
 <table class="table1"  cellpadding="20" border="0">
    <tr class="tr1">
       
        <th>No</th>
        <th>Leave Info</th>
        <th>Status</th>
        <th>Action By</th>
        <th>Action Date</th>
        <th width="280px"class="text-center">Option</th>

    </tr>
    @foreach ($leave as $leave)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td class="paragraph"><p>
            employee    : {{$leave->employee}}<br>
            Leave Type  : {{$leave->leave_type}}<br>
            from        : {{$leave->from_date}}<br>
            To          : {{$leave->to_date}}<br>
            days        : {{$leave->days}}<br>
</p></td>
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
 
 <!-- AKHIR TABEL UTAMA -->
 <!-- JAVASCRIPT -->
    <script>
        alert("fitur dalam tahap perkembangan");
    </script>
    
@endsection