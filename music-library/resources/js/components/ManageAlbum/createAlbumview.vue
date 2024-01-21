<template>
    <div class="flex grow rounded-lg px-1 ">
        <div class="grow grid pt-2 mb-3 ">
            <div class=" overflow-y-auto scroll-container custom-scrollbar dark:darkcustom-scrollbar bg-gray-700 dark:bg-neutral-800 rounded-lg text-white overflow-x-auto">
                <div class=" px-[30px] mt-[40px]">


                    <div class="flex flex-col-reverse">
                        <input type="text" value="" id="playlist_name" class="grow rounded-lg bg-transparent border-1 dark:border-neutral-400 px-2">
                        <label for="playlist_name" class="py-2">Playlist Name</label>
                    </div>


                    <!-- album details-->
                    <ul class="py-[20px]  ">
                        <li v-for="(song, index) in songs" :key="index" class="flex space-x-7 my-1 bg-neutral-700 pr-[20px] rounded-lg bg-opacity-29 overflow-x-auto scroll-container custom-scrollbar dark:darkcustom-scrollbar">
                            <div class="  object-center p-2  ">
                                <div class="p-2">
                                    <div class="rounded-lg" :style="{ backgroundImage: `url(${getThumbnailUrl(song.thumbnail)})`,backgroundSize: 'cover' }">
                                        <div class=" bg-opacity-20 blurred-background p-[10px] rounded-lg"> 
                                            <img :src="getThumbnailUrl(song.thumbnail)"  class="object-cover h-[100px] w-[100px] min-h-[100px] min-w-[100px] rounded-lg">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2   grow self-center backdrop-blur-lg bg-neutral-300 rounded-lg bg-opacity-20">
                                <div class="">
                                    {{ song.song.name }}
                                </div>

                                <div class="">
                                    <!-- Display multiple artists -->
                                    <span v-for="(artist, artistIndex) in song.artists" :key="artistIndex">
                                        {{ artist.name }}
                                        <!-- Add a comma if not the last artist -->
                                        <span v-if="artistIndex < song.artists.length - 1">, </span>
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <!-- publish button -->
                    <div class="flex items-center justify-center p-2 pb-4">
                        <button class="text-neutral-50 dark:bg-neutral-600 dark:hover:bg-neutral-500 h-[50px] w-[100px] rounded-lg text-center ">
                            Publish
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: {
        user: {
            user: Object
        },
        selectedSongs:{
            Array
        }
    },

    data() {
        return {
            songs: [],
            selectedImage: ''
        };
    },

    watch: {
        selectedSongs: {
            handler: 'fetchData',
            deep: true
        }
    },

    methods: {
        async fetchData() {
            try {
                const responses = await Promise.all(
                    this.selectedSongs.map(songId => axios.get(`/api/songs_description/${songId}`))
                );
                this.songs = responses.map(response => response.data);
                console.log(this.songs)
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        },

        getThumbnailUrl(filename) {
            const url = `/${window.location.origin}/storage/images/${filename}`;
            return url;
        }
    }
};
</script>
