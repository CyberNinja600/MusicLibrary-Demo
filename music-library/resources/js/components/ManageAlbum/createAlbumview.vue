<template>
    <div class="flex grow rounded-lg px-1">
        <div class=" grow grid pt-2 mb-3">
            <div class="h-[100%] sm:h-[93%] overflow-y-auto  bg-gray-700 dark:bg-neutral-800 rounded-lg text-white">
                <div class="bg-red-300 px-[30px] mt-[40px]">


                    <ul class="py-[20px]">

                        <li class="flex space-x-7">
                            <div class="">
                                Photo here
                            </div>

                            <div class="">
                                <div class="">
                                    Song Title
                                </div>

                                <div class="">
                                    Artsist name
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>


<script>


export default {
    props: {
        user: {
            Object
        },
        selectedSongs: {
            Array
        }
    },

    watch:{
        selectedSongs:{
            handler: 'fetchData',
            deep: true
        }
    },

    methods: {
        fetchData() {
            // Assuming you have a function to fetch data from the database based on the song IDs
            // Replace this with your actual function to fetch data from the database
            const fetchDataFromDatabase = async () => {
                // Example using axios to make an API call, replace with your actual logic
                for (const songId of this.selectedSongs) {
                    try {
                        const response = await axios.get(`/api/songs/${songId}`);
                        console.log(response.data); // handle the fetched data as needed
                    } catch (error) {
                        console.error(`Error fetching data for song ID ${songId}:`, error);
                    }
                }
            };

            fetchDataFromDatabase();
        }
    }
}
</script>