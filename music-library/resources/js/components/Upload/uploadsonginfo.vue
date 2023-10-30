<template>
    <h2 class=" text-lg font-semibold mt-4 text-gray-800 dark:text-neutral-50 bg-transparent">Upload Musics</h2>
    <div class="grid  gap-2 justify-items-center content-between bg-transparent my-[20px] sm:my-[30px] md:my-[30px] lg:my-[60px] xl:my-[100px] 2xl:my-[100px]">
        
        <div v-if="uploadMessage" class="text-white">
            <uploadsong-feature :received-filename="receivedFilename" :received-Userid="receivedUserid"> </uploadsong-feature>
        </div>
        
        <div v-else class="text-white ">  
            <form @submit.prevent="submitForm" method="POST" name="songuploadinfoform" id="songuploadinfoform">
                <!-- song title-->
                <div class="bg-neutral-50 dark:bg-neutral-800 relative mb-3 pb-1 pt-1 text-center">
                    <div class="relative bg-inherit ">
                        <input
                            v-model="songTitle"  
                            type="text" 
                            id="SongTitle" 
                            name="SongTitle" 
                            class="peer bg-transparent h-10 w-[200px] sm:w-[200px] md:w-[250px] lg:w-[350px] xl:w-[480px] 2xl:w-[580px] rounded-lg text-gray-700 dark:text-neutral-50 placeholder-transparent ring-1 px-2 ring-gray-200 focus:ring-sky-600 dark:focus:ring-cyan-600 focus:outline-none focus:border-rose-600 " 
                            placeholder="Song Title"
                            required 
                            autocomplete="Song Title"
                            autofocus
                            />
                        <label for="SongTitle" 
                            class="absolute cursor-text left-0 -top-3 text-sm text-gray-700 dark:text-neutral-50 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-500 dark:peer-placeholder-shown:text-neutral-50  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all"
                            >
                            Song Title
                        </label>

                    </div>
                </div>

                <!-- Description-->
                    <div class="bg-neutral-50 dark:bg-neutral-800 relative mb-3 pb-1 pt-1 text-center">
                    <div class="relative bg-inherit ">
                        <input
                            v-model="description" 
                            type="text" 
                            id="Description" 
                            name="Description" 
                            class="peer bg-transparent h-10 w-[200px] sm:w-[200px] md:w-[250px] lg:w-[350px] xl:w-[480px] 2xl:w-[580px] rounded-lg text-gray-700 dark:text-neutral-50 placeholder-transparent ring-1 px-2 ring-gray-200 focus:ring-sky-600 dark:focus:ring-cyan-600 focus:outline-none focus:border-rose-600 " 
                            placeholder="Description"
                            required 
                            autocomplete="Description"
                            autofocus
                            />
                        <label for="Description" 
                            class="absolute cursor-text left-0 -top-3 text-sm text-gray-700 dark:text-neutral-50 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-500 dark:peer-placeholder-shown:text-neutral-50  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all"
                            >
                            Description
                        </label>
                    </div>
                </div>

                
                <!-- Release Date-->
                <div class="bg-neutral-50 dark:bg-neutral-800 relative mb-3 pb-1 pt-1 text-center">
                    <div class="relative bg-inherit ">

                        <input
                            v-model="songReleaseDate" 
                            type="datetime-local" 
                            id="SongReleaseDate" 
                            name="SongReleaseDate" 
                            class="peer bg-transparent h-10 w-[200px] sm:w-[200px] md:w-[250px] lg:w-[350px] xl:w-[480px] 2xl:w-[580px] rounded-lg text-gray-700 dark:text-neutral-50 placeholder-transparent ring-1 px-2 ring-gray-200 focus:ring-sky-600 dark:focus:ring-cyan-600 focus:outline-none focus:border-rose-600 " onfocus="(this.type='datetime-local')" onblur="(this.type='datetime-local')"
                        >

                        <label for="SongReleaseDate" 
                            class="absolute cursor-text left-0 -top-3 text-sm text-gray-700 dark:text-neutral-50 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-500 dark:peer-placeholder-shown:text-neutral-50  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all"
                            >
                            Release Date 
                        </label>

                    </div>
                </div>


                <!--Submit button-->
                <div class="mb-12 pb-1 pt-1 text-center absolute inset-x-0 bottom-0 ">
                    <button
                        class="active:animate-pulse w-[100px] mb-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-50 shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-cyan-600 dark:to-cyan-600"
                        type="submit"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        Next
                    </button>     
                </div>
                <!-- <div class="text-white"> {{ receivedFilename}} </div>
                <div class="text-white"> {{ receivedUserid}} </div> -->
                <input type="hidden" id="filename" name="filename" value="{{ receivedFilename}}"/>
                <input type="hidden" id="uploadedby" name="uploadedby" value="{{ receivedUserid}}">

            </form>

        </div>
        
    </div>

</template>

<script>

import UploadSongFeature from './uploadsongfeature.vue';
import axios from 'axios';

export default {
  components: {
    'uploadsong-feature': UploadSongFeature
  },
  props: {
    receivedFilename: String,
    receivedUserid: Number,
  },
  data() {
        return {
            songTitle: '',
            // artistName: '',
            description: '',
            songReleaseDate: '',
            filename: '',
            uploadedby: '',
            uploadMessage:'',
        };
    },
    methods: {
        async submitForm() {
            try {
            //     console.log('Form Data:', {
            //     songTitle: this.songTitle,
            //     // artistName: this.artistName,
            //     description: this.description,
            //     songReleaseDate: this.songReleaseDate,
            //     filename: this.receivedFilename,
            //     uploadedby: this.receivedUserid,
            // });
                const response = await axios.post('/uploadsonginfo', {
                    songTitle: this.songTitle,
                    // artistName: this.artistName,
                    description: this.description,
                    songReleaseDate: this.songReleaseDate,
                    filename: this.receivedFilename,
                    uploadedby: this.receivedUserid,
                },{
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                })
                .then(response => {
                    // Handle the success response as needed
                    // console.log(response.data.message)
                    console.log("Song Info Updated")
                });
                    this.uploadMessage = 'Info Updated Successful';

            } 
            
            catch (error) {
                console.error(error);
            };
        }
    }
};
</script>