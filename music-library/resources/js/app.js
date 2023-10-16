import '../css/app.css';
import 'flowbite';


import { createApp } from 'vue' 
import PostsIndex from './tester.vue' 
import SearchBar from  './components/SearchBar.vue' 
import MusicPlayer from  './components/MusicPlayer.vue'
import LeftNavBar from './components/leftnavBar.vue'
import HomeLibrary from './components/homelibrary.vue'
import PlaylistShowcase from './components/playlistshowcase.vue'
import RecentPlaylist from './components/recentplaylist.vue'
import YourPlayListLeftNav from './components/yourplaylistleftnav.vue'
import SongSlider from './components/songslider.vue'

document.addEventListener('DOMContentLoaded', function() {

    //component for home page
    const homeApp = createApp({})
        .component('music-player', MusicPlayer)
        .component('post-index', PostsIndex)
        .component('search-bar', SearchBar)
        .component('left-nav-bar', LeftNavBar)
        .component('home-library', HomeLibrary)
        .component('playlist-showcase', PlaylistShowcase)
        .component('recent-playlist', RecentPlaylist)
        .component('your-playlist-left-nav', YourPlayListLeftNav)
        .component('song-slider', SongSlider);

    // Mount the home app if #home element exists
    const homeElement = document.getElementById('home');
    if (homeElement) {
        
        homeApp.mount('#app');
    }


    //component for upload page
    const uploadApp = createApp({})
        .component('left-nav-bar', LeftNavBar)
        .component('music-player', MusicPlayer)
        .component('search-bar', SearchBar);

    // Mount the upload app if #upload element exists
    const uploadElement = document.getElementById('upload');
    if (uploadElement) {
        uploadApp.mount('#upload');
    }
});
