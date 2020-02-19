<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/steppers.css')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('libraries/fontawesome/css/all.css')}}">
    <style>
  .cover
  {
    height:100vh;
    width:100%;
    background-image:linear-gradient(to right bottom,rgba(0,0,0,.8),rgba(0,0,0,.5)),url('../img/c7.webp');
    background-size:100% 100%;
    color: whitesmoke;
    display:flex;
    justify-content:center;
    align-items:center;
  }
  .text-center h1
  {
    padding-top: 25px;
  }
  @media(max-width:500px)
  {
    .cover
    {
      height:75vh;
    }
  }
  ul.stepper
  {
    margin:0
  }
</style>

</head>
<body>

    @yield('content')


    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/steppers.js')}}"></script>
    <script src="{{asset('js/carrer.js')}}"></script>
</body>
</html>