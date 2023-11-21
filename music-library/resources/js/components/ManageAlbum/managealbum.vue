<template>
    <div class="flex w-[640px] sm:w-screen sm:h-screen bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-neutral-900 dark:to-neutral-900">

        
        <div class=" rounded-lg min-w-[20%] sm:min-w-[13%] max-w-[18%] grid pt-2 mb-3 px-1 ">
            <!-- mt-[-35%] w-[90%] h-[90%] --> 
            <ManageYourAlbums class="bg-gray-700 shrink h-[100%] sm:h-[93%] overflow-y-auto "></ManageYourAlbums>
        </div>

        <div class="flex grow rounded-lg ">
            <ManageAddRemoveSongs :user="user"> </ManageAddRemoveSongs>
            
            <div class="flex grow rounded-lg px-1">
                <div class=" grow grid pt-2 mb-3">
                    <div class="h-[100%] sm:h-[93%] overflow-y-auto  bg-gray-700 dark:bg-neutral-800 rounded-lg">
                        Playlist thingy oajsdiojasiod
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import ManageYourAlbums from './manageyouralbums.vue'
import ManageAddRemoveSongs from './manageAddRemoveSongs.vue';

export default {
    components: {
        ManageYourAlbums,
        ManageAddRemoveSongs
    },
    props: {
        user: {
            Object
        }
    },
}
</script>
