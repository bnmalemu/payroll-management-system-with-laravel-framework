<!DOCTYPE html>
<html lang="en">
<head>
  
  <!-- start of modal css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <!-- end of modal css -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="{{ asset('public/dist/img/bhulogo.png') }}">
  <title> | BHU FINANCE SYSTEM | </title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('public/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('public/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('public/plugins/summernote/summernote-bs4.min.css') }}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
        <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- notification, password change and logout Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <div><strong><i class="fas fa-user mr-2">  {{  Auth::user()->name }}  </i></strong></div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href=" {{ route('admin.notification') }} " class="dropdown-item">
            <i class="fas fa-envelope mr-3"></i> <i>Update Username</i>
          </a>
          <div class="dropdown-divider"></div>
          <a href=" {{ route('update_password') }} " class="dropdown-item">
            <i class="fas fa-edit mr-3"></i> <i>Change Password</i>
          </a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="fas fa-power-off mr-3"></i>  <i>Log Out</i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link">
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link">
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href=" {{ url('/dashboard') }} " class="brand-link">
      <img src="{{ asset('public/dist/img/bhulogo.png') }}" alt="BHU Logo" class="brand-image img-circle elevation-3" style="opacity: 1.0">
      <span class="brand-text font-weight-light"><strong>FINANCE SYSTEM</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <br>
      <!-- Sidebar user panel (optional) -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="" class="nav-link">
              <P>01 - BHU's Project</P>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="  " class="nav-link">                 
                  <p>001 - Ongoing Project</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="  " class="nav-link">
                  <p>002 - Residential Bldg</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="  " class="nav-link">
                  <p>003 - Lecture Hall Bldg</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="  " class="nav-link">                 
                  <p>004 - ICT Infrastructure</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="  " class="nav-link">
                  <p>005 - Admin & Office Bldg</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="  " class="nav-link">
                  <p>006 - Infrastructure</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="  " class="nav-link">                 
                  <p>007 - Road within Campus</p>
                </a>
              </li>
            </ul>
          </li>
          <br>
          <li class="nav-item menu-open">
            <a href="" class="nav-link">
              <P>02 - Learning and Teaching</P>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="  " class="nav-link">                 
                  <p>SA 01 - Teaching Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="  " class="nav-link">
                  <p>SA 02 - Student Service</p>
                </a>
              </li>
            </ul>
          </li>
          <br>
          <li class="nav-item menu-open">
            <a href="" class="nav-link">
              <P>03 - Research and Dev't</P>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="  " class="nav-link">                 
                  <p>SA 01 - Research</p>
                </a>
              </li>
            </ul>
          </li>
          <br>
          <li class="nav-item menu-open">
            <a href="" class="nav-link">
              <P>04 - Community Service</P>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="  " class="nav-link">                 
                  <p>SA 01 - Training Service</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

      <!-- Main content -->
      
      @yield('content') 

  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <table width="100%" border="0" cellspacing="0">
      <tr>
        <td width="100%" align="center">Copyright &copy; <?php echo "".date('Y'); ?> Bule Hora University. All rights reserved.</td>
      </tr>
    </table>
  </footer>
  
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('public/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('public/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('public/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('public/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('public/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('public/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('public/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('public/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('public/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('public/dist/js/adminlte.js') }}"></script>

<!-- start of modal java script -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<!-- end of modal java script -->

</body>
</html>