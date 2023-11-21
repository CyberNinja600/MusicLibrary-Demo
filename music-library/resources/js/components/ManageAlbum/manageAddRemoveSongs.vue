<template>
    <div class=" min-w-[25%] max-w-[35%]  grid pt-2 mb-3 px-1 dark:text-neutral-50 text-gray-900 ">
        <div class="h-[100%] sm:h-[93%] overflow-y-auto  bg-gray-700 dark:bg-neutral-800 rounded-lg ">
            <div class="flex px-2 pb-2 pt-3">
                <div class="relative bg-inherit  hover:shadow-md ">
                    <input
                    type="text"
                    name="findSongs"
                    id="findSongs"
                    class=" peer bg-transparent h-10 sm:w-[170px] md:w-[230px] lg:w-[330px] xl:w-[460px] 2xl:w-[560px] rounded-lg text-gray-100 dark:text-neutral-50 placeholder-transparent ring-1 px-2  ring-gray-500 focus:ring-sky-600 dark:focus:ring-cyan-600 focus:outline-none focus:border-rose-600"
                    placeholder="Find your songs"
                    autocomplete="Find your Songs"
                    />
                    <label for="findSongs" 
                        class="absolute cursor-text left-0 -top-3 text-sm text-gray-100 dark:text-neutral-50 bg-gray-700 dark:bg-neutral-800 mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-100 dark:peer-placeholder-shown:text-neutral-50  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all "
                        >
                        Find your Songs
                    </label>
                </div>

            </div>


            <div class=" p-2 ">
                
            </div>


            <div class="grid justify-center px-1 ">
                <button class="bg-gray-300 hover:bg-gray-200 dark:hover:bg-neutral-300 dark:bg-neutral-400  dark:text-neutral-600 ring-1 ring-neutral-400 font-semibold p-2 text-lg rounded-md ">
                    Create Playlist
                </button>
            </div>


        </div>
    </div>

</template>