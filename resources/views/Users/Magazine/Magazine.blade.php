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

        @foreach($magazines as $magazine)
        <div class="col-lg-4 mt-3">
            <!-- Card -->
            <div class="card">

            <!-- Card image -->
            <div class="view overlay">
                <img class="card-img-top" src="{{$magazine->img}}" alt="Card image cap">
                <a href="{{route('topic',['id'=>$magazine->id])}}">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!-- Button -->
            <a href="{{route('topic',['id'=>$magazine->id])}}" class="btn-floating btn-action ml-auto mr-4 lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">{{$magazine->title}}</h4>
                <hr>
                <!-- Text -->
                <p class="card-text">{!! str_limit($magazine->body, 45) !!}</p>
            </div>

            <!-- Card footer -->
            <div class="rounded-bottom lighten-3 text-center pt-3">
                <ul class="list-unstyled list-inline font-small">
                <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>{{$magazine->created_at->format('Y d M')}}</li>
                </ul>
            </div>

            </div>
            <!-- Card -->
        </div>
        @endforeach

    </div>
</div>

@endsection