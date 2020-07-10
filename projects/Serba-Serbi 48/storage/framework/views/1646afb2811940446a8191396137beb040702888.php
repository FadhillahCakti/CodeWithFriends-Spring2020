
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <?php $__env->startSection('judul_halaman', 'Info Covid-19 di Provinsi'); ?>

<title>Info Covid-19 di Provinsi di Indonesia</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body style="background-color:#f0f8ff">
<?php $__env->startSection('konten'); ?>
<div class="text-right">
<h5>Choose Language/言語を選択 : </h5>
<a href="/id/corona/provinsi">ID</a>
<a href="/en/corona/provinsi">EN</a>
<a href="/jp/corona/provinsi">JP</a>
</div>
<br>
<p class = "text-center">Untuk Informasi Detil dari Beberapa Provinsi, <a href="/id/corona/detilprovinsi">Klik Disini</a></p>
<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 0;
                        ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                        <?php
                            $no++;
                        ?>
                      <tr>
                        <th scope="row"><?php echo e($no); ?></th>
                        <td><?php echo e($datas['attributes']['Provinsi']); ?></td>
                        <td><?php echo e($datas['attributes']['Kasus_Posi']); ?></td>
                        <td><?php echo e($datas['attributes']['Kasus_Semb']); ?></td>
                        <td><?php echo e($datas['attributes']['Kasus_Meni']); ?></td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </tbody>
                  </table>
    </div>
<nav class="navbar navbar-expand-md navbar-white" style="background-color:red">
<div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link btn btn-danger" href="/id/corona/indonesia">Lihat di Indonesia?</a>
          </li>
        </ul>
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
            <a class="nav-link btn btn-warning" href="/id/corona/dunia">Lihat di Dunia?</a>
          </li>
        </ul>
</div>
</nav>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Serba-Serbi 48 (PHP Normalisasi)\resources\views/corona/provinsiid.blade.php ENDPATH**/ ?>