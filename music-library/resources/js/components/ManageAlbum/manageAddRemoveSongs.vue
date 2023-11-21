<template>
    <div class="min-w-[25%] max-w-[35%] grid pt-2 mb-3 px-1 dark:text-neutral-50 text-gray-900 ">
      <div class="h-[100%] sm:h-[93%] overflow-y-auto bg-gray-700 dark:bg-neutral-800 rounded-lg scroll-container custom-scrollbar dark:darkcustom-scrollbar">
        <div class="px-2 pb-2 pt-3 grid">
          <div class="relative bg-inherit hover:shadow-md  items-stretch">
            <input
              type="text"
              name="findSongs"
              id="findSongs"
              v-model="searchQuery"
              @input="searchSongs"
              class="w-full peer bg-transparent h-10 rounded-lg text-gray-100 dark:text-neutral-50 placeholder-transparent ring-1 px-2 ring-gray-500 focus:ring-sky-600 dark:focus:ring-cyan-600 focus:outline-none focus:border-rose-600"
              placeholder="Find your songs"
              autocomplete="Find your Songs"
            />
            <label
              for="findSongs"
              class="absolute cursor-text left-0 -top-3 text-sm text-gray-100 dark:text-neutral-50 bg-gray-700 dark:bg-neutral-800 mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-100 dark:peer-placeholder-shown:text-neutral-50  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all "
            >
              Find your Songs
            </label>
          </div>
        </div>
  
        <div class="p-2 pt-[-20px]">
          <!-- Display the fetched songs -->
          <div v-if="songs.length > 0" class="bg-neutral-900 rounded-lg p-4">
                <ul>
                    <li v-for="song in songs">{{ song.song_name }}</li>
                </ul>
          </div>

          <div v-else>
            
          </div>
        </div>
  
        <div class="grid justify-center px-1 mt-[40px]">
          <button
            @click="createPlaylist"
            class="hover:rounded-lg text-neutral-50 font-thin p-[1.5px] text-md  dark:bg-gradient-to-r  dark:from-cyan-300 dark:to-red-300 dark:hover:bg-gradient-to-r  dark:hover:from-cyan-600 dark:hover:to-red-600">
            <div class="bg-neutral-700 p-[4px] px-[8px] hover:bg-transparent ">
                Create Playlist
            </div>
            </button>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        searchQuery: '',
        songs: [],
      };
    },
    
    props: {
        user: {
            Object
        }
    },

    methods: {
      searchSongs() {
        // You can add debounce logic here to avoid too many API requests while typing
        if (this.searchQuery!== '') {
            axios.post(`/api/songs_by_user`, { id: this.user, query: this.searchQuery})
            .then((response) => {
                this.songs = response.data.songs;
            });
        }

        else{
            this.songs = [];
        }

      },
      createPlaylist() {
        // Add logic for creating a playlist
      },
    },
  };
  </script>
  