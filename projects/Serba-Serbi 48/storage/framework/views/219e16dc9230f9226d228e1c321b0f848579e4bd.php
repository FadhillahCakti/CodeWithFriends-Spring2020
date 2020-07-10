
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<body style="background-color:#f0f8ff">
<?php $__env->startSection('konten'); ?>
<div class="text-right">
<h5><?php echo app('translator')->get('corona.pilihbahasa'); ?> : </h5>
<a href="/id/corona">ID</a>
<a href="/en/corona">EN</a>
<a href="/jp/corona">JP</a>
</div>
<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading"><?php echo app('translator')->get('corona.judul'); ?></h1>
          <p class="lead text-muted"><?php echo app('translator')->get('corona.penjelasan'); ?></p>
            <a href="/id/corona/indonesia" class="btn btn-danger my-1"><?php echo app('translator')->get('corona.tempat.1'); ?></a>
            <a href="/id/corona/provinsi" class="btn btn-primary my-1"><?php echo app('translator')->get('corona.tempat.2'); ?></a>
            <a href="/id/corona/dunia" class="btn btn-warning"><?php echo app('translator')->get('corona.tempat.3'); ?></a>
          </p>
        </div>
      </section>
<?php $__env->stopSection(); ?> 
</body>
</html>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Serba-Serbi 48 (PHP Normalisasi)\resources\views/corona/corona.blade.php ENDPATH**/ ?>