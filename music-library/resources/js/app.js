import '../css/app.css';
import 'flowbite';
import { createApp } from 'vue';
import PostsIndex from './tester.vue';
import SearchBar from './components/SearchBar.vue';
import MusicPlayer from './components/MusicPlayer.vue';
import LeftNavBar from './components/leftnavBar.vue';
import HomeLibrary from './components/homelibrary.vue';
import PlaylistShowcase from './components/playlistshowcase.vue';
import RecentPlaylist from './components/recentplaylist.vue';
import YourPlayListLeftNav from './components/yourplaylistleftnav.vue';
import SongSlider from './components/songslider.vue';
import UploadSong from './components/uploadsong.vue';
import UploadSonginfo from './components/uploadsonginfo.vue';
import UploadSongFeature from './components/uploadsongfeature.vue';

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
    },
  });

  // Set global variable $userId for uploadApp


  uploadApp.mount('#upload');
}
