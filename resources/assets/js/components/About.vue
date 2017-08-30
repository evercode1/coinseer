<template>

    <div class="sidebar-module sidebar-module-inset">

        <h4>{{ contents.name }}</h4>

        <div v-html="contents.body">

        </div>

    </div>

</template>

<script>

    export default {

        mounted: function () {

            this.loadData();

        },

        data: function () {
            return {

                contents: [],

            }

        },

        methods:  {

            loadData(){

                axios.get('/api/about-data').then( (response) => {

                    this.contents = response.data;

                });

            }



        }
    }
</script>

