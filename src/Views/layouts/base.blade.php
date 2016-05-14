<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="A web application for the Gaming community Lone Star Warriors">
    <meta name="author" content="Different community tools and gaming apps">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>Lone Star WebApp - @yield('title')</title>

    <!-- Fonts -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @yield('headscript') {{-- This is hear for any body padding needed on future pages, if it is not needed it will not do anything --}}
</head>
<!-- NAVBAR
================================================== -->
<body>
<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Lone Star Warriors</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Voice Comms</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forums</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Games</li>
                                <li><a href="#">Eve Online</a></li>
                                <li><a href="#">Firefall</a></li>
                            </ul>
                        </li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    User Menu<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/register') }}">Register</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    User Menu<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>{{ link_to_profile() }}</li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>

<div class="container">
    @include('flash') {{-- The flash file handles the error display --}}
</div>

@yield('content') {{-- All remaining body content is displayed through the content tag --}}

{{ Html::script('//code.jquery.com/jquery-1.12.0.min.js') }}
{{ Html::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') }}
</body>
</html>
