<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('website/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ url('website/assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ url('website/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ url('website/assets/css/paper-kit.css?v=2.2.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ url('website/assets/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">

  <!-- Navbar -->
  @include('layouts.nav')
  <!-- End Navbar -->
  
  @yield('content')

  <div class="main">
    @include('layouts.footer')
    <!--   Core JS Files   -->
    @include('layouts.js')
</body>

</html>