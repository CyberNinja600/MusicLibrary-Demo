<?php $__env->startSection('content'); ?>
    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <div id="upload" class="overflow-y-auto scroll-container custom-scrollbar dark:darkcustom-scrollbar bg-neutral-900 flex static ">
        <upload-song :user="<?php echo e(Auth::user()); ?> " class=""> </upload-song>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\XamppRepo\htdocs\xampp\MusicLibrary\music-library\resources\views/manage/upload.blade.php ENDPATH**/ ?>