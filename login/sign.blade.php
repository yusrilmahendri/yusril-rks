<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title> {{config('forum.title')}} </title>
 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/bower_components/font-awesome/css/font-awesome.min.css">
 
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/bower_components/Ionicons/css/ionicons.min.css">
 
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/dist/css/AdminLTE.min.css">
 
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.comcss?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="/login"><b>LOGIN</b></a>
  </div>
  
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login!</p>

    <form action="" method="POST">
      
       <div class="form-group has-feedback">
         <input type="email" class="form-control" name="email" placeholder="Email">
           <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
       </div>
     
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
           <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
               <a href="/daftar" class="text-center">Register a new membership</a>
            </label>
          </div>
        </div>
        
        <!-- /.col -->
        <div id="dismiss" class="col-xs-4">
          <a href="/dashboard" class="btn btn-primary btn-block btn-flat">Sign In</a>
          </div>
        <!-- /.col -->
      </div>
    </form> 

    </div>
</div>


<!-- jQuery 3 -->
<script src="{{ asset('frontend') }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('frontend') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{ asset('frontend') }}/plugins/iCheck/icheck.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Hello selamat datang, Sudah Punya akun? Jika Belum ayoo daftarkan dahulu!");
  $(document).ready(function(){    
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%', /* optional */
    });
  });


</script>
</body>
</html>
