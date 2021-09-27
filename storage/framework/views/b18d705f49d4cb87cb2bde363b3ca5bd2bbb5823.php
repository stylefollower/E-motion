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
                    <?php if(Route::has('login')): ?>
                  <li class="nav-item">
                  <?php if(auth()->guard()->check()): ?>
                      <a href="<?php echo e(url('/home')); ?>" class="nav-link">Home</a>
                  <?php else: ?>
                  <li class="nav-link">
                      <a href="<?php echo e(route('login')); ?>" class="nav-link">Log in</a>
                    </li>
                      <?php if(Route::has('register')): ?>
                      <li class="nav-link">
                          <a href="<?php echo e(route('register')); ?>" class="nav-link">Register</a>
                        </li>
                      <?php endif; ?>
                  <?php endif; ?>
                   </li>
               <?php endif; ?>
             
                


                    
                </div>
            </div>
            
        </div>

    </body>
</html>
<?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>