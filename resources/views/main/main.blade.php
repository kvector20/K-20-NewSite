@extends('layouts.main')

@section('content')
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li>
            <div class="logo-wrapper waves-light">
                <a href="#"><img src="img/logo.jpg" class="img-fluid flex-center"></a>
            </div>
            </li>
            <!--/. Logo -->
            <!--Search Form-->
            <li>
            <form class="search-form" role="search">
                <div class="form-group md-form mt-0 pt-1 waves-light">
                <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
            <ul class="collapsible collapsible-accordion">
                <li><a class="collapsible-header waves-effect arrow-r">About Us</a>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r">Events</a>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r">
                    Projects<i class="fas fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                    <li><a href="#" class="waves-effect">Academic</a>
                    </li>
                    <li><a href="#" class="waves-effect">Juniors</a>
                    </li>
                    <li><a href="#" class="waves-effect">Event</a>
                    </li>
                    <li><a href="#" class="waves-effect">Magazine</a>
                    </li>
                    </ul>
                </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r">Magazine<i class="fas fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                    <li><a href="#" class="waves-effect">K'18</a>
                    </li>
                    <li><a href="#" class="waves-effect">K'19</a>
                    </li>
                    </ul>
                </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r">Contact</a>
                </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav navbar-dark bg-dark">
        <!-- SideNav slide-out button -->

        <div class="container">
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="nav-logo mr-auto">
            <li class="nav-link">
            <a class="" href="#">
                <span class="logo" style="color:red;font-size: 20px">K</span>
                <span class="logo" style="color:white;font-size: 20px;">-vector</span> 
                <small class="logo">Foundation</small>
            </a>
        </li>
        </div>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
            <a class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">Event</a>
            </li>    
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Projects
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Magazine
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </li>

                <li class="nav-link">
                    <a href="$">Contact Us</a>
                </li>
        </ul>
    </div>
        </nav>
        <!-- /.Navbar -->



    </header>
<div class="container-fluid grid">

<div class="container d-flex h-100">
    <div class="row align-self-center">
        <div class="col-lg-6">
            <h2 class="white-text">
            k vector is a student activity in faculty of engineering Cairo University 
k vector was founded in 2012
            </h2>
        </div>
    </div>

</div>
    <div class='wave-2'>
        <!--
        <img src="{{asset('img/wave.png')}}" alt="">
        -->
    </div>
</div>


<div class="container mt-3 pt-3">
    <div class="row mt-3">
        <div class="col-lg-6 text-center mt-3 pt-3">
            <img src="{{asset('img/school.svg')}}" width='50%' style='opacity:.8'>
        </div>

        <div class="row col-lg-6 mt-3 pt-3">
        <div class="col-lg-12">
            <h3>our vision</h3>
            <p>
            we are a Non-profit organization aim to build generation can: <br>
            ● Build first cars’ factory in Egypt which manufactures cars from A to Z. <br>
            ● Make a change in R&D of artificial limbs and all medical devices. <br>
            ● Build the first skyscraper in Egypt
            </p>
        </div>
        <div class="col-lg-12">
            <h3>our mission</h3>
            <p>
            Build a generation that makes industrial revolution through providing the coming
            generation with technicalities and skills needed
            </p>
        </div>

        </div>


    </div>
</div>

@stop