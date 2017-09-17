<template>

    <div>


        <div class="blog-post-meta text-center">Users By Status</div>

        <canvas id="canvass-pie-users" height="300" width="300"></canvas>



    </div>



</template>

<script>

    var $myUserPieChart;



    export default {


        data: function(){

            return {
                labels: [],
                values: [],
                name: 'Users',
                formOptions: false,
                type: 'pie',
                period: '1year',
                startDate: '',
                endDate: ''
            };

        },

        mounted: function () {

            this.loadData();

        },



        methods: {

            loadData: function () {


                $.getJSON('api/user-pie-chart', function (data) {

                    this.labels = data.data.labels;
                    this.values = data.data.values;
                    this.setConfig();

                }.bind(this));

            },


            setConfig : function () {

                var ctx = document.getElementById('canvass-pie-users').getContext('2d');
                var config = {
                    type: this.type,
                    data: {
                        labels: this.labels,
                        datasets: [{
                            backgroundColor: [
                                "#2ecc71",
                                "#3498db",
                                "#95a5a6",
                                "#9b59b6",
                                "#f1c40f",
                                "#e74c3c",
                                "#34495e"
                            ],
                            data: this.values
                        }]
                    }
                };

                // destroy existing chart

                if (typeof $myUserPieChart !== "undefined") {

                    $myUserPieChart.destroy();

                }

                // set instance, so we can destroy when rendering new chart


                $myUserPieChart = new Chart( ctx, { type: 'pie', data: config.data });

            }

        }


    }


</script>