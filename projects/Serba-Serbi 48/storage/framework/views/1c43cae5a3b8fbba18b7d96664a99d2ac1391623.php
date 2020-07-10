
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<body style="background-color:#f0f8ff">
<?php $__env->startSection('konten'); ?>
<div class="card-header text-center">
<a>Untuk Menambah Nama Member Untuk Label Info dan Foto, </a>
<a href="/member/tambah" class="btn btn-link">Klik Disini</a>
</div>

<div class="card-header text-center">
<a>Untuk Hal yang Akan Di Tambah/Edit Lainnya,</a>
<a href="/home" class="btn btn-link">Klik Disini</a>
</div>

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Nama Member Untuk Label Info dan Foto</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Lanjutan</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $members): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                      <tr>
                        <td><?php echo e($members->id); ?></td>
                        <td><?php echo e($members->nama); ?></td>
                        <td>
						<a href="/member/edit/<?php echo e($members->id); ?>">Edit</a>
						|
						<a href="/member/hapus/<?php echo e($members->id); ?>">Hapus</a>

						</td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </tbody>
                  </table>
    </div>
</div>
</div>
</div>
Halaman : <?php echo e($member->currentPage()); ?> <br/>
Jumlah Data : <?php echo e($member->total()); ?> <br/>
Data Per Halaman : <?php echo e($member->perPage()); ?> <br/>
 
 
<?php echo e($member->links()); ?>

 <?php $__env->stopSection(); ?> 
</body>
</html>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Serba-Serbi 48 (PHP Normalisasi)\resources\views/member/membereditid.blade.php ENDPATH**/ ?>