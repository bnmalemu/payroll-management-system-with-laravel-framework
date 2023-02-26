<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- start of modal css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- end of modal css -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('public/img/bhulogo.png')}}">
    <title>BHU FINANCE SYSTEM</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('public/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('public/dist/css/adminlte.min.css')}}">
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper" style="height: 200px;">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-green navbar-light">
            <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="javascript:void(0)" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
            <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- notification, password change and logout Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)">
              <div><strong><i class="fas fa-user-circle mr-3">  {{Auth::user()->name}}</i></strong></div>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="javascript:void(0)" class="dropdown-item">
                <i class="fas fa-envelope mr-3"></i> <i>Update Username</i>
              </a>
              <div class="dropdown-divider"></div>
              <a href="javascript:void(0)" class="dropdown-item">
                <i class="fas fa-lock mr-3"></i> <i>Change Password</i>
              </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)"
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
        <a href="{{url('/dashboard')}}" class="brand-link" style="border-radius: 50px;">
          <img src="{{ asset('public/img/bhulogo.png') }}" alt="BHU Logo" class="brand-image img-circle elevation-3" style="opacity: 1.0">
          <span class="brand-text font-weight-light"><strong>BHU FINANCE</strong></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <br>
          <!-- Sidebar user panel (optional) -->
          <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link" style="border-radius: 50px; background-color: #34A853;">
                <i class="fas fa-home mr-2"></i>
                <P><i>PAYROLL PANEL</i></P>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('budget')}}" class="nav-link" style="border-radius: 50px; background-color: #0F7DC2;">
                    &nbsp;&nbsp;&nbsp;<i class="fas fa-graduation-cap mr-2"></i>
                    <p><i>Add Budget</i></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('charity')}}" class="nav-link" style="border-radius: 50px; background-color: #0F7DC2;">
                    &nbsp;&nbsp;&nbsp;<i class="fas fa-graduation-cap mr-2"></i>
                    <p><i>Add Charity</i></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('employee')}}" class="nav-link" style="border-radius: 50px; background-color: #0F7DC2;">
                    &nbsp;&nbsp;&nbsp;<i class="fas fa-graduation-cap mr-2"></i>
                    <p><i>Employee List</i></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('payroll')}}" class="nav-link" style="border-radius: 50px; background-color: #0F7DC2;">
                    &nbsp;&nbsp;&nbsp;<i class="fas fa-graduation-cap mr-2"></i>
                    <p><i>Payroll List</i></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('main')}}" class="nav-link" style="border-radius: 50px; background-color: #0F7DC2;">                 
                    &nbsp;&nbsp;&nbsp;<i class="fas fa-graduation-cap mr-2"></i>
                    <p><i>Main Payroll</i></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('payment')}}" class="nav-link" style="border-radius: 50px; background-color: #0F7DC2;">                 
                    &nbsp;&nbsp;&nbsp;<i class="fas fa-graduation-cap mr-2"></i>
                    <p><i>Send Payment to Bank</i></p>
                  </a>
                </li>
              </ul>
            </li>
            <br>
          </ul>
        </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="background-image: url(public/bna/3.jpg); height: 200px;">
        <!-- Main content -->
        @yield('content')
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer navbar-green">
        <table width="100%" border="0" cellspacing="0">
          <tr>
            <td width="100%" align="center">Copyright &copy; <?php echo "".date('Y'); ?> Bule Hora University. All rights reserved.</td>
          </tr>
        </table>
      </footer>
    </div>
    <!-- jQuery -->
    <script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('public/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('public/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('public/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('public/dist/js/demo.js')}}"></script>
    <!-- Page specific script -->

    <!-- start of modal java script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- end of modal java script -->
    <script type="text/javascript">
      $(function () {
        $("#bini").DataTable({
          "responsive": true, "lengthMenu": [5, 10, 25, 50, 100], "lengthChange": true, 
          "pageLength": 5, "autoWidth": false, "processing": true, "searching": true,    
          "ordering": false,
          "buttons": ["excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#bini_wrapper .col-md-6:eq(0)');
      });
    </script>
    <script type="text/javascript">
      $(function () {
        $("#bini1").DataTable({
          "responsive": true, "lengthMenu": [4, 8, 16, 20, 24, 28, 32, 36, 40], 
          "lengthChange": true, "pageLength": 4, "autoWidth": false, "processing": true, 
          "searching": true, "ordering": false,
          "buttons": ["excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#bini1_wrapper .col-md-6:eq(0)');
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function()
      {
        $('#data').after('&nbsp;<div id="nav"></div>');
        var rowsShown = 6;
        var rowsTotal = $('#data tbody tr').length;
        var numPages = rowsTotal/rowsShown;
        for( var i = 0; i < numPages; i++)
        {
          var pageNum = i + 1;
          $('#nav').append('<a href="javascript:void(0)" rel="'+i+'">'+pageNum+'</a>');
        }
        $('#data tbody tr').hide();
        $('#data tbody tr').slice(0, rowsShown).show();
        $('#nav a:first').addClass('active');

        $('#nav a').bind('click', function()
        {
          $('#nav a').removeClass('active');
          $(this).addClass('active');
          var currPage = $(this).attr('rel');
          var startItem = currPage * rowsShown;
          var endItem = startItem + rowsShown;
          $('#data tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).css('display', 'table-row').animate({opacity:1}, 300);
        });
      });
    </script>
    @yield('scripts')
  </body>
</html>