<template>

    <div class="sidebar-module sidebar-module-inset">

        <h4>About</h4>

        <div v-html="contents">

        </div>

        <div class="pull-right mb-10">

        <a href="/about">more...</a>

        </div>
        <br />

    </div>

</template>

<script>

    export default {

        mounted: function () {

            this.loadData();

        },

        data: function () {
            return {

                contents: '',

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

