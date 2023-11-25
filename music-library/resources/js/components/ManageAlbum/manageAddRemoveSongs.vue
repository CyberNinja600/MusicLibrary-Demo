<template>
  <div class="min-w-[25%] max-w-[35%] grid pt-2 mb-3 px-1 dark:text-neutral-50 text-gray-900 ">
      <div class="overflow-y-auto bg-gray-700 dark:bg-neutral-800 rounded-lg scroll-container custom-scrollbar dark:darkcustom-scrollbar">
          <div class="px-2 pb-2 pt-3 grid">

               <!--- delete this later-->
              <!-- <div class = "py-4" id = "test">
                {{selectedSongs}}
              </div> -->

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
                      <div class="block xs:hidden sm:block">
                        Find your Songs
                      </div>
                  </label>
              </div>
          </div>

          <div class="p-2 pt-[-20px] overflow-x">
              <!-- Display the filtered songs -->
              <div v-if="filteredSongs.length > 0 && searchQuery.length>0" class="bg-neutral-900 rounded-lg p-4">
                  <ul class="rounded-lg  xs:space-y-4 sm:space-y-0 ">
                      <div v-for="song in filteredSongs" class="text-left xs:bg-neutral-800 rounded-lg sm:bg-transparent  xs:p-3 ">
                        <input name="selectedSongCheckbox" class=" text-neutral-50 ml-4 dark:hover:bg-neutral-600" type="checkbox" v-bind:value="song.id" v-model="selectedSongs"/>
                        {{ song.song_name }}
                      </div>
                  </ul>
              </div>

              <!-- if searchQuery is empty dont show anything  -->
              <div v-else-if="searchQuery.length==0">
              </div>

              <div v-else>
                  No songs found.
              </div>
          </div>

          <div class="grid justify-center px-1 mt-[40px]">
              <button
                  @click="createPlaylist"
                  class="hover:rounded-lg text-neutral-50 font-thin p-[1.5px] text-md  dark:bg-gradient-to-r  dark:from-cyan-300 dark:to-red-300 dark:hover:bg-gradient-to-r  dark:hover:from-cyan-600 dark:hover:to-red-600">
                  <div class="bg-neutral-700 p-[4px] px-[8px] hover:bg-transparent xs:p-[2px] xs:px-[4px]">
                      <div class="block xs:hidden sm:block">
                        Create Playlist
                      </div>
                      <div class="hidden xs:block sm:hidden">
                        Create
                      </div>
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
          selectedSongs: [],
      };
  },
  
  props: {
      user: {
          Object
      }
  },

  computed: {
      filteredSongs() {
          return this.songs.filter(song => song.song_name.toLowerCase().includes(this.searchQuery.toLowerCase()));
      }
  },

  methods: {

        searchSongs() {
            // If songs are not loaded yet, make an API request
            if (this.songs.length === 0) {
                axios.post(`/api/songs_by_user`, { id: this.user, query: '' })
                    .then((response) => {
                        console.log("Making an API request");
                        this.songs = response.data.songs;
                    });
            }
        },


        //child to parent communication
        createPlaylist() {
            this.$emit('update-selected-songs', this.selectedSongs);
        },

  },
};
</script>
