<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    
    

    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      <style>

footer {
background: rgb(43, 41, 41);
color: #aaa;
padding-top: 10px;
}

footer a {
color: #aaa;
}

footer a:hover {
color: #fff;
}

footer h3 {
color: #0894d1;
letter-spacing: 1px;
margin: 30px 0 20px;
}

footer .three-column {
overflow: hidden;
}

footer .three-column li{
width: 33.3333%;
float: left;
padding: 5px 0;
}

footer .socila-list {
overflow: hidden;
margin: 20px 0 10px;
}

footer .socila-list li {
float: left;
margin-right: 3px;
opacity: 0.7;
overflow: hidden;
border-radius: 50%;
transition: all 0.3s ease-in-out;
}

footer .socila-list li:hover {
opacity: 1;
}

footer .img-thumbnail {
background: rgba(0, 0, 0, 0.2);
border: 1px solid #444;
margin-bottom: 5px;
}

footer .copyright {
padding: 15px 0;
background: #333;
margin-top: 20px;
font-size: 15px;
}

footer .copyright span {
color: #0894d1;
}

.jumbotron {
  margin-bottom: 0px;
}
</style>
    </head>
<div id="app">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container-fluid">
          
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{URL::asset('/image/logo.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
             {{ config('app.name', 'E-Motion') }}
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
       <span class="navbar-toggler-icon"></span>
       </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Categories</a>                    <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Tesla</a>
            <a class="dropdown-item" href="#">Automobiles</a>
            <a class="dropdown-item" href="#">Motorcycles</a>
            <a class="dropdown-item" href="#">News</a>
          </div>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/post')}}">Post</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('/home')}}">Dashboard</a>
        </li>
      </ul>
      
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
      @if (Route::has('login'))
      <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @endif
      
      @if (Route::has('register'))
      <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
      @endif
      @else
      <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      {{ Auth::user()->name }}
      </a>
      
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
      </a>
      
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
      </form>
      </div>
      </li>
      @endguest
      </ul>
      </div>
      </div>
  </div>
  
</nav>

{{-- main --}}

@yield('welcome')
@yield('post')
@yield('content')

{{-- footer --}}

<footer class="bg-secondary">
  <div class="container ">
    <div class="row">
      
      <div class="col-lg-4 col-md-6">
        <h3>Site Map</h3>
        <ul class="list-unstyled three-column">
          <li>Home</li>
          <li>Services</li>
          <li>About</li>
          <li>Code</li>
          <li>Design</li>
          <li>Host</li>
          <li>Contact</li>
          <li>Company</li>
        </ul>
        <ul class="list-unstyled socila-list">
          <li><img src="http://placehold.it/48x48" alt="" /></li>
          <li><img src="http://placehold.it/48x48" alt="" /></li>
          <li><img src="http://placehold.it/48x48" alt="" /></li>
          <li><img src="http://placehold.it/48x48" alt="" /></li>
          <li><img src="http://placehold.it/48x48" alt="" /></li>
          <li><img src="http://placehold.it/48x48" alt="" /></li>
        </ul>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <h3>latest Articles</h3>
        <div class="media">
          <a href="#" class="pull-left">
            <img src="http://placehold.it/64x64" alt="" class="media-object" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">Programming</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
        
        <div class="media">
          <a href="#" class="pull-left">
            <img src="http://placehold.it/64x64" alt="" class="media-object" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">Coding</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>

        
      </div>
      
      <div class="col-lg-4">
        <h3>Our Work</h3>
        <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
        <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
      </div>
      
    </div>
  </div>
  <div class="copyright text-center">
    Copyright &copy; 2017 <span>Your Template Name</span>
  </div>
</footer>