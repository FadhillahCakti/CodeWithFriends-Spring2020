
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<body style="background-color:#f0f8ff">
<?php $__env->startSection('konten'); ?>
<h3>Member (Tambah)</h3>
<a href="/memberedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/member/store">
<?php echo e(csrf_field()); ?>

						<div class="form-group">
                            <label>Nama Member</label>
                            <input type="text" name="nama member" class="form-control" placeholder="nama member">

                            <?php if($errors->has('nama')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('nama')); ?>

                                </div>
                            <?php endif; ?>

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

 <?php $__env->stopSection(); ?> 
</body>
</html>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Serba-Serbi 48 (PHP Normalisasi)\resources\views/member/member_tambah.blade.php ENDPATH**/ ?>