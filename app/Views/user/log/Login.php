
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>APP DISCUSS 3.2 | Dashboard</title> -->
    <!-- thay đổi tiêu đêf theo trang theo hành động -->
    <title><?= isset($pageTitle) ? $pageTitle : 'APP DISCUSS 3.2' ?></title>

    <base href="/">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body>
<div class="content">
<div class="container">
<div class="row justify-content-center">

<div class="col-md-6 contents">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="form-block">
<div class="mb-4">
<h3>Sign In to <strong>Colorlib</strong></h3>
<p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
</div>
<form action="#" method="post">
<div class="form-group first">
<label for="username">Username</label>
<input type="text" class="form-control" id="username">
</div>
<div class="form-group last mb-4">
<label for="password">Password</label>
<input type="password" class="form-control" id="password">
</div>
<div class="d-flex mb-5 align-items-center">
<label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
<input type="checkbox" checked="checked" />
<div class="control__indicator"></div>
</label>
<span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
</div>
<input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">
<span class="d-block text-center my-4 text-muted"> or sign in with</span>
<div class="social-login text-center">
<a href="#" class="facebook">
<span class="icon-facebook mr-3"></span>
</a>
<a href="#" class="twitter">
<span class="icon-twitter mr-3"></span>
</a>
<a href="#" class="google">
<span class="icon-google mr-3"></span>
</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script></script>
</script>
</body>
</html> 