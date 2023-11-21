<template>
    <form class="relative select-none rounded-lg ">   
        <label for="default-search" class=" text-sm font-medium sr-only ">Search</label>
            <div class="absolute self-center left-flex flex items-center pl-1 pointer-events-none ">
                <svg class="w-4 ml-1 text-gray-600 dark:text-neutral-400  " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="default-search" class="webkit-search-cancel-red-100 w-full focus:outline-none pl-8 pr-2 py-2 font-light text-gray-500 border-1 border-gray-700 rounded-lg bg-neutral-50  focus:border-sky-600 focus:ring-sky-500 dark:bg-neutral-800 dark:border-neutral-900 dark:placeholder-gray-400 dark:text-neutral-50 dark:focus:ring-cyan-600 dark:focus:border-cyan-500" placeholder="Search" required/>
    </form>

</template>