<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'reachus') }}</title>

    
    <link rel="icon" href="{{asset('asset/images/icon.png')}}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Reach us — Psychology and Counseling" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
     <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{asset('asset/css/plugins.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('asset/css/swiper.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('asset/css/coloring.css')}}" rel="stylesheet" type="text/css" >
    <link id="colors" href="{{asset('asset/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" >

    </head>
    <body>

                {{ $slot }}
        <script src="{{asset('asset/js/plugins.js')}}"></script>
    <script src="{{asset('asset/js/designesia.js')}}"></script>
    <script src="{{asset('asset/js/swiper.js')}}"></script>
    <script src="{{asset('asset/js/custom-marquee.js')}}"></script>
    <script src="{{asset('asset/js/custom-swiper-1.js')}}"></script>
    </body>
</html>
