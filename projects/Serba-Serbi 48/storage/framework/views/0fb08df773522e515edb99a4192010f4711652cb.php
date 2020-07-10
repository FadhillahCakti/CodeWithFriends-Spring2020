
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>Tentang</title>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:#f0f8ff">

<?php $__env->startSection('konten'); ?>


<div class="text-right">
<h5><?php echo app('translator')->get('tentang.pilihbahasa'); ?> : </h5>
<a href="/id/tentang">ID</a>
<a href="/en/tentang">EN</a>
<a href="/jp/tentang">JP</a>
</div>

<h2 class="text-center"><?php echo app('translator')->get('tentang.welcome'); ?></h2>

<div class="container">
<p><?php echo app('translator')->get('tentang.paragraf.1'); ?></p></br>
<p><?php echo app('translator')->get('tentang.paragraf.2'); ?></p></br>
<p><?php echo app('translator')->get('tentang.paragraf.3'); ?></p></br>
<p><?php echo app('translator')->get('tentang.paragraf.4'); ?></p></br>
<p><?php echo app('translator')->get('tentang.paragraf.5'); ?></p></br>
<p><?php echo app('translator')->get('tentang.paragraf.6'); ?></p></br>
</div>

<?php $__env->stopSection(); ?>

</body>
</html>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Serba-Serbi 48 (PHP Normalisasi)\resources\views/tentang.blade.php ENDPATH**/ ?>