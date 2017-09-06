<template>

    <div class="sidebar-module">
        <h4>Influencers</h4>
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

                axios.get('/api/influencer-list').then( (response) => {

                    this.influencers = response.data;

                    console.log(response.data);

                });

            }



        }
    }
</script>