<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Basic page needs -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <!-- fevicon -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('public/dist/img/bhulogo.png') }}">
        @include('components.header')
        
    </head>
    <body class="cat__pages__login">
        <!-- START -->
        <div class="cat__pages__login cat__pages__login--fullscreen" style="background-image: url(public/bna/bini/1.jpg)">
            <div class="cat__pages__login__block">
            @yield('content')
            </div>
        </div>
    </body>
	 
</html>