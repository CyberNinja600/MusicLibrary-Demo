<template>
    <div class="flex w-[640px] sm:w-screen sm:h-screen bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-neutral-900 dark:to-neutral-900">

        
        <div class=" rounded-lg min-w-[20%] sm:min-w-[13%] max-w-[18%] grid pt-2 mb-3 px-2 ">
            <!-- mt-[-35%] w-[90%] h-[90%] --> 
            <ManageYourAlbums class="bg-gray-700 shrink h-[100%] sm:h-[93%] overflow-y-auto "></ManageYourAlbums>
        </div>

        <div class="flex grow rounded-lg">
            <div class=" min-w-[25%] max-w-[35%]  grid pt-2 mb-3 sm:px-1  md:px-2 ">
                <div class="h-[100%] sm:h-[93%] overflow-y-auto  bg-gray-700 dark:bg-neutral-800 rounded-lg">
                    <search-bar class="flex p-2"> </search-bar>
                    <div class="flex p-2">
                        Your Songs here
                    </div>
                </div>
            </div>
            
            <div class="bg-green-300 grow">
                playlist thingy
            </div>
        </div>
    </div>
</template>

<script>
import ManageYourAlbums from './manageyouralbums.vue'
export default {
    components: {
        ManageYourAlbums
    }
}
</script>
