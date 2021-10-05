<?php $__env->startSection('welcome'); ?>
    


<main role="main">

  <img id="imageMain" class="img-fluid" src="<?php echo e(URL::asset('/image/hero_1.jpg')); ?>" alt="main site image">
  <section class="jumbotron text-center bg-light">
    <div class="container">
      
      <h1 class="jumbotron-heading my-3">Post Example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      <p>
          
        <a href="<?php echo e(url('/post')); ?>" class="btn btn-primary mb-3 flex-fill">Read More (Link to single post page)</a>

      </p>
    </div>
    
  </section>

  


  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="<?php echo e(URL::asset('/image/art1.png')); ?>" alt="Card image cap">
            <div class="card-body">
              <p class="card-title">One post</p>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
        
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="<?php echo e(URL::asset('/image/art2.png')); ?>" alt="Card image cap">
            <div class="card-body">
              <p class="card-title">One post</p>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="<?php echo e(URL::asset('/image/art3.png')); ?>" alt="Card image cap">
            <div class="card-body">
              <p class="card-title">One post</p>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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

        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="<?php echo e(URL::asset('/image/art1.png')); ?>" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="<?php echo e(URL::asset('/image/art2.png')); ?>" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="<?php echo e(URL::asset('/image/art3.png')); ?>" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<?php $__env->stopSection(); ?>  


<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>