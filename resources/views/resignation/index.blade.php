@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Resignation')
@section('content')
<style>
.headline{
    margin-top: 5px;
    font-family: Arial, Helvetica, sans-serif;
    margin-left: 10px;
}
.p1{
    font-family: Arial, Helvetica, sans-serif;
    margin-top: -5px;
    margin-left: 10px;
    text-align: justify;
}
#submit1{
    margin-left: 7px;
}
</style>

<h4 class="headline">Resignation Form</h4>

<p class="p1">Hai, <!-- nama otomatis dari db -->
Anda telah memutuskan untuk meninggalkan kami, Kami sangat Sedih. <br>Silakan isi formulir ini agar kami mengetahui pengalaman Anda bersama kami.
</p>

<div class="col-sm">
 <div class="form-group">
<strong>Full Name</strong>
<input type="text" name="full_name" class="form-control" placeholder="Full Name">
</div>
</div>

<div class="col-sm">
 <div class="form-group">
<strong>When are you leaving us? </strong>
<input type="text" name="leaving" class="form-control" placeholder="When are you leaving us? ">
</div>
</div>

<div class="col-sm">
 <div class="form-group">
<strong>Please rate your experience in our company</strong>

<select type="text" class="form-control" name="leave_type" placeholder="">
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
<input type="text" name="learned" class="form-control" placeholder="How much have you learned from your time with us?">
</div>
</div>

<div class="col-sm">
 <div class="form-group">
<strong>Can we have your autograph, one last time?</strong>
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupFile01">Upload</label>
  <input type="file" class="form-control" id="inputGroupFile01">
</div>
</div>
</div>

<button type="submit" class="btn btn-success" id="submit1">Submit</button>

</div>

@endsection