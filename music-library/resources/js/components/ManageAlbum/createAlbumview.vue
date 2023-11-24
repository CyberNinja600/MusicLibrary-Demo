<template>
    <div class="flex grow rounded-lg px-1 ">
        <div class="grow grid pt-2 mb-3 ">
            <div class=" overflow-y-auto bg-gray-700 dark:bg-neutral-800 rounded-lg text-white overflow-x-auto">
                <div class=" px-[30px] mt-[40px]">
                    <ul class="py-[20px] ">
                        <li v-for="(song, index) in songs" :key="index" class="flex space-x-7">
                            <div class="  object-center p-2">
                                <div class="p-2">
                                    <img :src="getThumbnailUrl(song.thumbnail)"  class="object-cover h-[100px] w-[100px]">
                                </div>
                            </div>
                            <div class="p-2">
                                <div class="">
                                    {{ song.song.name }}
                                </div>
                                <div class="">
                                    <!-- Display multiple artists -->
                                    <span v-for="(artist, artistIndex) in song.artists" :key="artistIndex">
                                        {{ artist }}
                                        <!-- Add a comma if not the last artist -->
                                        <span v-if="artistIndex < song.artists.length - 1">, </span>
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
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
            songs: []
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
                // console.log(this.songs)
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        },

        getThumbnailUrl(filename) {
            // Assuming your symbolic link is named "storage", adjust if needed
            const url = `${window.location.origin}/storage/images/${filename}`;
            console.log('Constructed URL:', url);
            return url;
        }
    }
};
</script>
