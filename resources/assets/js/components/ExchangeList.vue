<template>

    <div class="sidebar-module">
        <h4>Exchanges</h4>
        <ol class="list-unstyled">


            <li v-for="exchange in exchanges"><a v-bind:href="exchange.url" target="_blank">{{ exchange.title }}</a></li>

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

                exchanges: [],

            }

        },

        methods:  {

            loadData(){

                axios.get('/api/exchange-list-data').then( (response) => {

                    this.exchanges = response.data;


                });

            }



        }
    }
</script>