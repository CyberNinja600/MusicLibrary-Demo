<html>
    <head>
        <meta name ="viewport" content="width=device-width, height=device-hight, initial-scale=1">
        <meta charset="utf-8">
        <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss']); ?>

        <style>
            <?php echo Vite::content('resources/css/app.css'); ?>

        </style>
        <script type='module'>
            <?php echo Vite::content('resources/js/app.js'); ?>

        </script>
    </head>
    <body  class="bg-cover bg-no-repeat bg-center bg-fixed bg-[url('E:\XamppRepo\htdocs\xampp\MusicLibrary\music-library\public\img\bg\vibrant-night-sky-with-stars-nebula-galaxy.jpg')] dark:bg-[url('E:\XamppRepo\htdocs\xampp\MusicLibrary\music-library\public\img\bg\photo-1550684376-efcbd6e3f031.jpeg')]">
        <section class="bg-cover bg-no-repeat bg-center bg-fixed">
            <div class="container h-screen px-10 bg-opacity-100">
                <div class=" flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
                    <div class="w-75 py-10">
                        <div class="block rounded-lg bg-neutral-50 shadow-lg dark:bg-neutral-900 ">
                            <div class="g-0 lg:flex lg:flex-wrap">
                            <!-- Left column container-->
                                <div class="px-4 md:px-0 lg:w-6/12">
                                    <div class="md:mx-6 md:p-12">
                                        <!--Logo-->
                                        <div class="text-left pb-2 ">
                                        <img
                                            class="mx-auto w-auto py-5 px-2"
                                            src="img/logo/Music_library_logo.png"
                                            alt="logo" 
                                        />
                                        <h4 class=" pb-0 bg-gradient-to-r from-gray-800 to-gray-600 dark:bg-gradient-to-r dark:from-neutral-50 dark:to-neutral-50 bg-clip-text text-transparent font-semibold text-sm">
                                        Create a new account
                                        </h4>
                                        </div>

                                        <form method="POST" action="<?php echo e(route('register')); ?>">
                                        <?php echo csrf_field(); ?>
                                            <!-- <p class="mb-4 bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent font-semibold">
                                                Create a new account</p> -->
                                            <!--name input-->

                                            <div class="bg-neutral-50 dark:bg-neutral-900 relative mb-4">
                                                <div class="relative bg-inherit ">
                                                    <input 
                                                        type="text" 
                                                        id="name" 
                                                        name="name" 
                                                        class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> peer bg-transparent h-10 w-full rounded-lg text-gray-700 dark:text-neutral-50 placeholder-transparent ring-1 px-2 ring-gray-200 dark:focus:ring-cyan-600 focus:ring-sky-600 focus:outline-none focus:border-rose-600" 
                                                        placeholder="name"
                                                        value="<?php echo e(old('name')); ?>"
                                                        required
                                                        autocomplete="name"
                                                        autofocus
                                                        />

                                                    <label for="name" 
                                                        class="absolute cursor-text left-0 -top-3 text-sm text-gray-700 dark:text-neutral-50 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-500 dark:peer-placeholder-shown:text-neutral-50  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all"
                                                        name = "name"
                                                        >
                                                        <?php echo e(__('Name')); ?>

                                                    </label>
                                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>


                                            <!--email input-->

                                            <div class="bg-neutral-50 dark:bg-neutral-900 relative mb-4">
                                                <div class="relative bg-inherit ">
                                                    <input 
                                                        type="email" 
                                                        id="email" 
                                                        name="email" 
                                                        class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> peer bg-transparent h-10 w-full rounded-lg text-gray-700 dark:text-neutral-50 placeholder-transparent ring-1 px-2 ring-gray-200 dark:focus:ring-cyan-600 focus:ring-sky-600 focus:outline-none focus:border-rose-600" 
                                                        placeholder="email"
                                                        value="<?php echo e(old('email')); ?>" 
                                                        required 
                                                        autocomplete="email"
                                                        />

                                                    <label for="email" 
                                                        class="absolute cursor-text left-0 -top-3 text-sm text-gray-700 dark:text-neutral-50 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-500 dark:peer-placeholder-shown:text-neutral-50  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all"
                                                        >
                                                        <?php echo e(__('Email Address')); ?>

                                                    </label>

                                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            
                                            <!--password -->
                                            <div class="bg-neutral-50 dark:bg-neutral-900 relative mb-4">
                                                <div class="relative bg-inherit ">
                                                    <input 
                                                        type="password" 
                                                        id="password" 
                                                        name="password" 
                                                        class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> peer bg-transparent h-10 w-full rounded-lg text-gray-700 dark:text-neutral-50 placeholder-transparent ring-1 px-2 ring-gray-200 dark:focus:ring-cyan-600 focus:ring-sky-600 focus:outline-none focus:border-rose-600" 
                                                        placeholder="Password"
                                                        required 
                                                        autocomplete="new-password"
                                                        />

                                                    <label for="password" 
                                                        class="absolute cursor-text left-0 -top-3 text-sm text-gray-700 dark:text-neutral-50 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-500 dark:peer-placeholder-shown:text-neutral-50  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all"
                                                        >
                                                        <?php echo e(__('Password')); ?>

                                                    </label>
                                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <!--confirm password -->
                                            <div class="bg-neutral-50 dark:bg-neutral-900 relative mb-4">
                                                <div class="relative bg-inherit ">
                                                    <input 
                                                        type="password" 
                                                        id="password-confirm" 
                                                        name="password_confirmation" 
                                                        class="peer bg-transparent h-10 w-full rounded-lg text-gray-700  dark:text-neutral-50 placeholder-transparent ring-1 px-2 ring-gray-200 focus:ring-sky-600 dark:focus:ring-cyan-600 focus:outline-none focus:border-rose-600" 
                                                        placeholder="Confirm password"
                                                        required 
                                                        autocomplete="new-password"
                                                        />

                                                    <label for="password-confirm" 
                                                        class="absolute cursor-text left-0 -top-3 text-sm text-gray-700 dark:text-neutral-50 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-500 dark:peer-placeholder-shown:text-neutral-50  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all"
                                                        >
                                                        <?php echo e(__('Confirm Password')); ?>

                                                    </label>
                                                </div>
                                            </div>
                                            
                                            <!--Register button-->
                                            <div class="mb-12 pb-1 pt-1 text-center">
                                                <button
                                                    class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-cyan-600 dark:to-cyan-600"
                                                    type="submit"
                                                    data-te-ripple-init
                                                    data-te-ripple-color="light">
                                                    <?php echo e(__('Register')); ?>

                                                </button>
                                            </div>

                                            <!--Login button-->
                                            <div class="flex items-center justify-between pb-6">
                                                <p class="flex text-gray-500 dark:text-neutral-50">Already have an account?</p>
                                                <a
                                                    type="button"
                                                    class="mr-15 wrap inline-block w-half rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-cyan-600 dark:to-cyan-600"
                                                    style="text-decoration:none"
                                                    data-te-ripple-init
                                                    data-te-ripple-color="light"
                                                    href= "<?php echo e(route('login')); ?>"
                                                    >
                                                    Log in
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Right column container with background and description-->
                                <div
                                class="flex text-justify items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-cyan-900 dark:to-cyan-600">
                                    <div class="px-4 py-6 text-white md:mx-6 md:p-12 ">
                                        <h4 class="mb-6 text-xl font-semibold">
                                        WELCOME TO MUSIC LIBRARY
                                        </h4>
                                        <p class="flex-wrap ">
                                            <h4 class="text-2xl">Discover the World of Sound</h4>
                                            Music Library, your gateway to a world of music and creativity. We're more than just a platform. We're a community that celebrates the art of music. 
                                            Whether you're an aspiring artist looking to share your melodies or a passionate music enthusiast seeking new tunes, you've come to the right place.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

<?php /**PATH E:\XamppRepo\htdocs\xampp\MusicLibrary\music-library\resources\views/auth/register.blade.php ENDPATH**/ ?>