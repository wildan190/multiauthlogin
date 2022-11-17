@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','About')
@section('content')
<style>
.h6{
    color: white;
}

  #p1{
    margin-bottom: -5px;
  }
    #img1{
        height: 200px;
        width: 150px;
        margin-left: 75px;
       margin-bottom: -10px;
     border-radius: 15px;
     border-bottom: 10px;
     background-image: radial-gradient(circle at 50% -20.71%, #ffac6c 0, #ff9d6f 12.5%, #ff8d71 25%, #f17d70 37.5%, #d86c6c 50%, #be5d67 62.5%, #a75162 75%, #93475d 87.5%, #82405a 100%);
    }
    .table1{
     
        margin-left: 445px;
       
    }

    #img2{
        height: 170px;
        width: 180px;
        margin-left: 50px;
       margin-bottom: -10px;
       border-radius: 15px;
     border-bottom: 10px;
     background-image: radial-gradient(circle at 50% -20.71%, #fff56b 0, #fff866 6.25%, #fdfa63 12.5%, #e7fb61 18.75%, #d0fb62 25%, #b5fa65 31.25%, #97f86a 37.5%, #73f670 43.75%, #3cf278 50%, #00ee82 56.25%, #00ea8f 62.5%, #00e69d 68.75%, #00e2ad 75%, #00dfbe 81.25%, #00dbd1 87.5%, #00d8e3 93.75%, #00d6f6 100%);
    }
    .table2{
        margin-left: 50px;
        margin-top: -100px;

    }
    #p2{
        margin-bottom: -5px;
    }

    #img3{
        height: 170px;
        width: 130px;
        margin-left: 50px;
       margin-bottom: -10px;
       border-radius: 15px;
     border-bottom: 10px;
    background-image: radial-gradient(circle at 50% -20.71%, #e459ea 0, #c84ded 16.67%, #a544f0 33.33%, #783cf2 50%, #2538f4 66.67%, #0039f5 83.33%, #003af6 100%);
    }
    .table3{
        margin-top: -320px;
        margin-left: 830px;
        margin-bottom: 100px;
    }
    #p3{
        margin-bottom: -5px;
    }
    .tagline{
        
        margin-left: 445px;
        margin-top: -300px;
       margin-bottom: 100px;
       
       
    }
    #h5{
        text-align: center;
    }

</style>

<table class="table1">
    <tr>
        <td>
<div class="card" style="width: 18rem;">
  <img src="https://i.ibb.co/1TjtYnT/IMG20220316125554-removebg-preview.png" alt="572f2fae-711a-4fa0-b41c-be7bce896055-" class="card-img-top" alt="..." id="img1">
  <div class="card-body">
    <h5 class="card-title">Drajat Danu Wardana</h5>
    <p class="card-text" id="p1">Posisi : Project Manager</p>
    <p class="card-text">Kemampuan : Front-end dev</p>
    <a href="https://www.instagram.com/d_danuwardana/" target="blank" class="btn btn-primary">My Instagram</a>
  </div>
</div>
</td>
</tr>
</table>

<table class="table2">
    <tr>
        <td>
<div class="card" style="width: 18rem;">
  <img src="https://i.ibb.co/SVHXfLK/chirfan-true-3.png" class="card-img-top" alt="..." id="img2">
  <div class="card-body">
    <h5 class="card-title">Chirfansyah</h5>
    <p class="card-text" id="p2">Posisi : System Analyst</p>
    <p class="card-text">Kemampuan : Analyst Thinking</p>
    <a href="https://www.instagram.com/chirfan_/" target="blank" class="btn btn-primary">My Instagram</a>
  </div>
</div>
</td>
</tr>
</table>

<table class="table3">
    <tr>
        <td>
<div class="card" style="width: 18rem;">
  <img src="https://i.ibb.co/d6YF9vz/asep-true-2.png" class="card-img-top" alt="..." id="img3">
  <div class="card-body">
    <h5 class="card-title">Muhammad Asep Wildan Muholadun</h5>
    <p class="card-text" id="p3">Posisi : Programmer</p>
    <p class="card-text">Kemampuan : Back-end dev</p>
    <a href="https://www.instagram.com/smittensweetdreams/" target="blank" class="btn btn-primary">My Instagram</a>
  </div>
</div>
</td>
</tr>
</table>
<!--
<table class="tagline">
    <tr>
        <td>
<div class="card" style="width: 18rem;" >
  <div class="card-body" >
    <p class="card-title text-center" >Tagline Aplikasi</p>
    <p class="card-title text-center" >Nothing Is Impossible</p>
  </div>
</div>
</td>
</tr>
</table>
<h6 class="h6">end</h6>-->
@endsection