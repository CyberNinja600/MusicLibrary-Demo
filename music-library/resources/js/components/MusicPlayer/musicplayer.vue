<template>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <div class="overflow-x-auto place-items-bottom">
    <div class="select-none bg-gradient-to-r from-gray-900 to-gray-700 dark:bg-gradient-to-r dark:from-neutral-900 dark:to-neutral-900 w-min-[375px] w-min xs:w-screen sm:w-screen lg:w-screen md:w-scren 2xl:w-screen xl:w-screen">
        <div class="flex  items-stretch ">
    
            <!-- song details-->
            <div class="basis-1/4 w-[400px] bg-transparent"> <!-- this line connected to music player-->
    
                    <button class = "sm:px-4 md:px-4 lg:px-4 xl:px-4 2xl:px-4 py-3.5 flex bg-transparent ">
    
                        <!--Albumb picture -->
                        <div class="shadow-md shadowl-2xl ">
                            <img src='\img\testartwork\Cover.jpg' ref="albumImage" class="shadow-2xl hidden sm:block md:block lg:block xl:block 2xl:block rounded-lg " alt="Girl in a jacket" width="60" />
                        </div>
    
                        <div class="  flex-1 pl-4 sm:pl-3 md:pl-3 lg:pl-3 xl:pl-3  2xl:pl-3 pt-3 sm:pt-0 md-pt-0 lg:pt-0 xl:pt-0 2xl:pt-0 ">
                        
                            <div class="text-start text-neutral-50 hover:text-cyan-500">
                                <div class="line-clamp-1 flex-none text-xs font-semibold   bg-transparent">
                                    One More Light                
                                </div>
                                <div class="line-clamp-1 flex-none text-xs bg-transparent ">
                                    Linkin park 
                                </div>
                            </div>
                        </div>
    
                    </button>
            </div>
    
    
            <!-- Music Player-->
            <div class="basis-2/4 justify-self-stretch touch-pan-x">
                <div class="inset-x-0 bg-transparent">
                    <!--- forward backward playpause-->
                    <div class="flex justify-center items-center py-3.5 ">
    
                        <button class="hidden sm:block lg:block  md:block  xl:block 2xl:block flex-row px-3" id="previousSong">
                        <svg class="antialiased -mr-2 fill-neutral-50 hover:fill-gray-100 active:fill-gray-400 dark:hover:fill-cyan-100 dark:active:fill-cyan-400" height="30" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>shuffle</title> <path d="M0 20.688v2c0 0.281 0.219 0.5 0.5 0.5h2.875c1.688 0 3.094-0.781 4.25-1.969 1.188-1.188 2.156-2.781 3.125-4.313 0.781-1.25 1.563-2.438 2.375-3.344 0.781-0.938 1.563-1.5 2.5-1.5h2.656v2.281c0 0.719 0.5 0.844 1.094 0.375l4.344-3.625c0.375-0.313 0.375-0.906 0-1.219l-4.344-3.594c-0.594-0.5-1.094-0.375-1.094 0.375v2.406h-2.656c-1.719 0-3.063 0.75-4.25 1.969-1.156 1.188-2.219 2.781-3.156 4.281-0.813 1.281-1.563 2.5-2.375 3.406-0.781 0.906-1.563 1.469-2.469 1.469h-2.875c-0.281 0-0.5 0.219-0.5 0.5zM0 9.531v2c0 0.281 0.219 0.5 0.5 0.5h2.875c1.406 0 2.531 1.375 3.75 3.156 0.031-0.094 0.063-0.156 0.094-0.219 0.031-0.031 0.125-0.094 0.156-0.156 0.469-0.781 1-1.531 1.5-2.344-0.75-0.969-1.469-1.844-2.406-2.438-0.906-0.625-1.906-0.969-3.094-0.969h-2.875c-0.344 0-0.5 0.156-0.5 0.469zM18.281 20.125h-2.656c-1.375 0-2.563-1.344-3.75-3.094-0.063 0.094-0.094 0.156-0.125 0.219-0.063 0.063-0.094 0.125-0.156 0.219-0.219 0.375-0.5 0.781-0.719 1.156-0.25 0.344-0.5 0.75-0.719 1.094 0.719 0.969 1.469 1.813 2.375 2.406 0.875 0.625 1.906 1.031 3.094 1.031h2.656v2.188c0 0.719 0.5 0.875 1.094 0.375l4.344-3.656c0.375-0.313 0.375-0.875 0-1.188l-4.344-3.594c-0.594-0.469-1.094-0.375-1.094 0.375v2.469z"></path> </g></svg>
                        </button>
    
                        <button class="flex-row px-3" id="previousSong">
                        <svg class=" antialiased -mr-2 fill-neutral-50 hover:fill-gray-100 active:fill-gray-400 dark:hover:fill-cyan-100 dark:active:fill-cyan-400" height="30" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32.00 32.00" xml:space="preserve" stroke="#000000" stroke-width="0.00032" transform="rotate(180)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M23,8h-5c-0.6,0-1,0.4-1,1v5L9.6,8.2C9.3,8,8.9,7.9,8.6,8.1C8.2,8.3,8,8.6,8,9v14c0,0.4,0.2,0.7,0.6,0.9C8.7,24,8.9,24,9,24 c0.2,0,0.4-0.1,0.6-0.2L17,18v5c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1V9C24,8.4,23.6,8,23,8z"></path> </g></svg>
                        </button>
    
                        <button @click="togglePlayPause" class="object-contain font-bold px-3 rounded flex-row items-center transition ease-in-out delay-1 hover:scale-110 active:scale-150  duration-300" id="playpause">
                            <img class="antialiased active:bg-gray-700 dark:active:bg-cyan-400 rounded-full" 
                                :src="isPlaying ? '/img/music-player-icon/play-button-bg-removed.svg' : '/img/music-player-icon/pause-button-bg-removed.svg' "  
                                width="30" alt="buttonpng">
                        </button>
    
    
                        <button class="flex-row px-3" id="nestSong">
                            <svg class="-ml-2 antialiased shadow-white fill-neutral-50 hover:fill-gray-100 active:fill-gray-400 dark:hover:fill-cyan-100 dark:active:fill-cyan-400" height="30" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M23,8h-5c-0.6,0-1,0.4-1,1v5L9.6,8.2C9.3,8,8.9,7.9,8.6,8.1C8.2,8.3,8,8.6,8,9v14c0,0.4,0.2,0.7,0.6,0.9C8.7,24,8.9,24,9,24 c0.2,0,0.4-0.1,0.6-0.2L17,18v5c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1V9C24,8.4,23.6,8,23,8z"></path> </g></svg>
                        </button>
    
                        
                        <button class="-mb-1.5 hidden sm:block lg:block  md:block  xl:block 2xl:block  flex-row px-3 " id="nestSong">
                            <svg class=" -ml-2 antialiased shadow-white fill-neutral-50 hover:fill-gray-100 active:fill-gray-400 dark:hover:fill-cyan-100 dark:active:fill-cyan-400" height="30" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.00001 4C3.34315 4 2.00001 5.34314 2.00001 7L2 17C2 18.6569 3.34315 20 5 20H8C8.55228 20 9 19.5523 9 19C9 18.4477 8.55228 18 8 18H5C4.44771 18 4 17.5523 4 17V7C4 6.44772 4.44771 6 5 6L19 6C19.5523 6 20 6.44772 20 7L20 17C20 17.5523 19.5523 18 19 18H14.0027L15.2821 16.7161C15.6734 16.3235 15.6734 15.687 15.2821 15.2944C14.8909 14.9019 14.2566 14.9019 13.8654 15.2944L11.5937 17.574L11.5805 17.5873C10.804 18.3724 10.8057 19.6406 11.5859 20.4234L13.8604 22.7058C14.2513 23.0981 14.8852 23.0981 15.2762 22.7058C15.6672 22.3134 15.6672 21.6773 15.2762 21.285L13.9956 20H19C20.6569 20 22 18.6569 22 17L22 7C22 5.34315 20.6569 4 19 4L5.00001 4Z"></path> </g></svg>
                        </button>
                        

                    </div>
    
                    <!-- song - slider-->

                    <div class="justify-center items-center flex flex-col z-10" >
                        <!-- <input type="range" id="song-percentage-played " class="slider h-2  w-[200px] sm:w-[240px] md:w-[300px] lg:w-[350px] xl:w-[500px] 2xl:w-[600px] mb-1  outline-neutral-50 accent-neutral-50  active:accent-cyan-600" min="0" max="100"  value="100"/> 
                         -->
                        <song-slider> </song-slider>

                        <div class="flex w-[200px] sm:w-[240px] md:w-[300px] lg:w-[350px] xl:w-[500px] 2xl:w-[600px] justify-between pb-1">
                            <span class="antialiased amplitude-current-time text-xs  font-semibold tracking-wide text-neutral-100 dark:text-neutral-400">00:00</span>
                            <span class="antialiased amplitude-duration-time text-xs font-semibold tracking-wide text-neutral-100 dark:text-neutral-400">10:00</span>
                        </div>
                    </div>



                </div>
            </div>
    
            <div class="flex relative place-items-center basis-1/4 w-screen  ">
                <div class="flex absolute right-3 ">
                    <div class=" right-0 ">
    
    
                        <svg v-if="inputValue >= 50" class="w-7 hidden sm:block md:block lg:block xl:block 2xl:block px-1 sm:px-1 md:px-1 lg:px-1 xl:px-1 2xl:px-1  fill-neutral-50 active:fill-cyan-200 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M10.836.357a1.978 1.978 0 0 0-2.138.3L3.63 5H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h1.63l5.07 4.344a1.985 1.985 0 0 0 2.142.299A1.98 1.98 0 0 0 12 15.826V2.174A1.98 1.98 0 0 0 10.836.357Zm2.728 4.695a1.001 1.001 0 0 0-.29 1.385 4.887 4.887 0 0 1 0 5.126 1 1 0 0 0 1.674 1.095A6.645 6.645 0 0 0 16 9a6.65 6.65 0 0 0-1.052-3.658 1 1 0 0 0-1.384-.29Zm4.441-2.904a1 1 0 0 0-1.664 1.11A10.429 10.429 0 0 1 18 9a10.465 10.465 0 0 1-1.614 5.675 1 1 0 1 0 1.674 1.095A12.325 12.325 0 0 0 20 9a12.457 12.457 0 0 0-1.995-6.852Z"/>
                        </svg>
    
    
                        <svg v-else-if="inputValue < 50 && inputValue>0" class="w-7  overflow-visible hidden sm:block md:block lg:block xl:block 2xl:block px-1 sm:px-1 md:px-1 lg:px-1 xl:px-1 2xl:px-1  fill-neutral-50 active:fill-cyan-200 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 18">
                            <path class="cls-1" d="m10.84.19c-.71-.33-1.55-.21-2.14.3L3.63,4.83h-1.63c-1.1,0-2,.9-2,2v4c0,1.1.9,2,2,2h1.63l5.07,4.34c.59.51,1.43.63,2.14.3.71-.32,1.16-1.04,1.16-1.82V2c0-.78-.45-1.49-1.16-1.82Z"/>
                            <path class="cls-1" d="m13.56,4.88c-.46.3-.59.92-.29,1.39.97,1.57.97,3.55,0,5.13-.3.46-.17,1.08.29,1.38.46.3,1.08.17,1.38-.29.7-1.09,1.07-2.36,1.05-3.66.01-1.3-.35-2.57-1.05-3.66-.3-.46-.92-.59-1.38-.29Z"/>
                        </svg>
    
    
                        <svg v-else-if="inputValue == 0" class="w-7  overflow-visible hidden sm:block md:block lg:block xl:block 2xl:block px-1 sm:px-1 md:px-1 lg:px-1 xl:px-1 2xl:px-1  fill-neutral-50 active:fill-cyan-200 " xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path class="cls-1" d="m10.84.19c-.71-.33-1.55-.21-2.14.3L3.63,4.83h-1.63c-1.1,0-2,.9-2,2v4c0,1.1.9,2,2,2h1.63l5.07,4.34c.59.51,1.43.63,2.14.3.71-.32,1.16-1.04,1.16-1.82V2c0-.78-.45-1.49-1.16-1.82Z"/>
                            <path class="cls-1" d="m20.91,5.92h0c.43.43.43,1.13,0,1.56l-4.26,4.26c-.43.43-1.13.43-1.56,0h0c-.43-.43-.43-1.13,0-1.56l4.26-4.26c.43-.43,1.13-.43,1.56,0Zm-5.82,0h0c.43-.43,1.13-.43,1.56,0l4.26,4.26c.43.43.43,1.13,0,1.56h0c-.43.43-1.13.43-1.56,0l-4.26-4.26c-.43-.43-.43-1.13,0-1.56Z"/>
                        </svg>
    
                    </div>
    
                    <div class="bg-transparent px-0 -mt-1 sm:px-2 md:px-2 lg:px-2 xl:px-2 2xl:px-2 "  >
                        <input v-model="inputValue" v-on:input="100" type="range" min="0" max="100"  class=" rounded-2xl border-1 mx-2 w-[60px] sm:w-[90px] md:w-[90px] lg:w-[90px] xl:w-[90px] 2xl:w-[90px]  bg-neutral-50 outline-neutral-50 accent-neutral-50  active:accent-cyan-600 h-1"/>
                    </div>
    
                </div>
            </div>
    
        </div>
    </div>
    </div>
    </body>
    </html>
    </template>
    
    <script>
    
    import SongSlider from './songslider.vue';
    export default {
            components: {
            'song-slider': SongSlider
        },
      data() {
        return {
          isPlaying: true, // Initial state is playing
          inputValue: 0,  // Initial volume value
        };
      },
      methods: {
        togglePlayPause() {
          this.isPlaying = !this.isPlaying; // Toggle the isPlaying property
          // Add logic to handle play/pause functionality here (e.g., play or pause the audio)
          if (this.isPlaying) {
            // Logic to play the audio
            console.log("Audio is playing");
          } else {
            // Logic to pause the audio
            console.log("Audio is paused");
          }
        },
        // Method to handle volume change
        handleVolumeChange() {
        console.log("Volume changed to: " + this.inputValue);
        // Add any additional logic to handle volume change if needed
        },
        // ... other methods
      },
    };
    </script>
    