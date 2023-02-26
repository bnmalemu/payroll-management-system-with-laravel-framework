@extends('layouts.admin.admin')
@section('content')
<section class="content">
    <!-- Horizontal Form -->
  <div class="card card-info">
    <div class="card-header">
      <center>
        <h3 class="card-title">ቡሌ ሆራዩኒቨርሲቲ</h3><img src="{{ asset('public/dist/img/bhulogo.png') }}" alt="BHU Logo" class="brand-image img-circle elevation-3" style="opacity: 1.0"><h3 class="card-title float-right">Bule-Hora University</h3>
      </center>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal">
    @csrf
      <div class="card-body">
       <h1>የግዥ አበልና ተሸከርካሪ ስምሪት አገልግሎት መጠየቂያ  </h1>
        <ol type="1">
        <li>የተጠየቀው አገልግሎት  ዓይነት           <input  type="text" ></li>
        <li>አገልግሎቱን የጠየቀው አካል /ግልስብ      <input  type="text" ></li>
        <li>አገልግሎቱ  የተፈለገበት ምክንያት     <input  type="text" ></li>
        <li>አግልግሎቱ በዕቅድ የተያዘ ወይም ደራሽ መሆኑ      <input  type="text" ></li>
        <li>የቅርብ /የዘርፉ /ኃላፊ አስተየት  /የጉዞ ቦታ  እና የተፈቀደ የውሎ አባል ቀን ብዛት /            <input  type="text" ></li>
        <p> ስም: <input  type="text" > ቀን:<input  type="text" >ፊርማ:<input  type="text" > </p>
        <li>የፕሬዚዳንት ጽ/ቤት ም/ፕሬዚዳንት ጽ/ቤት /አስተየት<input type="text" name=""></li> 
        <p> ስም: <input  type="text" > ቀን:<input  type="text" >ፊርማ:<input  type="text" > </p>
        <li>በጀት መኖሩን ያተጋገጠው በጀት ባለሞያ : </li>
        <p> ስም: <input  type="text" > ቀን:<input  type="text" >ፊርማ:<input  type="text" > </p>
        <li>የፋይናንስ አስተዳደር: </li>
        <p> ስም: <input  type="text" > ቀን:<input  type="text" >ፊርማ:<input  type="text"> </p>
      </ol>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <center>
          <div>In replaying, please quote our Ref. No.</div>
          <div>መልስ ሲጽፉ የእኛን ቁጥር ይጥቀሱ</div>
          <div>Tell- 046 443 0135   Fax- 046 443 0355</div>
          <div>Post- 144</div>
        </center>  
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->
</section>

@endsection
