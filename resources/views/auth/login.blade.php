@extends('layouts.home.home')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"></h1>
      </div>
    </div>
  </div>  
</div>
<section class="content">
  <div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="background-image: url(public/bna/body-table.jpg)">
      @if(isset(Auth::user()->email))
        <script>window.location="/main/dashboard"</script>
      @endif
      @if($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{{ $message }}</strong>
        </div>  
      @endif      
      @if (count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach 
          </ul>
        </div>
      @endif
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="input-group mb-3" style="border-radius: 50px;">
          <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</section>
@endsection