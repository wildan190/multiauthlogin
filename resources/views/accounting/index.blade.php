@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Accounting')
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

    .form1 {
       
        
        
    }

    
    #table2{
       
        
        
        color: black;
        background-color: #C6EBC5;
    }
    .tr1{
        background-color: #367E18;
        color: white;
    }
</style>

<h4 class="headline">Accounting List</h4>






   
    <table class="table1">
        <tr>
            <th><a class="btn btn-success btn-sm" href="{{ route('accounting.create') }}">+ Add</a></th>
        </tr>
    </table>


<center>
    <table  cellpadding="15" id="table2">
    <h1> Invoice </h1>
            <tr class="tr1">
                <th >Client ID</th>
                <th>Client Name</th>
                <th>Date</th>
                <th>Item Category</th>
                <th>Amount</th>
                <th  class="text-center">Action</th>
                
            </tr>
        </thead>
       
        <tr>
            <td ></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-center">
                <form action="" method="POST">
                    
                    <a class="btn btn-info btn-sm" href="">Show</a>

                    <a class="btn btn-primary btn-sm" href="">Edit</a>

                 

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data ?')">Delete</button>
                </form>
            </td>
            
        </tr>
        <tr></tr>

      

    </table>
    </center>
@endsection