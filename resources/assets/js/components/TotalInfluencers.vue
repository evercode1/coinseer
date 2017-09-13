<template>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="/blogresource"><div class="info-box">
                <span class="info-box-icon"><i class="fa fa-users" aria-hidden="true"></i></span>

                <div class="info-box-content">
                    <span class="text-center">Influencers</span>
                    <span class="info-box-number text-center">{{ influencers }}</span>
                </div>
                <!-- /.info-box-content -->
            </div></a>
            <!-- /.info-box -->
        </div>


</template>

<script>

    export default {

        mounted: function () {

            this.loadData();

        },

        data: function () {
            return {

                influencers: '',

            }

        },

        methods:  {

            loadData(){

                axios.get('/api/total-influencers').then( (response) => {

                    this.influencers = response.data;

                });

            }



        }
    }
</script>