<template>

    <div class="sidebar-module">
        <h4>Videos By Level</h4>
        <ol class="list-unstyled">

            <li v-for="level in levels"><a v-bind:href="'/videos-by-level/' + level[0]">
                {{ formatLevelName(level[0]) }} - {{ level[1] }}</a></li>

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

                levels: [],

            }

        },

        methods:  {

            loadData(){

                axios.get('/api/videos-by-level-list-data').then( (response) => {

                    this.levels = response.data;


                    console.log(this.levels);

                });

            },

            formatLevelName(level){

                switch (level){

                    case 10 :

                        return "Beginner";
                        break;

                    case 20 :

                        return "Intermediate";
                        break;

                    case 30 :

                        return "Technical";
                        break;

                }


            }

        }
    }
</script>