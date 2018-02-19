<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{!!asset('bootstrap/css/bootstrap.min.css')!!}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!!asset('dist/css/AdminLTE.min.css')!!}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{!!asset('dist/css/skins/_all-skins.min.css')!!}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{!!asset('plugins/iCheck/flat/blue.css')!!}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{!!asset('plugins/morris/morris.css')!!}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{!!asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{!!asset('plugins/datepicker/datepicker3.css')!!}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{!!asset('plugins/daterangepicker/daterangepicker-bs3.css')!!}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{!!asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')!!}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{!!route('admin.index')!!}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>NV</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Anna</b>purna</b> Venu</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="{!!route('admin.index')!!}" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">         
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="{!!route('admin.index')!!}" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{!!asset('dist/img/user1.jpg')!!}" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{!!asset('dist/img/user1.jpg')!!}" class="img-circle" alt="User Image">

                <p>
                  Admin- Annapurna
                  <small>Member since  2016</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{!!route('admin.index')!!}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{!!route('auth.logout')!!}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{!!asset('dist/img/user1.jpg')!!}" class="img-circle"  alt="User Image" >
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="{!!route('admin.index')!!}"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{!!route('admin.index')!!}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
          </a>
        </li>

        <li><a href="{!!route('admin.book.index')!!}"><i class="fa fa-book"> </i> 
            <span>Booking</span></a></li>
          </a>
        </li>

        <li class="treeview">
          <a href="{!!route('admin.category.index')!!}">
            <i class="fa fa-cutlery"></i>
            <span>Catageories</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{!!route('admin.group.index')!!}">
            <i class="fa fa-clone"></i>
            <span>Group</span>
          </a>
        </li>

         
        <li class="treeview">
          <a href="{!!route('admin.item.index')!!}">
            <i class="fa fa-bars"></i>
            <span>Items</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{!!route('admin.hall.index')!!}">
            <i class="fa fa-university"></i>
            <span>Halls</span>
          </a>
        </li>
  

        <li class="treeview">
          <a href="{!!route('admin.shift.index')!!}">
            <i class="fa fa-tachometer"></i>
            <span>Shifts</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{!!route('admin.menu.index')!!}">
            <i class="fa fa-th"></i>
            <span>Menus</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-phone"></i>
            <span>Contact</span>
          </a>
        </li>
     
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
      </h1>
    </section>



     
    

 @yield('content')


          


<!-- jQuery 2.2.0 -->
<script src="{!!asset('plugins/jQuery/jQuery-2.2.0.min.js')!!}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{!!asset('bootstrap/js/bootstrap.min.js')!!}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{!!asset('plugins/morris/morris.min.js')!!}"></script>
<!-- Sparkline -->
<script src="{!!asset('plugins/sparkline/jquery.sparkline.min.js')!!}"></script>
<!-- jvectormap -->
<script src="{!!asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}"></script>
<script src="{!!asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}"></script>
<!-- jQuery Knob Chart -->
<script src="{!!asset('plugins/knob/jquery.knob.js')!!}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{!!asset('plugins/daterangepicker/daterangepicker.js')!!}"></script>
<!-- datepicker -->
<script src="{!!asset('plugins/datepicker/bootstrap-datepicker.js')!!}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{!!asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}"></script>
<!-- Slimscroll -->
<script src="{!!asset('plugins/slimScroll/jquery.slimscroll.min.js')!!}"></script>
<!-- FastClick -->
<script src="{!!asset('plugins/fastclick/fastclick.js')!!}"></script>
<!-- AdminLTE App -->
<script src="{!!asset('dist/js/app.min.js')!!}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{!!asset('dist/js/pages/dashboard.js')!!}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{!!asset('dist/js/demo.js')!!}"></script>

 

</body>
</html>
