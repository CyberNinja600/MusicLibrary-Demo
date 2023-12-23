<?php $__env->startSection('content'); ?>

<div class="flex flex-col min-h-screen z-10 " id="home">
    

    <div class='flex static sm'>
            <left-nav-bar > </left-nav-bar>
            <home-library :user="<?php echo e(Auth::user()); ?>"></home-library>


    </div>

    <div class="static">
        <music-player> </music-player>
    </div> 

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\XamppRepo\htdocs\xampp\MusicLibrary\music-library\resources\views/home.blade.php ENDPATH**/ ?>