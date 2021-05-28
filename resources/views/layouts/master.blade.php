<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/core-img/favicon.png')}}" type="image/x-icon" />

    <!--  Minified CSS Files -->
    <link rel="stylesheet" href="{{asset(mix('css/app.min.css'))}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset(mix('css/app.css'))}}">

</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
      @include('includes.nav-bar')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Content Area Start ##### -->
      @yield('content')
    <!-- ##### Content Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
      @include('includes.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <script src="{{asset(mix('js/app.min.js'))}}"></script>
    <script src="{{asset(mix('js/app.js'))}}"></script>

</body>

</html>
