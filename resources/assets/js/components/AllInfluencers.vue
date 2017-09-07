<template>

    <div class="sidebar-module">

        <ol class="list-unstyled">

            <li v-for="influencer in influencers"><a v-bind:href="influencer.Url" target="_blank">{{ influencer.Name }}</a></li>

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

                influencers: [],

            }

        },

        methods:  {

            loadData(){

                axios.get('/api/all-influencers').then( (response) => {

                    this.influencers = response.data;
                    

                });

            }



        }
    }
</script>