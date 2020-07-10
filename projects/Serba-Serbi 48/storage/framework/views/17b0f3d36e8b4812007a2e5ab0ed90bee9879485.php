
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
<?php $__env->startSection('judul_halaman', 'Info Covid-19 di Indonesia'); ?>

<title>Info Covid-19 di Indonesia</title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body style="background-color:#f0f8ff">
<?php $__env->startSection('konten'); ?>
<div class="text-right">
<h5>Pilih Bahasa/Choose Language : </h5>
<a href="/id/corona/indonesia">ID</a>
<a href="/en/corona/indonesia">EN</a>
<a href="/jp/corona/indonesia">JP</a>
</div>
<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">名前</th>
                        <th scope="col">総件数</th>
                        <th scope="col">総回収</th>
                        <th scope="col">総死亡</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                      <tr>
                        <td><?php echo e($datas['name']); ?></td>
                        <td><?php echo e($datas['positif']); ?></td>
                        <td><?php echo e($datas['sembuh']); ?></td>
                        <td><?php echo e($datas['meninggal']); ?></td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </tbody>
                  </table>
    </div>
    <footer class="footer">
<nav class="navbar navbar-expand-md navbar-white" style="background-color:red">            <div class="container-fluid">
                <div class="nav navbar-nav navbar-left">
                  <a class="nav-link btn btn-primary" href="/id/corona/provinsi">Lihat Provinsi di Indonesia?</a>
                </div>
                <div class="nav navbar-nav navbar-right">
                  <a class="nav-link btn btn-warning" href="/id/corona/dunia">Lihat di Dunia?</a>
                </div>
            </div>         
        </nav>
    </footer>

<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Serba-Serbi 48 (PHP Normalisasi)\resources\views/corona/indonesiajp.blade.php ENDPATH**/ ?>