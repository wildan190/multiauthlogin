@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Add User')
@section('content')
<style>

</style>

<a class="btn btn-success btn-sm" href="{{ route('auth.register') }}">+ Add User</a>
@endsection