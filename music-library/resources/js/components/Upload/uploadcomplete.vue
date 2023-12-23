<template>
    <div class="grid justify-items-center space-y-[50px]">
      <div class="font-extrabold text-neutral-900 dark:text-neutral-50 text-2xl">
        Congratulations! Your music is ready to listen.
      </div>
  
      <button @click="home" class="bg-gray-800 hover:bg-gray-700 dark:bg-neutral-200 dark:hover:bg-gray-300 text-neutral-50 dark:text-neutral-900 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">
        <p>Home</p>
      </button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        
      }
    },
    methods:{
      home(){
        // this.$router.push({ name: 'home' })
        window.location.href = '/home';
      }
    }
  }
  </script>
  