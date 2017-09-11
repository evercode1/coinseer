<template>

    <div class="sidebar-module">
        <h4>Videos By Level</h4>
        <ol class="list-unstyled">

            <li v-for="level in levels"><a v-bind:href="'/videos-by-level/' + level.name">
                {{ level.name }} - {{ level.videos_count }}</a></li>

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

                    case 1 :

                        return "beginner";
                        break;

                    case 2 :

                        return "intermediate";
                        break;

                    case 3 :

                        return "technical";
                        break;

                    default:

                        return 'no level';
                        break;

                }


            }

        }
    }
</script>