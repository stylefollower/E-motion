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
    
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">E-Motion</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
              
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>

                

                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Dropdown</a>                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </li>
                </ul>

                

                     <div class="d-flex" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    @if (Route::has('login'))
                  <li class="nav-item">
                  @auth
                      <a href="{{ url('/home') }}" class="nav-link">Home</a>
                  @else
                  <li class="nav-link">
                      <a href="{{ route('login') }}" class="nav-link">Log in</a>
                    </li>
                      @if (Route::has('register'))
                      <li class="nav-link">
                          <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                      @endif
                  @endauth
                   </li>
               @endif
             
                {{-- <form class="d-flex">
                  <input class="form-control me-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
                 --}}


                    
                </div>
            </div>
            
        </div>

    </body>
</html>
