<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="W3Web">
  <title>W3Webs-Bootstrap 4 Admin Template</title>
  <link rel="apple-touch-icon" href="{{ asset('admin') }}/app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/vendors/css/charts/morris.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/vendors/css/extensions/unslider.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/vendors/css/weather-icons/climacons.min.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
  <!-- link(rel='stylesheet', type='text/css', href=app_assets_path+'/css'+rtl+'/pages/users.css')-->
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/style.css">
  <!-- END Custom CSS-->
  @livewireStyles
</head>

  {{ $slot }}
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  
  <!-- BEGIN VENDOR JS-->
  <script src="{{ asset('admin') }}/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{ asset('admin') }}/app-assets/vendors/js/extensions/jquery.knob.min.js" type="text/javascript"></script>
  <script src="{{ asset('admin') }}/app-assets/js/scripts/extensions/knob.js" type="text/javascript"></script>
  <script src="{{ asset('admin') }}/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="{{ asset('admin') }}/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="{{ asset('admin') }}/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
  <script src="{{ asset('admin') }}/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js" type="text/javascript"></script>
  <script src="{{ asset('admin') }}/app-assets/data/jvector/visitor-data.js" type="text/javascript"></script>
  <script src="{{ asset('admin') }}/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
  <script src="{{ asset('admin') }}/app-assets/vendors/js/charts/jquery.sparkline.min.js" type="text/javascript"></script>
  <script src="{{ asset('admin') }}/app-assets/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/css/core/colors/palette-climacon.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/app-assets/fonts/simple-line-icons/style.min.css">
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{ asset('admin') }}/app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="{{ asset('admin') }}/app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="{{ asset('admin') }}/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{ asset('admin') }}/app-assets/js/scripts/pages/dashboard-analytics.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  @livewireScripts
</body>
</html>