<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Laravel</title>
        @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body  class="bg-cover bg-no-repeat bg-center bg-fixed bg-[url('E:\XamppRepo\htdocs\xampp\MusicLibrary\music-library\public\img\bg\vibrant-night-sky-with-stars-nebula-galaxy.jpg')] dark:bg-[url('E:\XamppRepo\htdocs\xampp\MusicLibrary\music-library\public\img\bg\photo-1550684376-efcbd6e3f031.jpeg')]">
    <main class="">
        <section class="bg-cover bg-no-repeat bg-center bg-fixed">
            <div class="container h-screen bg-transparent">
                <div class="g-6 flex h-screen flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
                    <div class="w-75 py-10">
                        <div class="block rounded-lg bg-neutral-50 shadow-lg dark:bg-neutral-900">
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
                                        Please login to your account
                                        </h4>
                                        </div>

                                        
                                        <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                            <!-- <p class="py-1 mb-1 bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent font-semibold">Please login to your account</p> -->
                                            <!--email input-->

                                            <div class="bg-neutral-50 dark:bg-neutral-900 relative mb-3 pb-1 pt-1 text-center">
                                                <div class="relative bg-inherit ">
                                                    <input 
                                                        type="text" 
                                                        id="email" 
                                                        name="email" 
                                                        class="peer bg-transparent h-10 w-full rounded-lg text-gray-700 dark:text-neutral-50 placeholder-transparent ring-1 px-2 ring-gray-200 focus:ring-sky-600 dark:focus:ring-cyan-600 focus:outline-none focus:border-rose-600  @error('email') is-invalid @enderror" 
                                                        placeholder="email"
                                                        value="{{ old('email') }}"
                                                        required 
                                                        autocomplete="email"
                                                        autofocus
                                                        />

                                                    <label for="email" 
                                                        class="absolute cursor-text left-0 -top-3 text-sm text-gray-700 dark:text-neutral-50 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-500 dark:peer-placeholder-shown:text-neutral-50  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all"
                                                        >
                                                        {{ __('Email Address') }}
                                                    </label>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <!--Password input-->

                                            <div class="bg-neutral-50 dark:bg-neutral-900 relative mb-4">
                                                <div class="relative bg-inherit ">
                                                    <input 
                                                        type="password" 
                                                        id="password" 
                                                        name="password" 
                                                        class="@error('password') is-invalid @enderror peer bg-transparent h-10 w-full rounded-lg text-gray-700 dark:text-neutral-50 placeholder-transparent ring-1 px-2 ring-gray-200 focus:ring-sky-600 dark:focus:ring-cyan-600 focus:outline-none focus:border-rose-600" 
                                                        placeholder="Password"
                                                        required 
                                                        autocomplete="current-password"
                                                        />

                                                    <label for="password" 
                                                        class="absolute cursor-text left-0 -top-3 text-sm text-gray-700  dark:text-neutral-50 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-500 dark:peer-placeholder-shown:text-gray-50 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all"
                                                        >
                                                        {{ __('Password') }}
                                                    </label>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- remember me -->
                                            <div class="bg-neutral-50 dark:bg-neutral-900 relative mb-2">
                                                <div class="relative bg-inherit">
                                                    <div class="form-check">
                                                        <input class="checked:bg-gray-700 dark:checked:bg-cyan-700 form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label bg-gradient-to-r from-gray-900 to-gray-900  dark:bg-gradient-to-r dark:from-neutral-50 dark:to-neutral-50  bg-clip-text text-transparent " for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Submit button-->
                                            <div class="mb-12 pb-1 pt-1 text-center">
                                            <button
                                                class="active:animate-pulse mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-50 shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-cyan-600 dark:to-cyan-600"
                                                type="submit"
                                                data-te-ripple-init
                                                data-te-ripple-color="light">
                                                Log in
                                            </button>

                                            <!--Forgot password link-->
                                            @if (Route::has('password.request'))

                                                <a href="{{ route('password.request') }}" class=" active:animate-bounce hover:animate-pulse dark:text-neutral-50 bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-neutral-50 dark:to-neutral-50 bg-clip-text text-transparent">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                                
                                            </div>

                                            <!--Register button-->
                                            <div class="flex items-center justify-between pb-6">
                                                <p class="flex my-1 px-1 text-gray-500 dark:text-neutral-50">Don't have an account? </p>
                                                <a
                                                type="button"
                                                
                                                class="mr-15 wrap inline-block w-half  rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-50 dark:text-neutral-50 shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-cyan-600 dark:to-cyan-600"
                                                style="text-decoration:none"
                                                data-te-ripple-init
                                                data-te-ripple-color="light"
                                                href= "{{ route('register') }}"
                                                >
                                                Register
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Right column container with background and description-->
                                <div
                                class="flex text-justify items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-cyan-900 dark:to-cyan-600 dark:opacity-100">
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
    </main>

</html>

