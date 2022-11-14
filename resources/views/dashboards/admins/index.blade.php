@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')
<style>
.table1{
    margin-top: 5px;
    margin-left: auto;
    margin-right: auto;
}
#submit1{
    margin-left: 10px;
    margin-top: 10px;
}
</style>
@section('content')
<button type="submit" class="btn btn-warning" id="submit1">Export </button>
<table class="table1">
    <tr>
        <td><img src="https://i.ibb.co/WHpGYsc/965ea843-afd6-428d-bcce-a0aaa290cd90.jpg" alt=""></td>
    </tr>
</table>
<script>
    alert("data masih berupa sample")
    </script>
@endsection