<template>

    <div class="sidebar-module">
        <h4>Recent Articles</h4>
        <ol class="list-unstyled">


            <li v-for="article in articles"><a v-bind:href="'/post/' + article.id + '-' + article.slug">{{ article.title }}</a></li>
            <li><a href="/all-articles">more...</a></li>

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

                articles: [],

            }

        },

        methods:  {

            loadData(){

                axios.get('/api/article-list-data').then( (response) => {

                    this.articles = response.data;

                });

            }



        }
    }
</script>