import '../css/app.css';
import 'flowbite';
import { createApp } from 'vue';
import SearchBar from './components/SearchBar.vue';
import MusicPlayer from './components/MusicPlayer/musicplayer.vue';
import LeftNavBar from './components/Home/leftnavBar.vue';
import HomeLibrary from './components/Home/homelibrary.vue';
import UploadSong from './components/Upload/uploadsong.vue';
import FullScreen from './components/Global-Special/fullscreen.vue';
import ManageAlbum from './components/ManageAlbum/managealbum.vue';

const app = createApp({
  // your app options
});


// Register components
app.component('music-player', MusicPlayer);
app.component('left-nav-bar', LeftNavBar);
app.component('home-library', HomeLibrary);
app.component('upload-song', UploadSong)
app.component('search-bar', SearchBar);
app.component('full-screen', FullScreen);
app.component('manage-album', ManageAlbum);

// Mount the app
const appElement = document.getElementById('app');

if (appElement) {
  app.mount('#app');
}

