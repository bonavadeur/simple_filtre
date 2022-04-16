<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="{{ asset('resources') }}/">
    <link rel="shortcut icon" type="image/png" href="image/logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Toulons Écommerce</title>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    {{-- <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="css/main.css" rel="stylesheet">
</head>
<!--/head-->

<body>
    @include('client.component.header')

    @yield('home-search')

    {{-- @yield('slide') --}}

    @yield('custom')

    @include('client.component.footer')
</body>

<script src="js/jquery-3.6.0.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>

</html>
