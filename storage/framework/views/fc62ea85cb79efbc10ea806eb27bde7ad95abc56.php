<?php $__env->startSection('content'); ?>

<section class="jumbotron text-center">
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="container">
                        <h1>NAME: </h1> <p>Gonzalo</p>
                        <br>
                        <h1>EMAIL</h1> <p>g@g.g</p>
                        <br>
                        <h1>PASSWORD</h1> <p>lul</p>
                        <br>
                        <h1>MORE INFO</h1> <p>admin</p>
                    </div>
                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
    </div>
    <br>
    <section>
        
    </section>
</div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>