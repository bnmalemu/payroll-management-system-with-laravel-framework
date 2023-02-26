<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Basic page needs -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/png" href="{{ asset('public/dist/img/bhulogo.png') }}">
        <title>@yield('title') | BHU FINANCE SYSTEM | </title>
        <!-- fevicon -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('components.header')
        
    </head>
     @yield('content')
</html>