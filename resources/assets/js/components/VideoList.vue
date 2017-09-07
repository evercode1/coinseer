<template>

    <div class="sidebar-module">
        <h4>Videos</h4>
        <ol class="list-unstyled">


            <li v-for="video in videos"><a v-bind:href="video.url" target="_blank">{{ video.title }}</a></li>
            <li><a href="/all-videos">more...</a></li>

        </ol>
    </div>


</template>

<script>

    export default {

        mounted: function () {

            this.loadData();

        },

        data: function () {
            return {

                videos: [],

            }

        },

        methods:  {

            loadData(){

                axios.get('/api/video-list-data').then( (response) => {

                    this.videos = response.data;







                });

            }



        }
    }
</script>