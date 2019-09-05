<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">Analytics</li>
                    </ol>
                </div>
                <h4 class="page-title">Analytics</h4>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <label class="mb-3">Group by</label>
                    <select class="select2 form-control mb-3 custom-select">
                        <option value="1">Month</option>
                        <option value="2">Year</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <?php for($i=0; $i<2; $i++) {?>
                    <div class="col-6">
                        <div class="custom-chart chart-<?php echo $i+1; ?> apex-charts"></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</page-template>

<script>
    window.onload = function() {
        var options = {
            chart: {
                height: 380,
                type: 'line',
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#4a9b78', '#cc6528', '#7370ae', '#4d79f6', '#9C27B0', '#E91E63'],
            dataLabels: {
                enabled: true,
            },
            stroke: {
                width: [3, 3, 3, 3, 3, 3, 3, 3, 3],
                curve: 'smooth'
            },
            series: [
                {
                    name: "2 yr",
                    data: [28, 29, 33, 36]
                },
            ],
            title: {
                text: '',
                align: 'left',
                offsetY: -300,
                offsetX: -300
            },
            grid: {
                row: {
                    colors: ['transparent', 'transparent', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.2
                },
                borderColor: '#f1f3fa'
            },
            markers: {
                style: 'inverted',
                size: 6
            },
            xaxis: {
                categories: ['Jan 2019', 'Feb 2019', 'Mar 2019', 'Apr 2019', 'May 2019'],
                axisBorder: {
                    show: true,
                    color: '#bec7e0',
                },  
                axisTicks: {
                    show: true,
                    color: '#bec7e0',
                },    
            },
            yaxis: {
                min: 0,
                max: 60
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
                offsetY: -10,
                offsetX: 0
            },
            responsive: [{
                breakpoint: 600,
                options: {
                    chart: {
                    toolbar: {
                        show: false
                    }
                    },
                    legend: {
                        show: false
                    },
                }
            }]
        }

        var chartDOM = document.getElementsByClassName('custom-chart');
        var chartObj = [];

        for(var i = 0; i < chartDOM.length; i++) {

            chart = new ApexCharts(
                chartDOM[i],
                options
            );
            chartObj.push(chart);

            chart.render();
        }

        $("select").on("change", function(){
            for(var i = 0; i < chartObj.length; i++) {
                chartObj[i].updateSeries(add());
            }
        });

        function add() {
            var arr = chart.w.globals.series.slice();
            var data = {
                name: "6 yr",
                data: [Math.floor(Math.random() * (60 - 1 + 1)) + 1, Math.floor(Math.random() * (60 - 1 + 1)) + 1, Math.floor(Math.random() * (60 - 1 + 1)) + 1, Math.floor(Math.random() * (60 - 1 + 1)) + 1]
            };
            arr.push(data);
            return arr;
        }
    }
</script>

        