<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ !empty($header_title) ? $header_title : '' }} - Ecommerce </title>


  <link rel="stylesheet" href="{{ url('public/assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">

  <link rel="stylesheet" href="{{url('public/assets/plugins/fontawesome-free/css/all.min.css')}} ">

  <link rel="stylesheet" href="{{ url('public/assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">

  <link rel="stylesheet" href="{{ url('public/assets/dist/css/adminlte.min.css') }}">

  <link rel="stylesheet" href="{{ url('public/bootstrap.min.css')}} ">

  

  @yield('style')
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

    @include('admin.layouts.header')
    @yield('content')
    @include('admin.layouts.footer')

</div>

<script src="{{ url('public/assets/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ url('public/assets/dist/js/adminlte.js') }}"></script>


<script src="{{ url('public/assets/plugins/chart.js/Chart.min.js') }}"></script>

{{-- <script src="{{ url('public/assets/dist/js/demo.js') }}"></script> --}}



@yield('script')
</body>
</html>
