<template>

  <div v-if="uploadMessage">
    <uploadsong-images  :receivedFile="receivedFile" 
                        :receivedUserid="receivedUserid" 
                        :songTitle="receivedSongTitle" 
                        :description="receivedDescription"
                        :songReleaseDate="receivedSongReleaseDate"
                        :selectedFeatureArtist="selectedFeatureArtist"
    ></uploadsong-images>
  </div>

  <div v-else class="container">  
    <div class="bg-gray-200 dark:bg-neutral-800 relative mb-3 pb-1 pt-1 text-center">
        <div class="flex"> 
            <div class="relative bg-inherit  hover:shadow-md rounded-l-lg">
                <input
                type="text"
                v-model="featureArtist"
                name="featureArtist"
                id="featureArtist"
                class=" peer bg-transparent h-10 sm:w-[170px] md:w-[230px] lg:w-[330px] xl:w-[460px] 2xl:w-[560px] rounded-l-lg text-gray-700 dark:text-neutral-50 placeholder-transparent ring-1 px-2  ring-gray-500 focus:ring-sky-600 dark:focus:ring-cyan-600 focus:outline-none focus:border-rose-600"
                placeholder="Search for users"
                autocomplete="FeatureArtist"
                />
                <label for="featureArtist" 
                    class="absolute cursor-text left-0 -top-3 text-sm text-gray-700 dark:text-neutral-50 bg-gray-200 dark:bg-neutral-800 mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-500 dark:peer-placeholder-shown:text-neutral-50  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-gray-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all "
                    >
                    Feature Artists
                </label>
            </div>

            <button class="py-2 ml-[2px] px-2 bg-gray-800 dark:bg-neutral-700 rounded-r-lg ring-1 ring-neutral-400 hover:mix-blend-overlay  " title="Search">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </button>
        </div>

        <div v-if="filteredUsers.length > 0 && featureArtist.length > 0" id="featureArtistmaindiv" class="mt-2 bg-gray-700 dark:bg-neutral-700 rounded-lg pt-[7px] pb-[7px]">
            <div v-for="user in filteredUsers.slice(0, 3)" :key="user.id"  class="px-1 text-left py-2 hover:bg-gray-600 dark:hover:bg-neutral-600 rounded-1">
                  <div v-if="user.id !== receivedUserid" class="flex ">
                  <input name="featureArtistCheckbox" class=" text-neutral-50 ml-4 dark:hover:bg-neutral-600" type="checkbox" v-bind:value="user.id" v-model="selectedFeatureArtist"/>
                    <div class="text-neutral-50 ml-4  dark:hover:bg-neutral-600">{{ user.name }}</div>
                  </div>

                  <div v-else>
                    <p class="text-neutral-50 ml-4 dark:hover:bg-neutral-600">{{ user.name }} (You)</p>
                  </div>

            </div>
        </div>

        <div v-else>
            <div v-if="featureArtist.length==0">
            </div>

            <p v-else class="mt-8 dark:text-neutral-50 text-gray-900 font-bold">No users found.</p>
        </div>
    </div>

    <div class="absolute bg-gray-700 dark:bg-neutral-500 shadow-neutral-50 select-none text-white dark:text-white scroll-container custom-scrollbar dark:darkcustom-scrollbar rounded-lg flex w-[210px] md:w-[270px] lg:w-[370px] xl:w-[500px] 2xl:w-[600px] h-[100px] overflow-x-auto ">
          <div v-for="userName in selectedUsers" :key="userName" class="">
            <div class="hover:mix-blend-overlay dark:hover:text-cyan-300 text-gray-200 hover:text-neutral-50 p-1 bg-neutral-900 dark:bg-neutral-900 dark:text-neutral-50 border-1 rounded-lg m-1 border-neutral-50 dark:border-cyan-800">{{ userName }}</div>            
          </div>
    </div>

    <form @submit.prevent="submitFormFeaturedArtists" method="post" class="absolute inset-x-0 bottom-0" id="featuredArtistResults" name="featuredArtistResults">
      <input type="hidden"  v-bind:value="selectedFeatureArtist" />
      <!-- <input type="hidden" v-bind:value="receivedFilename"> -->
      <input type="hidden" v-bind:value="receivedUserid">
      <div class="mb-12 pb-1 pt-1 text-center">
            <button
                class="active:animate-pulse w-[100px] mb-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-50 shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-cyan-600 dark:to-cyan-600"
                type="submit"
                data-te-ripple-init
                data-te-ripple-color="light">
                Next
            </button>     
      </div>
    </form>
  </div>


</template>

<script>
import { reactive, onMounted, toRefs, computed, onUnmounted } from 'vue';
import axios from 'axios';
import UploadSongImages from './uploadsongimages.vue';

export default {

  components: {
    "uploadsong-images": UploadSongImages
  },
  props: {
    receivedFile: File,
    receivedUserid: Number,
    receivedSongTitle: String,
    receivedDescription: String,
    receivedSongReleaseDate: String,
  },
  setup() {
    const state = reactive({
      featureArtist: '',
      users: [],
      selectedFeatureArtist: [],
      selectedFeatureArtistName: [],
      selectedUser: null,
      uploadMessage:'',
    });

    const handleOutsideClick = (event) => {
      const searchInput = document.getElementById('featureArtistmaindiv');
      if (searchInput && !searchInput.contains(event.target)) {
        state.featureArtist = ''; 
      }
    };

    onMounted(() => {
      axios
        .get('api/featuring-userAPI')
        .then((response) => {
          const { user } = response.data;
          state.users = user;
        })
        .catch((error) => {
          console.error('Error fetching users:', error);
        });
        document.addEventListener('click', handleOutsideClick);
    });

    onUnmounted(() => {
      document.removeEventListener('click', handleOutsideClick);
    });


    const filteredUsers = computed(() => {
      return state.users.filter(user =>
        user.name.toLowerCase().includes(state.featureArtist.toLowerCase())
      );
    });

    const stateRefs = toRefs(state);

    const selectedUsers = computed(() => {
      return state.selectedFeatureArtist.map(userId => {
        const user = state.users.find(u => u.id === userId);
        return user ? user.name : ''; // Return user name if found, else empty string
      });
    });

    return {
      ...stateRefs,
      filteredUsers,
      selectedUsers,
    };
  },

  methods: {
    async submitFormFeaturedArtists() {

      try{

          const response = await axios.post('api/songinfo-artists-table-validationAPI', {
            selectedFeatureArtist: this.selectedFeatureArtist,
            // receivedFile: this.receivedFile,
            // receivedUserid: this.receivedUserid

        })
          .then(response => {
              // Handle the success response as needed
              // console.log(response.data.message)
              //uploadmsg
              this.uploadMessage = response.data.message;
              console.log("Feature Artists Updated")
          });



      }
      catch (error) {
        console.error(error);
      };


    }
  }


};
</script>






