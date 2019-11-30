<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/app.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>K-Vector Foundation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
        <!-- Styles -->
    </head>
    <body style='height:100vh'>
        <div id="example" class='h-100'>

        </div>
        <script src="../js/app.js"></script>
        <script src="{{asset('js/home.js')}}"></script>
    </body>
</html>
