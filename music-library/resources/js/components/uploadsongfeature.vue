<template>
    <form>
        
        <div class="bg-neutral-50 dark:bg-neutral-800 relative mb-3 pb-1 pt-1 text-center">
            <div class="relative bg-inherit ">
                <input
                    type="text" 
                    id="FeatureArtist" 
                    name="FeatureArtist" 
                    class="peer bg-transparent h-10 sm:w-[150px] md:w-[250px] lg:w-[350px] xl:w-[480px] 2xl:w-[580px] rounded-lg text-gray-700 dark:text-neutral-50 placeholder-transparent ring-1 px-2 ring-gray-200 focus:ring-sky-600 dark:focus:ring-cyan-600 focus:outline-none focus:border-rose-600 " 
                    placeholder="Song Title"
                    autocomplete="FeatureArtist"
                    autofocus
                    data-dropdown-toggle="users-dropdown"
                    data-dropdown-placement="bottom"
                    />
                <label for="FeatureArtist" 
                    class="absolute cursor-text left-0 -top-3 text-sm text-gray-700 dark:text-neutral-50 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base duration-200  peer-placeholder-shown:text-gray-500 dark:peer-placeholder-shown:text-neutral-50  peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 dark:peer-focus:text-cyan-600 peer-focus:text-sm transition-all"
                    >
                    Feature Artists
                </label>
            </div>
        </div>

    </form>
</template>

<script>
import axios from 'axios';

export default {
    props: {
        receivedFilename: String,
        receivedUserid: Number,
    },
    data() {
        return {
            users: [], // Store fetched users here
        };
    },
    mounted() {
        // Fetch usernames from Laravel backend
        axios.get('/featuring-users')
            .then(response => {
                this.users = response.data;
            })
            .catch(error => {
                console.error('Error fetching users:', error);
            });
    },
}
</script>