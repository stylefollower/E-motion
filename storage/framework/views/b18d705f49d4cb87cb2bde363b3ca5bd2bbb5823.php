<?php $__env->startSection('welcome'); ?>
    


<main role="main">
  

  <section class="jumbotron text-center aboutus">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo e(URL::asset('/image/hero_3.jpg')); ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo e(URL::asset('/image/hero_2.jpg')); ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo e(URL::asset('/image/hero_1.jpg')); ?>" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      
      <h1 class="jumbotron-heading my-3">Meet the new Mercedes VISION AVTR</h1>
      <p class="lead text-muted">This new concept by Mercedes defies all boundaries of what an electric car should be, or look like. Click the button read more.</p>
      <p>
          
        <a href="<?php echo e(url('/post')); ?>" class="btn btn-primary mb-3 flex-fill">Read More</a>

      </p>
    </div>
    
  </section>

  


  <div class="album py-5 bg-black">
    <div class="container">

      <div class="row">
        
        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="<?php echo e(URL::asset('/image/art1.png')); ?>" alt="Card image cap">
            <div class="card-body">
              <p class="card-title"><?php echo e($message->title); ?></p>
              <p class="card-text"><?php echo e($message->content); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read More</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        

</main>

<?php $__env->stopSection(); ?>  


<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>