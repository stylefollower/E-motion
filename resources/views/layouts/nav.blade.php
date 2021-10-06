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
    
    

    <!-- Styles START -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{URL::asset('image/logo.png')}}">
    <style>
      <style>

footer {
background: rgb(43, 41, 41);
color: #aaa;
padding-top: 10px;
position: fixed;
bottom: 0;
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

font-size: 15px;
}

footer .copyright span {
color: #0894d1;
}

.jumbotron {
  margin-bottom: 0px;
}

.dashboard {
  min-height: 59vh;
}


.login  {
  height: 86.5vh;
}
.container .jumbotron {
    border-radius: 0 !important;
}

navbar {
  color: linear-gradient(to right, red , yellow) !important;
}

iframe {
  min-height: 80vh;
}

.aboutus {
  min-height: 73vh;
  background-image: linear-gradient( black, #59318d) !important;
}

</style>

<!-- Styles END -->



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
        
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/post')}}">Blog</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('/home')}}">Dashboard</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about')}}">About Us</a>
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
@yield('about')

{{-- footer --}}
<footer>
  <div class="copyright text-center bg-dark">
    Copyright &copy; 2021 <span>e-Motion Blog</span>
  </div>
</footer>