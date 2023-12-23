<template>
    <div class="flex xs:flex-col-reverse md:flex-row  xs:overflow-x-scroll w-[640px] xs:w-screen xs:h-[90vh] bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-neutral-900 dark:to-neutral-900 overflow-x-auto">

        
        <div class=" rounded-lg md:max-w-[18%] max-w-[18%] xs:max-w-[100%] grid pt-2 mb-3 px-1  ">
            <!-- mt-[-35%] w-[90%] h-[90%] --> 
            <ManageYourAlbums class="bg-gray-700 shrink h-[100%]  overflow-y-auto "></ManageYourAlbums>
        </div>

        <div class="flex grow rounded-lg ">
            <ManageAddRemoveSongs :user="user" @update-selected-songs="updateSelectedSongs" class=""> </ManageAddRemoveSongs>
            <CreateAlbumview :user="user" :selectedSongs="selectedSongs" class=""></CreateAlbumview>
        </div>
    </div>
</template>

<script>
import ManageYourAlbums from './manageyouralbums.vue'
import ManageAddRemoveSongs from './manageAddRemoveSongs.vue';
import CreateAlbumview from './createAlbumview.vue';

export default {
    components: {
        ManageYourAlbums,
        ManageAddRemoveSongs,
        CreateAlbumview
    },

    props: {
        user: {
            Object
        }
    },
    data() {
        return {
            selectedSongs: [], // Add this variable to store the selected songs
        };
    },

    //gets updated when create playlist button is clicked under child component
    methods: {
        updateSelectedSongs(selectedSongs) {
            this.selectedSongs = selectedSongs;
        },
    },
}
</script>
