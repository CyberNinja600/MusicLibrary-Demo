

<?php $__env->startSection('content'); ?>

    <?php echo csrf_field(); ?>
    <manage-album :user="<?php echo e(Auth::user()->id); ?>"> </manage-album>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\XamppRepo\htdocs\xampp\MusicLibrary\music-library\resources\views/manage/managealbum.blade.php ENDPATH**/ ?>