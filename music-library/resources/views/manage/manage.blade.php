@extends('layouts.app')

@section('content')
<div class="flex max-h-screen overflow-auto  scroll-container custom-scrollbar dark:darkcustom-scrollbar">
    <div class="bg-gray-900 dark:bg-neutral-900 grow min-w-[400px] max-w-screen min-h-screen flex items-center  justify-center">
        <div class="rounded-lg space-y-4 bg-neutral-800 mt-[-100px]">
            <ol class="text-xl  p-2 rounded-lg">
                <a href='/upload'>
                    <li class='hover:bg-gray-700 dark:hover:bg-neutral-700 rounded-lg text-white p-4 text-center'>
                        Upload
                    </li>
                </a>

                <a href='/managealbum'>
                    <li class='hover:bg-gray-700 dark:hover:bg-neutral-700 rounded-lg text-white p-4 text-center'>
                        Manage Album
                    </li>
                </a>
            </ol>
        </div>
    </div>
</div>
@endsection