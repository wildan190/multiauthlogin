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

<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title primary">Data Transaksi </h3>
          <div class="card-tools">
          </div>


   
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
    <table id="example3" class="table table-bordered table-hover">
          <thead>
            <tr>
            <th >Client ID</th>
                <th>Client Name</th>
                <th>Date</th>
                <th>Item Category</th>
                <th>Amount</th>
                <th>Debet</th>
              <th>Kredit</th>
              <th>Saldo</th>
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
@endsection