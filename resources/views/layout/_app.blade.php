<!doctype html>
<html lang="en">


<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

@if(!empty($meta_description))
  <meta name="description" content="{{ meta_description }}">
@endif


@if(!empty($meta_keywords))
  <meta name="keywords" content="{{ $meta_keywords }}">
@endif

  <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}">
  <link href="{{ url('https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto') }}"
    rel="stylesheet">


  <link rel="apple-touch-icon" sizes="180x180" href="{{ url('./assets/images/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ url('./assets/images/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('./assets/images/favicon/favicon-16x16.png') }}">
  <link rel="mask-icon" href="{{ url('./assets/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">


  <link rel="stylesheet" href="{{ url('./assets/css/libs.bundle.css') }}" />


  <link rel="stylesheet" href="{{ url('./assets/css/theme.bundle.css') }}" />


  <noscript>
    <style>
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>


  <title>{{ !empty($meta_title) ? $meta_title : '' }}</title>

</head>

@include('layout._header')
@yield('content')
@include('layout._footer')


<script src="{{ url('./assets/js/vendor.bundle.js') }}"></script>

<script src="{{ url('./assets/js/theme.bundle.js') }}"></script>
</body>

</html>