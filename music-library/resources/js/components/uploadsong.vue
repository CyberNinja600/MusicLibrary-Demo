<template>
    <div id='upload' class="bg-gradient-to-r from-gray-50 to-gray-50 dark:bg-gradient-to-r dark:from-neutral-900 dark:to-neutral-900  w-screen h-screen">
        <div class="flex items-center -mt-[40px] justify-center h-screen flex-wrap">
            <div class="bg-gray-50 bg-opacity-30 dark:bg-neutral-800  p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300 w-[300px] h-[380px] sm:w-[350px] sm:h-[400px] md:w-[450px] md:h-[450px] lg:w-[550px] lg:h-[500px] xl:w-[600px] xl:h-[600px] 2xl:w-[650px] 2xl:h-[650px]">
                <h2 class=" text-lg font-semibold mb-4 text-neutral-800 dark:text-neutral-50 bg-transparent">Upload Musics</h2>
                <div class="grid  gap-2 justify-items-center content-between bg-transparent my-[20px] sm:my-[30px] md:my-[30px] lg:my-[60px] xl:my-[100px] 2xl:my-[100px]">

                        <div class="">
                            <button class=" text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 414 414" class="fill-gray-800 hover:fill-gray-700  dark:fill-neutral-200 dark:hover:fill-gray-300 h-[90px] sm:h-[100px] md:h-[150px] lg:h-[150px] xl:h-[150px] 2xl:h-[150px]" >
                                    <path class="cls-1" d="m207,0C92.68,0,0,92.68,0,207s92.68,207,207,207,207-92.68,207-207S321.32,0,207,0Zm0,141.22l49.88,49.88h-32.86v49.06h-34.03v-49.06h-32.86l49.88-49.88Zm50,131.56h-100v-20h100v20Z"/>
                                </svg>
                            </button>
                        </div>

                        <div class="my-2 sm:my-4">
                            <div class="text-gray-600 dark:text-neutral-50 mb-6 text-center font-semibold">Drag and drop music files to upload </div>
                            <div class="text-gray-600 dark:text-neutral-300 mb-6 text-center">Your music will be private until you publish them.</div>
                        </div>
                        <div>
                            <input type="file" ref="fileInput" style="display: none" @change="uploadFile">
                            <button @click="openFileInput" class="bg-gray-800 hover:bg-gray-700 dark:bg-neutral-200 dark:hover:bg-gray-300 text-neutral-50 dark:text-neutral-900 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">
                                Select Files
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
    methods: {
        openFileInput() {
            this.$refs.fileInput.click();
        },
        uploadFile(event) {
            const file = event.target.files[0];
            const formData = new FormData();
            formData.append('file', file);

            axios.post('/upload-song', formData)
                .then(response => {
                    // Handle the success response as needed
                    console.log(response.data.message);
                })
                .catch(error => {
                    // Handle errors, e.g., show an error message to the user
                    console.error(error);
                });
        }
    }
};
</script>