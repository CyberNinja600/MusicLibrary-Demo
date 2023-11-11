import '../css/app.css';
import 'flowbite';
import { createApp } from 'vue';
import PostsIndex from './tester.vue';
import SearchBar from './components/SearchBar.vue';
import MusicPlayer from './components/MusicPlayer/musicplayer.vue';
import SongSlider from './components/MusicPlayer/songslider.vue';


import LeftNavBar from './components/Home/leftnavBar.vue';
import HomeLibrary from './components/Home/homelibrary.vue';
import PlaylistShowcase from './components/Home/playlistshowcase.vue';
import RecentPlaylist from './components/Home/recentplaylist.vue';
import YourPlayListLeftNav from './components/Home/yourplaylistleftnav.vue';

import UploadSong from './components/Upload/uploadsong.vue';
import UploadSonginfo from './components/Upload/uploadsonginfo.vue';
import UploadSongFeature from './components/Upload/uploadsongfeature.vue';
import UploadSongImages from './components/Upload/uploadsongimages.vue';

import FullScreen from './components/Global-Special/fullscreen.vue';

const app = createApp({
  // your app options
});

// Set global variable $userId


// Register components
app.component('music-player', MusicPlayer);
app.component('post-index', PostsIndex);
app.component('search-bar', SearchBar);
app.component('left-nav-bar', LeftNavBar);
app.component('home-library', HomeLibrary);
app.component('playlist-showcase', PlaylistShowcase);
app.component('recent-playlist', RecentPlaylist);
app.component('your-playlist-left-nav', YourPlayListLeftNav);
app.component('song-slider', SongSlider);
app.component('full-screen', FullScreen);

// Mount the app
const homeElement = document.getElementById('home');
const uploadElement = document.getElementById('upload');

if (homeElement) {
  app.mount('#app');
}

if (uploadElement) {
  const uploadApp = createApp({
    components: {
      LeftNavBar,
      MusicPlayer,
      UploadSong,
      SearchBar,
      UploadSonginfo,
      UploadSongFeature,
      UploadSongImages,
    },
  });

  // Set global variable $userId for uploadApp


  uploadApp.mount('#upload');
}
