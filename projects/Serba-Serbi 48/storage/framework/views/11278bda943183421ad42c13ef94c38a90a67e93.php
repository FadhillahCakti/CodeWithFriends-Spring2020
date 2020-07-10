
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<body style="background-color:#f0f8ff">
<?php $__env->startSection('konten'); ?>


<h2 class="jumbotron-heading text-center">Tambah Info-Tag</h2>
<form method="post" action="/infotag/store">
<?php echo e(csrf_field()); ?>

						<div class="form-group">
                            <label>Id Info Kesehatan</label>
                            <input type="text" name="info_id" class="form-control" placeholder="info_id">

                            <?php if($errors->has('info_id')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('info_id')); ?>

                                </div>
                            <?php endif; ?>

                        </div>

                        <b>Untuk Isi Id Info Kesehatan, <a href="/infoedit"> Klik Disini</a></b>

                        <div class="form-group">
                            <label>Id Tag</label>
                            <input type="text" name="tag_id" class="form-control" placeholder="tag_id">

                             <?php if($errors->has('tag_id')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('tag_id')); ?>

                                </div>
                            <?php endif; ?>

                        </div>

                        <b>Untuk Isi Id Tag, <a href="/tagedit"> Klik Disini</a></b>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

</form>

<?php $__env->stopSection(); ?> 
</body>
</html>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Serba-Serbi 48 (PHP Normalisasi)\resources\views/grupinfo/grupinfo_tambah.blade.php ENDPATH**/ ?>