<template>

    <div class="sidebar-module">
        <h4>Sites</h4>
        <ol class="list-unstyled">


            <li v-for="site in sites"><a v-bind:href="site.url" target="_blank">{{ site.title }}</a></li>

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

                sites: [],

            }

        },

        methods:  {

            loadData(){

                axios.get('/api/site-list-data').then( (response) => {

                    this.sites = response.data;







                });

            }



        }
    }
</script>