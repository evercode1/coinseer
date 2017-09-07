<template>

    <div class="sidebar-module">
        <h4>Wallets</h4>
        <ol class="list-unstyled">


            <li v-for="wallet in wallets"><a v-bind:href="wallet.url" target="_blank">{{ wallet.title }}</a></li>

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

                wallets: [],

            }

        },

        methods:  {

            loadData(){

                axios.get('/api/wallet-list-data').then( (response) => {

                    this.wallets = response.data;


                });

            }



        }
    }
</script>