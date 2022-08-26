<!DOCTYPE html>
<html lang="vi">
<head>
    <base href="../../../">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Xe hơi an toàn, Thông Minh">
    <meta name="keywords" content="tmas, thiên minh, xe hơi, an toàn, thông minh, cảm biến, cảm biến xe hơi, màn android ô tô, màn hình thông minh">
    <meta name="author" content="TMAS">
    <!-- Latest compiled and minified CSS -->
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/logo-tmas.svg')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home-page.css')}}">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- Latest compiled JavaScript -->
    
</head>


<body>
    @include('pages.layouts.header')
    <main>
        @yield('content')
    </main>
    @include('pages.layouts.footer')
</body>
<style>

</style>
<script src="{{asset('assets/scrips.js')}}"></script>
<link rel="stylesheet" href="https://js.arcgis.com/4.24/esri/themes/light/main.css">
<script src="https://js.arcgis.com/4.24/"></script>

</html>