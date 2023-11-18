<template>
    <div class="flex w-[640px] sm:w-screen sm:h-screen bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-neutral-900 dark:to-neutral-900">

        
        <div class=" rounded-lg min-w-[20%] sm:min-w-[13%] max-w-[18%] grid pt-2 pb-3 px-3 ">
            <!-- mt-[-35%] w-[90%] h-[90%] --> 
            <ManageYourAlbums class="bg-gray-700 shrink h-[100%] sm:h-[93%] overflow-y-auto "></ManageYourAlbums>
        </div>

        <div class="flex bg-blue-300 grow ">

            <div class="bg-cyan-300 min-w-[25%] max-w-[35%]">
                Your Songs here
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
