<template>
    <Suspense>

        <template #default>
            <div class="text-black select-none bg-gradient-to-r from-gray-700 to-gray-900 dark:bg-gradient-to-r dark:from-neutral-900 dark:to-neutral-900 text-2xl overflow-y-auto h-[calc(100vh-160px)] grow scroll-container custom-scrollbar dark:darkcustom-scrollbar block">
                <div class="bg-transparent rounded-lg m-1 ">
                    
                    <recent-playlist></recent-playlist>
                    <!-- playlist showcase--->
                    <playlist-showcase></playlist-showcase>
                    
                </div>
            </div>
        </template>

        <template #fallback>
            loading...
        </template>

        
    </Suspense>

</template> 

<script>
    import PlaylistShowcase from './playlistshowcase.vue';
    import RecentPlaylist from './recentplaylist.vue';

    export default {
        components: {
            'recent-playlist': RecentPlaylist,
            'playlist-showcase': PlaylistShowcase
        },

        props: {
            user: {
                type: Object
            }
        }
    };

</script>


