<!doctype html>
<html lang="en">

<head>

  <title>{{config('forum.title')}}</title>
  
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/vendor/chartist/css/chartist-custom.css')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
  <!-- MAIN CSS -->
   <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
  
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
   <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
  
  <!-- GOOGLE FONTS -->
  <!-- toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- size textareabox pada fomr insert forum -->
    <style>
       .ck-editor__editable_inline { min-height: 450px; }
    </style>
     @yield('header')
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">

    <!-- NAVBAR -->
    @include('layouts.includes._navbar')
  
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
      <a href="{{config('forum.logo_url')}}"></a>
         @include('layouts.includes._sidebar')
  
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    @yield('content')
  </div>
   
    <!-- END MAIN -->
   <div class="clearfix"></div>
      <footer>
        <div class="container-fluid">
          <p class="copyright">&copy; 2020 PT TIMAH Tbk All Rights Reserved.</p>
       </div>
    </footer>
  </div>
  
  <!-- END WRAPPER -->
  <!-- Javascript -->
  <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/chartist/js/chartist.min.js')}}"></script>
  <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="{{asset('template/js/ckeditor.js')}}"></script>
  <script src="{{ asset('/js/like.js') }}"></script>  
  <script src="{{asset('admin/assets/scripts/jquery-3.5.1.js')}}"></script>

 <script type="text/javascript">
   @if(Session::has('sukses'))
  
     // Display a success toast, with a title
       toastr.success("{{Session::get('sukses')}}", "Sukses")
    @endif
  </script>
 @yield('footer')

</body>
</html>
