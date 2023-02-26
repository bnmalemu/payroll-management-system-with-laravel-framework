<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="{{asset('public/dist/img/bhulogo.png')}}">
  <title>BHU FINANCE</title>
  <link rel="stylesheet" href="{{ asset('public/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-green navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="javascript:void(0)" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
      <br>
      <br>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link" style="border-radius: 50px; background-color: #34A853;">
              <P><i><b>BHU FINANCE</b></i></P>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/')}}" class="nav-link" style="border-radius: 50px; background-color: #0F7DC2;">
                  <i class="fa fa-home mr-2"></i>
                  <p><i><b>Home</b></i></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link" style="border-radius: 50px; background-color: #0F7DC2;">
                  <i class="fas fa-lock mr-2"></i>
                  <p><i><b>Login</b></i></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link" style="border-radius: 50px; background-color: #0F7DC2;">
                  <i class="fa fa-info-circle mr-2"></i>
                  <p><i><b>About Us</b></i></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link" style="border-radius: 50px; background-color: #0F7DC2;">
                  <i class="fas fa-address-book mr-2"></i>
                  <p><i><b>Contact Us</b></i></p>
                </a>
              </li>
            </ul>
          </li>
          <br>
        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper" style="background-image: url(public/bna/4.jpg)">
    <br>
    <p><strong><font style size=6><i><center>BHU FINANCE SYSTEM</center></i></font></strong></p>
    <center>@yield('content')</center>
  </div>
  <footer class="main-footer navbar-green">
    <table width="100%" border="0" cellspacing="0">
      <tr>
        <td width="100%" align="center">Copyright &copy; <?php echo "".date('Y'); ?> Bule Hora University. All rights reserved.</td>
      </tr>
    </table>
  </footer>
</div>
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('public/js/adminlte.js') }}"></script>
</body>
</html>