<template>
    <div class="p-1 dark:bg-neutral-800 dark:text-neutral-50 rounded-lg scroll-container custom-scrollbar dark:darkcustom-scrollbar h-fill">
        <your-playlist-left-nav></your-playlist-left-nav>
        <your-playlist-left-nav></your-playlist-left-nav>
        <your-playlist-left-nav></your-playlist-left-nav>
        <your-playlist-left-nav></your-playlist-left-nav>
        <your-playlist-left-nav></your-playlist-left-nav>
        <your-playlist-left-nav></your-playlist-left-nav>
        <your-playlist-left-nav></your-playlist-left-nav>
        <your-playlist-left-nav></your-playlist-left-nav>
        <your-playlist-left-nav></your-playlist-left-nav>
        <your-playlist-left-nav></your-playlist-left-nav>
        <your-playlist-left-nav></your-playlist-left-nav>
        <button class="dark:hover:bg-neutral-700 hover:bg-gray-600 w-full min-w-[120px] rounded-lg">
            <div class="flex bg-transparent  h-full p-1  rounded-lg">
                <div class="p-2 xs:hidden  lg:block">
                    <img src="/img/testartwork/Cover.jpg" alt="Italian Trulli" width="60" class="rounded-lg">
                </div>
                <div class="flex-1 m-2.5 text-left rounded-lg text-sm sm:text-md md:text-md lg:text-md xl:text-md 2xl:text-md">
                    <div class="mt-2 text-neutral-50 dark:text-neutral-50 opacity-90">
                        Playlist name last
                    </div>
                    <div class="hidden xs:hidden md:block lg:block 2xl:block xl:block text-neutral-50 dark:text-neutral-300 opacity-90">
                        Playlist by linkinpark
                    </div>
                </div>
            </div>
        </button>

    </div>
</template>

<script>
    import YourPlayListLeftNav from './../Home/yourplaylistleftnav.vue';

    export default {
            components: {
            'your-playlist-left-nav': YourPlayListLeftNav
        }
    }
</script>
