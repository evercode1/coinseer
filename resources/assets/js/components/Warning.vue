<template>



        <div class="mt-20 warning" v-html="warning.body">

        </div>



</template>

<script>

    export default {

        mounted: function () {

            this.loadData();

        },

        data: function () {
            return {

                warning: [],

            }

        },

        methods:  {

            loadData(){

                axios.get('/api/warning-data').then( (response) => {

                    this.warning = response.data;

                });

            }



        }
    }
</script>

