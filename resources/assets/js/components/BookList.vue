<template>

    <div class="sidebar-module">
        <h4>Books</h4>
        <ol class="list-unstyled">


            <li v-for="book in books"><a v-bind:href="book.url" target="_blank">{{ book.title }}</a></li>

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

                books: [],

            }

        },

        methods:  {

            loadData(){

                axios.get('/api/all-books-data').then( (response) => {

                    this.books = response.data;




                });

            }



        }
    }
</script>