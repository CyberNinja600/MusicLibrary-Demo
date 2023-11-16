@php
    use Illuminate\Support\Facades\Vite;
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            {{ config('app.name', 'Home') }}
        </title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito">
            <!-- Scripts -->
            @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

            
    </head>

    <body class="flex flex-1 dark:bg-neutral-900 bg-gray-900 h-screen">
        <div id="app" class="h-screen xs:overflow-hidden">
            <div class="bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-neutral-900 dark:to-neutral-900 h-screen">
                <div class="flex flex-wrap place-items-top shadow-lg ">
                    <section class="select-none  relative mx-auto z-40">
                        <!-- navbar -->
                        <nav class="flex justify-between  text-white xs:w-screen  sm:w-screen lg:w-screen md:w-scren 2xl:w-screen xl:w-screen ">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <div class="pl-5 xl:px-12 sm:px-12 py-3 flex w-full items-center ">
                            <a class=" flex text-xl shadow-2xl font-extrabold antialiased font-heading dark:text-neutral-50" href="\home">
                            <div class=" animate-spin">
                                <img class="h-[41px] " src="img/logo/wlogo-fixed-clean-ratio.png"  alt="logo">
                            </div>
                            <p class="py-2 antialiased hidden lg:block xl:block 2xl:block md:block sm:block scale-75 font-mono">Music Library</p>
                            </a>

                            <!-- Nav Links -->
                            <ul class="md:flex px-4 mx-auto font-semibold font-heading space-x-12 items-center ">
                                <li>
                                    <search-bar class="py-2 -mr-1 flex px-2"></search-bar>
                                </li>
                            </ul>
                            

                            <!-- Header Icons -->
                            <div class="hidden xl:flex space-x-5 items-center ">
                            <!-- Sign In / Register-->
                            <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class=" flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-12 p-1 rounded-full" src="../img/testartwork/profilepicture.jpg" alt="../img/bg/uadp.jpg">
                            </button>

                                <!-- Dropdown menu -->
                                <div id="dropdownAvatar" class="z-10 hidden  rounded-md  w-40  bg-gradient-to-r from-gray-600 to-gray-600 dark:bg-gradient-to-t dark:from-neutral-800 dark:to-neutral-800 ">
                                    <div class="px-4 py-3 text-sm  hover:bg-gray-500 dark:hover:bg-neutral-700 hover:rounded-t-md">
                                        <div class=" break-words">
                                            {{ Auth::user()->name }}
                                        </div>
                                    </div>

                                    <ul class="py-2 hover:bg-gray-500 dark:hover:bg-neutral-700 text-sm " aria-labelledby="dropdownUserAvatarButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 ">Settings</a>
                                        </li>
                                    </ul>

                                    <ul class="py-2 hover:bg-gray-500 dark:hover:bg-neutral-700 text-sm " aria-labelledby="dropdownUserAvatarButton">
                                        <li>
                                            <a href="/manage" class="block px-4 py-2 ">Manage</a>
                                        </li>
                                    </ul>

                                    <div class="py-2 hover:bg-gray-500 dark:hover:bg-neutral-700 hover:rounded-b-md">
                                        <a  href="{{route('logout')}}"
                                            method="POST"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                                            class="block px-4 py-2 text-sm ">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        </form>
                                    </div>
                                </div>
                                <full-screen> </full-screen>
                            </div>
                            
                        </div>

                        
                        <!-- Responsive navbar -->

                        <button id="dropdownDefaultbutton" data-dropdown-toggle="dropdown" class="dark:hover:bg-gray-700 navbar-burger self-center mr-12 xl:hidden" href="" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                        



                        <div id="dropdown" class=" z-10 hidden  rounded-md shadow  w-40  bg-gradient-to-r from-gray-600 to-gray-600 dark:bg-gradient-to-t dark:from-neutral-800 dark:to-neutral-800 ">
                                <div class="px-4 py-3 text-sm hover:bg-gray-500 dark:hover:bg-neutral-700 hover:rounded-t-md">
                                    <div class="text-xl break-words">
                                        {{ Auth::user()->name }}
                                    </div>
                                </div>

                                <ul class="py-2 hover:bg-gray-500 dark:hover:bg-neutral-700 text-sm" aria-labelledby="dropdownUserAvatarButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2">Settings</a>
                                    </li>
                                </ul>
                                
                                <ul class="py-2 hover:bg-gray-500 dark:hover:bg-neutral-700 text-sm" aria-labelledby="dropdownUserAvatarButton">
                                    <li>
                                        <a href="/upload" class="block px-4 py-2">Upload</a>
                                    </li>
                                </ul>

                                <div class="py-2 hover:bg-gray-500 dark:hover:bg-neutral-700 text-sm">
                                    <a  href="{{route('logout')}}"
                                        method="POST"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                                        class="block px-4 py-2 text-sm ">
                                        Sign out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    </form>
                                </div>
                            </div>
                            <div class="self-center mr-4 xl:hidden">
                                <full-screen> </full-screen>
                            </div>
                        @endguest
                        </nav>
                        
                    </section>
            </div>

                <main class="static sm:fixed w-min xs:w-screen">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>

