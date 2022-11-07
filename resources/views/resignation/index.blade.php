@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Resignation')
@section('content')

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


<style>
    .headline {
        margin-top: 5px;
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 10px;
    }

    .p1 {
        font-family: Arial, Helvetica, sans-serif;
        margin-top: -5px;
        margin-left: 10px;
        text-align: justify;
    }

    #submit1 {
        margin-left: 7px;
    }
</style>

<h4 class="headline">Resignation Form</h4>

<p class="p1">Hai,
    <!-- nama otomatis dari db -->
    Anda telah memutuskan untuk meninggalkan kami, Kami sangat Sedih. <br>Silakan isi formulir ini agar kami mengetahui pengalaman Anda bersama kami.
</p>

<form action="{{ route('resignation.store') }}" method="POST" id="form1">
    @csrf
    <div class="col-sm">
        <div class="form-group">
            <strong>Full Name</strong>
            <input type="text" name="nama" class="form-control" placeholder="Full Name">
        </div>
    </div>

    <div class="col-sm">
        <div class="form-group">
            <strong>When are you leaving us? </strong>
            <input type="text" name="reason" class="form-control" placeholder="When are you leaving us? ">
        </div>
    </div>

    <div class="col-sm">
        <div class="form-group">
            <strong>Please rate your experience in our company</strong>

            <select type="text" class="form-control" name="rate" placeholder="">
                <option style="background-color: #808080; color: white;"></option>
                <option>Sangat Tidak Baik</option>
                <option>Tidak Baik</option>
                <option>Baik</option>
                <option>Sangat Baik</option>
            </select>

        </div>
    </div>

    <div class="col-sm">
        <div class="form-group">
            <strong>How much have you learned from your time with us?</strong>
            <input type="text" name="long_learn" class="form-control" placeholder="How much have you learned from your time with us?">
        </div>
    </div>

    <div class="col-sm">
        <div class="form-group">
            <strong>Can we have your autograph, one last time?</strong>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                <input type="file" class="form-control" name="signature" id="inputGroupFile01">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success" id="submit1">Submit</button>

    </div>
</form>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Full Name</th>
            <th>Reason</th>
            <th>Rate Company</th>
            <th>Long Learned</th>
            <th>Signature</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
    </thead>
    @foreach ($resignation as $resignation)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $resignation->nama }}</td>
        <td>{{ $resignation->reason }}</td>
        <td>{{ $resignation->rate }}</td>
        <td>{{ $resignation->long_learn }}</td>
        <td>{{ $resignation->signature }}</td>
        <td class="text-center">
            <form action="{{ route('resignation.destroy',$resignation->id) }}" method="POST">

                <a class="btn btn-info btn-sm" href="{{ route('resignation.show',$resignation->id) }}">Show</a>

                <a class="btn btn-primary btn-sm" href="{{ route('resignation.edit',$resignation->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data ?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection