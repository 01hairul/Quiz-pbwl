

<?php $__env->startSection('content'); ?>

<h2>Tambah Data Pengguna</h2>

<form action="<?php echo e(url('users')); ?>" method="post">
    <?php echo csrf_field(); ?>


    <div class="mb-3">
        <label for="">ID</label>
        <input type="text" name="user_id" id="" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">E-MAIL</label>
        <input type="text" name="user_email" id="" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">PASSWORD</label>
        <input type="text" name="user_password" id="" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="user_nama" id="" class="form-control">
    </div>

    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
        
    </div>


</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-laravel-hairulamri\resources\views/users/create.blade.php ENDPATH**/ ?>