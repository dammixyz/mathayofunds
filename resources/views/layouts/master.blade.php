<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/src/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 20:59:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://crypto-admin-templates.multipurposethemes.com/images/favicon.ico">

    <title>Mathayo Funds</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}">

    <!--amcharts -->
    <link href="https://www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap-extend -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-extend.css')}}">

    {{--<link rel="stylesheet" href="{{asset('assets/vendor_components/font-awesome/css/font-awesome.css')}}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.1.0-0/collection/components/icon/icon.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('assets/vendor_components/Ionicons/css/ionicons.css')}}">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    {{--    <link rel="stylesheet" href="{{asset('assets/vendor_components/themify-icons/themify-icons.css')}}">--}}
    <link rel="stylesheet" href="http://www.ncb.dk/wp-content/themes/conall/assets/css/linea-icons/style.css">
    {{--    <link rel="stylesheet" href="{{asset('assets/vendor_components/linea-icons/linea.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/vendor_components/glyphicons/glyphicon.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
    {{--    <link rel="stylesheet" href="{{asset('assets/vendor_components/flag-icon/css/flag-icon.css')}}">--}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css">
    {{--    <link rel="stylesheet" href="{{asset('assets/vendor_components/material-design-iconic-font/css/materialdesignicons.css')}}">--}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    {{--    <link rel="stylesheet" href="{{asset('assets/vendor_components/simple-line-icons-master/css/simple-line-icons.css')}}">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cryptocoins-icons@2.9.0/webfont/cryptocoins.css">
    {{--    <link rel="stylesheet" href="{{asset('assets/vendor_components/cryptocoins-master/webfont/cryptocoins.css')}}">--}}
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css')}}">

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('assets/vendor_plugins/iCheck/all.css')}}">

    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">

    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset('assets/vendor_plugins/timepicker/bootstrap-timepicker.min.css')}}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('assets/vendor_components/select2/dist/css/select2.min.css')}}">



    <!-- theme style -->
    <link rel="stylesheet" href="{{asset('assets/css/master_style.css')}}">

    <!-- Crypto_Admin skins -->
    <link rel="stylesheet" href="{{asset('assets/css/skins/_all-skins.css')}}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="index.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <b class="logo-mini">
                <span class="light-logo"><img src="../images/logo-light.png" alt="logo"></span>
                <span class="dark-logo"><img src="../images/logo-dark.png" alt="logo"></span>
            </b>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
		  <img src="../images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="../images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#">

            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <li class="header">You have 7 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu inner-content-div">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit
                                            blandit.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien
                                            elementum, in semper diam posuere.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo
                                            porttitor pretium a erat.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum
                                            fermentum.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> Nunc fringilla lorem
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum,
                                            at scelerisque ipsum imperdiet.
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- User Account -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="../images/user5-128x128.jpg" class="float-left rounded-circle"
                                     alt="User Image">

                                <p>
                                    Romi Roy
                                    <small class="mb-5">jb@gmail.com</small>
                                    <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row no-gutters">
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ion ion-person"></i> My Profile</a>
                                    </div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                                    </div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ion ion-settings"></i> Setting</a>
                                    </div>
                                    <div role="separator" class="divider col-12"></div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ti-settings"></i> Account Setting</a>
                                    </div>
                                    <div role="separator" class="divider col-12"></div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="ulogo">
                    <a href="index.html">
                        <!-- logo for regular state and mobile devices -->
                        <span><b>Mathayo </b>Funds</span>
                    </a>
                </div>
                <div class="image">
                    <img src="{{asset('mathayo-profile.png')}}" class="rounded-circle" alt="User Image">
                </div>
                <div class="info">
                    <p>Welcome, Stunner</p>
                </div>
            </div>
            <!-- sidebar menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="nav-devider"></li>
                <li class="header nav-small-cap">PERSONAL</li>
                <li class="{{ Request::is('home') ? 'active' : '' }}">
                    <a href="{{route('home')}}">
                        <i class="icon-home"></i> <span>Overview</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <i class="icon-user"></i> <span>Profile</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <i class="icon-clock"></i> <span>Transactions</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <i class="icon-graph"></i> <span>Rates</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
                <li class="{{ Request::is('trade-with-us')||Request::is('trade-with-us/buy-coin')||Request::is('trade-with-us/sell-coin')||Request::is('trade-with-us/sell-giftcard') ? 'active' : '' }}">
                    <a href="{{asset('trade-with-us')}}">
                        <i class="icon-wallet"></i> <span>Trade with us</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <i class="icon-settings"></i> <span>Settings</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>


            </ul>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        &copy; 2020 All right reserved. Mathayofunds
    </footer>


    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="{{asset('assets/vendor_components/jquery/dist/jquery.js')}}"></script>

<!-- popper -->
<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js')}}"></script>

<!-- Slimscroll -->
<script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- FastClick -->
<script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

<!--amcharts charts -->
<script src="https://www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/gauge.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/amstock.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/patterns.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>

<!-- webticker -->
<script src="{{asset('assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js')}}"></script>

<!-- EChartJS JavaScript -->
<script src="{{asset('assets/vendor_components/echarts-master/dist/echarts-en.min.js')}}"></script>
<script src="{{asset('assets/vendor_components/echarts-liquidfill-master/dist/echarts-liquidfill.min.js')}}"></script>

<!-- This is data table -->
<script src="{{asset('assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js')}}"></script>

<!-- Crypto_Admin App -->
<script src="{{asset('assets/js/template.js')}}"></script>

<!-- Crypto_Admin dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
<script src="{{asset('assets/js/pages/dashboard-chart.js')}}"></script>

<!-- Crypto_Admin for demo purposes -->
<script src="{{asset('assets/js/demo.js')}}"></script>



<!-- Select2 -->
<script src="{{asset('assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>

<!-- bootstrap datepicker -->
<script src="{{asset('assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<!-- iCheck 1.0.1 -->
<script src="{{asset('assets/vendor_plugins/iCheck/icheck.min.js')}}"></script>

<!-- FastClick -->
<script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

<!-- Crypto_Admin App -->
<script src="{{asset('assets/js/template.js')}}"></script>

<!-- Crypto_Admin for demo purposes -->
<script src="{{asset('assets/js/demo.js')}}"></script>

<!-- Crypto_Admin for advanced form element -->
<script src="{{asset('assets/js/pages/advanced-form-element.js')}}"></script>

</body>

</html>
