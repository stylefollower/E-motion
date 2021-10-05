<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    
    

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    </head>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
             <?php echo e(config('app.name', 'E-Motion')); ?>

          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
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
          <a class="nav-link" href="<?php echo e(url('/post')); ?>">Post</a>
        </li>
      </ul>
      
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      <?php if(auth()->guard()->guest()): ?>
      <?php if(Route::has('login')): ?>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
      </li>
      <?php endif; ?>
      
      <?php if(Route::has('register')): ?>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
      </li>
      <?php endif; ?>
      <?php else: ?>
      <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      <?php echo e(Auth::user()->name); ?>

      </a>
      
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      <?php echo e(__('Logout')); ?>

      </a>
      
      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
      <?php echo csrf_field(); ?>
      </form>
      </div>
      </li>
      <?php endif; ?>
      </ul>
      </div>
      </div>
    </div>
      </nav><?php /**PATH /var/www/html/resources/views/layouts/header.blade.php ENDPATH**/ ?>