@extends('layouts.users')
@section('content')
<div class="container">
    <h1 class="display-4 text-center">Welcome To <span style="display:inline-block"><img width="65px;" src="{{asset('img/logo.jpg')}}" alt=""></span> Magazine</h1>
    <h5 class="text-center"> Enrich your knowledge and <span> </span> enjoy the beauty of words</span>
    </h5>
    <hr>
</div>

<div class="container">
    <div class="row mt-3">
        <div class="col-lg-3 mt-3">
            <div class="list-group">
                <a href="#!" class="list-group-item list-group-item-action disabled active red">
                    Topics
                </a>
                @foreach($magazines as $magazine)

                <a href="{{route('topic',['id'=>$magazine->id])}}" class="list-group-item list-group-item-action">{{$magazine->title}}</a>
                @endforeach
            </div>
        </div>

<div class="container">
    <!-- Card -->
    <div class="card card-cascade wider reverse mt-3">

    <!-- Card image -->
        <div class="view view-cascade overlay">
        <img class="card-img-top" src="{{$topic->img}}" alt="Card image cap">
        <a href="#!">
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">

        <!-- Title -->
        <h4 class="card-title"><strong>{{$topic->title}}</strong></h4>
        <!-- Subtitle -->
        <h6 class="font-weight-bold indigo-text py-2">{{$topic->author}}</h6>
        <!-- Text -->
        <p class="card-text">
            {!! $topic->body !!}
        </p>

        </div>

        </div>
        <!-- Card -->
    </div>
@endsection