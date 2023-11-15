<template>

    <div v-if="complete">
        <upload-complete> </upload-complete>
    </div>

    <div v-else class="-mt-[10px] md:-mt-[10px] xl:-mt-[40px] select-none">
        <h1 class="relative text-center text-neutral-900  font-semibold dark:text-neutral-300 pb-[10px] text-lg">Upload a Thumbnail</h1>

            <div v-if="!uploading" class="flex items-stretch  w-[240px] sm:w-[290px] md:w-[390px] lg:w-[480px] xl:w-[500px] 2xl:w-[580px] h-[310px] sm:h-[320px] md:h-[330px] lg:h-[340px] xl:h-[350px] 2xl:h-[400px]">
                <div v-if="imageValidation" :style="{ backgroundImage: `url(${selectedImage})`,backgroundSize: 'cover' }" class=" grow flex rounded-l-lg">
                    <div class=" bg-opacity-20 blurred-background  grow flex rounded-l-lg">
                    <div :style="{ backgroundImage: `url(${selectedImage})`,backgroundSize: 'contain' }"  class="blurred-backgroundOp grow bg-no-repeat bg-center rounded-l-lg grid content-center">
                        <div class="grid justify-items-center -mb-[100px] sm:-mb-[100px] lg:-mb-[105px] xl:-mb-[120px]  self-end" >
                            <div class="pt-[20px] relative" title="Choose a different thumbnail">
                                <input type="file" ref="fileInput" @change="handleFileChange" style="display: none"  name="fileinputname" class="">
                                <button
                                    @click="openFileInput" 
                                    class="bg-gray-800 hover:bg-gray-700 dark:bg-neutral-400 dark:hover:bg-neutral-200 text-neutral-50 dark:text-neutral-950 border-1 border-neutral-400  py-2 px-4 rounded">
                                    <p>Change</p>
                                </button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                
                <div v-else class="grow bg-gray-300 dark:bg-neutral-700 rounded-l-lg grid content-center">
                    <div class="grid justify-items-center content-center ">
                        <div class="px-1">
                            <!-- class="dark:text-neutral-500 dark:hover:text-neutral-400  dark:bg-neutral-600 dark:hover:bg-neutral-500 rounded-full sm:p-4 md:p-4 lg:p-4 xl:p-4 2xl:p-4 h-[80px] sm:h-[80px] md:h-[130px] lg:h-[170px] w-[80px] sm:w-[80px] md:w-[130px] lg:w-[170px] "-->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" overflow-visible dark:text-neutral-500 dark:hover:text-neutral-400  dark:bg-neutral-600 dark:hover:bg-neutral-500 rounded-full sm:p-4 md:p-4 lg:p-4 xl:p-4 2xl:p-4 h-[80px] sm:h-[80px] md:h-[130px] lg:h-[170px] w-[80px] sm:w-[80px] md:w-[130px] lg:w-[170px] ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                        </div>

                        <div class="pt-[20px]">
                            Drop your image here
                        </div>

                        <div class="pt-[20px]">
                            <input type="file" ref="fileInput" @change="handleFileChange" style="display: none"  name="fileinputname">
                            <button
                                @click="openFileInput" 
                                class=" bg-gray-800 hover:bg-gray-700 dark:bg-neutral-400 dark:hover:bg-neutral-200 text-neutral-50 dark:text-neutral-950 border-1 border-neutral-400  py-2 px-4 rounded">
                                <p>Select Files</p>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="grow rounded-r-lg bg-gray-600 dark:bg-neutral-600 grid content-center relative w-[100px] p-[10px] ">
                    <div>
                        File Name
                    </div>
                    <div class="relative bg-gray-700 dark:bg-neutral-800 rounded-lg p-[10px] h-[50.5px] overflow-hidden">
                        <div class="overflow-x-auto custom-scrollbar dark:darkcustom-scrollbar scroll-container ">
                            <div class="whitespace-nowrap select-text">
                                <li>{{ selectedImageName }}</li>
                            </div>
                        </div>
                    </div>
                    <div class=" mt-[90px] sm:mt-[90px] lg:mt-[95px] xl:mt-[120px] grid justify-items-center">
                        <input class="hidden" type="file" @change="handleFileChange"/>
                        <button @click="uploadMusicThumbnail" v-if="selectedImage" class="bg-gray-800 hover:bg-gray-700 dark:bg-neutral-400 dark:hover:bg-neutral-200 text-neutral-50 dark:text-neutral-950 border-1 border-neutral-400  py-2 px-4 rounded">
                            Submit
                        </button>
                    </div>
                </div>
            </div>


            <div v-else class="text-black items-stretch mt-[50px] w-[240px] sm:w-[290px] md:w-[390px] lg:w-[480px] xl:w-[500px] 2xl:w-[580px] h-[310px] sm:h-[320px] md:h-[330px] lg:h-[340px] xl:h-[350px] 2xl:h-[400px]">
                <div class="text-black font-bold">

                        <ul>
                            <li v-if="uploadthumbnail" class="text-emerald-600">1. Thumbnail Uploaded</li>
                            <li v-else class="text-red-600">1. Uploading Thumbnail</li>
                            <li v-if="uploadsongprog" class="text-green-600">2. Music Has been uploaded</li>
                            <li v-else v-if="uploadthumbnail" class="text-red-600 ">2. Uploading Music Please Hold On</li>
                        </ul>

                </div>
                <div class='mt-[10px]'>
                    {{ this.uploadProgress  }}%
                    <div class="progress-bar text-black">
                        <div :style="{ width: `${uploadProgress}%` }" class="progress text-black"></div>
                    </div>
                </div>

            </div>



    </div>
</template>

<style scoped>
    .progress-bar {
        background-color: #121212;
        height: 20px;
        border-radius: 4px;
        overflow: hidden;
    }

    .progress {
        background-color: #4caf50;
        height: 100%;
        transition: width 0.3s ease-in-out;
    }
</style>

<script>
import UploadComplete from './uploadcomplete.vue';
import axios from 'axios';

export default {
    components: {
        "upload-complete": UploadComplete
    },
  data() {
    return {
      selectedImageName: null,
      selectedImage: null,
      imageValidation: false,
      selectedFile: null,
      uploadthumbnail: false,
      uploadsongprog: false,
      filename: null,
      uploading: false,
      uploadProgress: 0,
      complete: false,
    };
  },

  props: {
    receivedFile: File,
    receivedUserid: Number,
    songTitle: String,
    description: String,
    songReleaseDate: String,
    selectedFeatureArtist: Object,
  },

  methods: {
    openFileInput() {
      this.$refs.fileInput.click();
    },

    handleFileChange(event) {
      const fileInput = event.target;

      if (fileInput.files.length > 0) {
        this.selectedFile = fileInput.files[0];
        const validImageTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if (
          validImageTypes.includes(this.selectedFile.type) ||
          /\.(jpe?g|png|gif)$/i.test(this.selectedFile.name)
        ) {
          this.selectedImageName = this.selectedFile.name;
          this.selectedImage = URL.createObjectURL(this.selectedFile);
          this.imageValidation = true;
        } else {
          alert('Please select a valid image file (JPEG, PNG, or GIF).');
          this.selectedImageName = null;
          this.imageValidation = false;
        }
      } else {
        // No file selected
        this.selectedImageName = null;
        this.imageValidation = false;
      }
    },

    uploadMusicThumbnail() {
      if (!this.selectedFile) {
        alert('Please select an image before submitting.');
        return;
      }

      this.uploading = true;
      const formData = new FormData();
      formData.append('file', this.selectedFile);

      // Upload thumbnail and track progress
      axios
        .post('/upload-song-thumbnail', formData, {
          onUploadProgress: (progressEvent) => {
            this.uploadProgress = Math.round(
              (progressEvent.loaded / progressEvent.total) * 100
            )
            if (this.uploadProgress > 98) {
                this.uploadthumbnail = true;
            };
          },
        })
        .then((response) => {
          console.log(response.data.message);
          this.filename = response.data.message;
          // Continue with music file upload
          return this.uploadMusic();
        })
        .then(() => this.uploadSongInfo())
        .then(() => this.uploadFeatureArtist())
        .catch((error) => {
          // Handle errors here if needed
          console.error(error);
        })
        .finally(() => {
          this.uploading = false;
        });
    },

    uploadMusic() {
      const formDataMusic = new FormData();
      formDataMusic.append('file', this.receivedFile);

      // Upload music file and track progress
      return axios
        .post('/upload-song', formDataMusic, {
          onUploadProgress: (progressEvent) => {
            this.uploadProgress = Math.round(
              (progressEvent.loaded / progressEvent.total) * 100
            )
            
            if (this.uploadProgress > 98) {
                this.uploadsongprog = true;
            };
          },
        })
        .then((response) => {
          console.log('Your song has been uploaded');
          this.filename = response.data.message;
          console.log(this.filename);
        })
        .catch((error) => {
          this.uploadMessage = 'Music Upload Failed';
          throw error;
        });
    },

    uploadSongInfo() {
      return axios
        .post('api/uploadsonginfo', {
          songTitle: this.songTitle,
          description: this.description,
          songReleaseDate: this.songReleaseDate,
          filename: this.filename,
          uploadedby: this.receivedUserid,
        })
        .then((response) => {
          console.log(this.filename);
          this.uploadMessage = 'Info Updated Successful';
        })
        .catch((error) => {
          console.log('Error uploading song info');
          console.error(error);
        });
    },

    uploadFeatureArtist() {
      return axios
        .post('api/songinfo-artists-tableAPI', {
          selectedFeatureArtist: this.selectedFeatureArtist,
          receivedFilename: this.filename,
          receivedUserid: this.receivedUserid,
        })
        .then((response) => {
          this.uploadMessage = response.data.message;
          console.log('Feature Artists Updated');
          this.complete= true;
        })
        .catch((error) => {
          console.log('Error uploading feature info');
          console.error(error);
        });
    },
  },
};
</script>