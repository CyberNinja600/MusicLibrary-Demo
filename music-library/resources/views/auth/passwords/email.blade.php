<html>
    <head>
        <meta name ="viewport" content="width=device-width, height=device-hight, initial-scale=1">
        <meta charset="utf-8">
        @vite('resources/css/app.css')
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    <body  class="bg-cover bg-no-repeat bg-center bg-fixed bg-[url('E:\XamppRepo\htdocs\xampp\MusicLibrary\music-library\public\img\bg\vibrant-night-sky-with-stars-nebula-galaxy.jpg')] dark:bg-[url('E:\XamppRepo\htdocs\xampp\MusicLibrary\music-library\public\img\bg\photo-1550684376-efcbd6e3f031.jpeg')]">

        <main class="">
            <section class="bg-cover bg-no-repeat bg-center bg-fixed ">
                <div class="container h-screen p-10 bg-transparent ">
                    <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200 ">
                        <div class="w-2/3 px-auto mx-auto rounded-b-lg ">


                                <!--- top -->

                                <div class="flex text-justify items-center rounded-t-lg bg-gradient-to-r from-gray-900 to-gray-700  dark:bg-gradient-to-r dark:from-cyan-600 dark:to-cyan-600 dark:opacity-100">
                                    <div class="px-4 py-3 text-neutral-50 dark:text-neutral-100 md:mx-6 md:p-12 lg:block">
                                        <div class="text-xl ">
                                        Forgot Password?
                                        </div>
                                    </div>
                                </div>  


                                    <!-- left --->
                                <div class="block rounded-b-lg dark:bg-neutral-900 dark:opacity-100 bg-neutral-50 shadow-lg ">
                                    <div class="py-4  ">
                                        <div class="md:mx-2 md:p-12 flex-auto px-10 ">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('password.email') }}">
                                                @csrf
                                                <!--email input-->
                                                <div class="bg-neutral-50 dark:bg-neutral-900 relative mb-4">
                                                    <div class="relative bg-inherit ">
                                                        <input 
                                                            type="email" 
                                                            id="email" 
                                                            name="email" 
                                                            class="@error('email') is-invalid @enderror peer bg-transparent h-10 w-full rounded-lg text-gray-700 dark:text-gray-300 placeholder-transparent ring-1 px-2 ring-gray-200 dark:ring-neutral-200 focus:ring-sky-600 dark:focus:ring-cyan-600  focus:outline-none focus:border-rose-600 dark:bg-neutral-900 " 
                                                            placeholder="email"
                                                            value="{{ old('email') }}" 
                                                            required 
                                                            autocomplete="email"
                                                            />

                                                        <label for="email" 
                                                            class="absolute cursor-text left-0 -top-3 text-sm dark:text-gray-100 text-gray-700 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-500 dark:peer-placeholder-shown:text-gray-100  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-700  peer-focus:text-sm transition-all dark:bg-neutral-900 "
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
                                                    
                                                
                                                <!--Register button-->
                                                <div class="mb-2  text-center ">
                                                    <button
                                                        class="mb-3 inline-block w-full rounded px-6 py-1 text-xs font-medium uppercase leading-normal text-neutral-50 dark:text-neutral-100 shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] bg-gradient-to-r from-gray-900 to-gray-700  dark:bg-gradient-to-r dark:from-cyan-600 dark:to-cyan-600 dark:border-neutral-100 "
                                                        type="submit"
                                                        data-te-ripple-init
                                                        data-te-ripple-color="light">
                                                        {{ __('RESET PASSWORD') }}
                                                    </button>
                                                </div>

                                                    <!--Login button-->
                                                <div class="pb-auto ">
                                                    <p class="flex text-gray-500 dark:text-neutral-100">Already have an account?</p>
                                                    <a
                                                        type="button"
                                                        class=" mr-15 wrap inline-block w-half rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal dark:text-neutral-100 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-cyan-600 dark:to-cyan-600"
                                                        data-te-ripple-init
                                                        data-te-ripple-color="light"
                                                        href= "{{ route('login') }}"
                                                        >
                                                        Log in
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <!-- -->                               
                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>

</html>

