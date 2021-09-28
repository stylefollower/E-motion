<?php $__env->startSection('post'); ?>
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading my-3">Single Post Example</h1>
      <br>
      <img class="img-fluid   my-2" src="<?php echo e(URL::asset('/image/car1.jpg')); ?>" alt="main site image">
      
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      <p>
          
        
        

      </p>
    </div>
  </section>
  <section class="jumbotron text-center">
    <div class="container">
      <h2 class=" jumbotron-heading my-5">Example body text</h2>
      <p class="h2">Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        
        <hr>

        <p>Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

        <hr>

        <img src="<?php echo e(URL:: asset('/image/art1.png')); ?>" alt="" class="img-fluid">

        <br>
        <br>
        <p class="h4 my-3">Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Nullam quis risus eget urna mollis ornare vel eu leo. 
          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
    </div>
  </section>

  <section class="jumbotron">
    <div class="container">
      <H1>COMMENTS</H1>
      <br>
      <br>
      <div class="card border-primary mb-3" style="max-width: 50vw;">
        <div class="card-header">Gonzalo's Comment</div>
        <div class="card-body">
          <p class="card-text">Awesome post man, I totally 100% agree with you, keep up the great work!</p>
        </div>
      </div>
      <br>
      <div class="card border-primary mb-3" style="max-width: 50vw;">
        <div class="card-header">Oli's Comment</div>
        <div class="card-body">
          <p class="card-text">Your post sucks man, jeez...</p>
        </div>
      </div>
      <br>
      <div class="card border-primary mb-3" style="max-width: 50vw;">
        <div class="card-header">Marc's Comment</div>
        <div class="card-body">
          <p class="card-text">What is this nonesense, I came here for some good content and you give me this.</p>
        </div>
      </div>
  </section>
  
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/post.blade.php ENDPATH**/ ?>