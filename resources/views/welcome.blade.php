<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/app.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>


    <h1>We Coming Soon</h1>
    <button class="btn btn-danger"> <a href="route('form')"></a> Join Us</button>
    <!--
        <div id="example">

        </div>
        -->
        <script src="../js/app.js"></script>
    </body>
</html>
