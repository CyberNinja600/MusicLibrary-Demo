<template>
    <div class="p-1 dark:bg-neutral-800 dark:text-neutral-50 rounded-lg scroll-container custom-scrollbar dark:darkcustom-scrollbar h-fill">
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        <playlist-button></playlist-button>
        

    </div>
</template>

<script>
    import YourPlayListLeftNav from './../ManageAlbum/playlistbutton.vue';

    export default {
            components: {
            'playlist-button': YourPlayListLeftNav
        }
    }
</script>
