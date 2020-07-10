
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
<?php $__env->startSection('judul_halaman', 'List Photo 48 (Main)'); ?>

<title>List Photo 48 (Main))</title>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:#f0f8ff">
<?php $__env->startSection('konten'); ?>
<div class="text-right">
<h5>Pilih Bahasa/Choose Language : </h5>
<a href="/id/foto">ID</a>
<a href="/en/foto">EN</a>
<a href="/jp/foto">JP</a>
</div>
<p>メンバーの写真を検索 :</p>
<form action="/jp/foto/cari" method="GET">
	<input type="text" name="cari" placeholder="ここでグループ/メンバー名を検索" value="<?php echo e(old('cari')); ?>">
	<input type="submit" value="CARI">
</form>
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <p>必要なメンバーの写真を見つけるには、左側の検索ボックスをご覧ください</p>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <tbody>
                            <?php $__currentLoopData = $foto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><img src="<?php echo e($datas->gambar); ?>" style="width:75x;height:100px;"></td>
                                <td> 題名 : <strong><?php echo e($datas->judul); ?></strong> </br> 
                                タイプ : <?php echo e($datas->jenis); ?></br>
                                メンバー :
                                <?php $__currentLoopData = $datas->member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $members): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <?php echo e($members->nama); ?>,
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </br>
                                グループ : 
                                <?php $__currentLoopData = $datas->grup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($grups->nama); ?>,
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                <td><a href ="<?php echo e($datas->selengkapnya); ?>" class ="btn btn-primary">続きを読む</a></td></tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
ページ : <?php echo e($foto->currentPage()); ?> <br/>
データ量 : <?php echo e($foto->total()); ?> <br/>
ページあたりのデータ : <?php echo e($foto->perPage()); ?> <br/>
 
 
<?php echo e($foto->links()); ?>


<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Serba-Serbi 48 (PHP Normalisasi)\resources\views/foto/fotojp.blade.php ENDPATH**/ ?>