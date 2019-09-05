<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">History of indications</li>
                    </ol>
                </div>
                <h4 class="page-title">History of indications</h4>
                <p class="text-muted mb-3">Your historical data</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-xs-12">
            <label class="mb-3 nowrap">Favorite underwriters</label>
            <div class="form-group">
                <select class="select2 mb-1 select2-multiple" multiple="multiple" data-placeholder="Choose">
                    <option value="1">Favorite underwriters</option>
                    <option value="2">Favorite underwriters</option>
                    <option value="3">Favorite underwriters</option>
                </select>
            </div>
        </div>
                
        <div class="col-md-2 col-xs-12">
            <label class="mb-3">Сurrency</label>
            <div class="form-group">
                <select class="select2 form-control mb-3 custom-select">
                    <option value="1">USD</option>
                    <option value="2">EUR</option>
                    <option value="3">RUR</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 col-xs-12">
            <label class="mb-3">Date range</label>                             
            <div class="input-group">                                            
                <input type="text" class="form-control" name="dates">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-xs-12">
            <label class="mb-3">Treasury bonds</label>
            <select class="select2 mb-1 select2-multiple" multiple="multiple" data-placeholder="Choose">
                <option value="1">2 yr</option>
                <option value="2">3 yr</option>
                <option value="3">5 yr</option>
            </select>
        </div>
        <div class="col-md-2 col-xs-12">
            <label class="mb-3">Group by</label>
            <select class="select2 form-control mb-3 custom-select">
                <option value="1">Month</option>
                <option value="2">Year</option>
            </select>
        </div>
        <div class="col-md-2 col-xs-12">
            <label class="mb-3">Spread</label>
            <select class="select2 form-control mb-3 custom-select">
                <option value="1">Spread / USD</option>
                <option value="2">Spread / EUR</option>
                <option value="3">Spread / RUR</option>
            </select>
        </div>                               
    </div> 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-12">
                        <div id="chart" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-hover table-bordered mb-0" data-filtering="true" data-show-toggle="true">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-center">Date sent</th>
                                <th class="text-center">Underwriter</th>
                                <th colspan="3" class="text-center">2 yr</th>
                                <th colspan="3" class="text-center">3 yr</th>
                                <th colspan="3" class="text-center">5 yr</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="sent" value="10/10/2001">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control" type="search" value="" placeholder="Underwriter name">
                                </th>
                                <th class="text-center"><div>Amount</div></th>
                                <th class="text-center"><div>FXD</div></th>
                                <th class="text-center"><div>FRN</div></th>
                                <th class="text-center"><div>Amount</div></th>
                                <th class="text-center"><div>FXD</div></th>
                                <th class="text-center"><div>FRN</div></th>
                                <th class="text-center"><div>Amount</div></th>
                                <th class="text-center"><div>FXD</div></th>
                                <th class="text-center"><div>FRN</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 20; $i++) { ?>
                                <tr data-open="<?php echo $i; ?>" data-toggle-tr="false">
                                    <td class="text-center">
                                        <i class="fas fa-angle-down"></i>
                                    </td>
                                    <td>Apr <?php echo rand (2010, 2019);?></td>
                                    <td>Average:</td>
                                    <td class="text-center"><?php echo rand (100, 200);?>mln</td>
                                    <td class="text-center"><?php echo rand (20, 60);?>bp</td>
                                    <td class="text-center"><?php echo rand (20, 60);?>bp</td>
                                    <td class="text-center"><?php echo rand (100, 200);?>mln</td>
                                    <td class="text-center"><?php echo rand (20, 60);?>bp</td>
                                    <td class="text-center"><?php echo rand (20, 60);?>bp</td>
                                    <td class="text-center"><?php echo rand (100, 200);?>mln</td>
                                    <td class="text-center"><?php echo rand (20, 60);?>bp</td>
                                    <td class="text-center"><?php echo rand (20, 60);?>bp</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="d-none">
                        <?php for ($i=0; $i < 20; $i++) { ?>
                            <table class="d-none" data-content="<?php echo $i; ?>">
                                <?php for ($s=0; $s < 3; $s++) { ?>
                                    <tr class="table-primary table-data" data-content-tr="<?php echo $i; ?>">
                                        <td class="text-center">
                                        </td>
                                        <td>04/09/2019</td>
                                        <td>
                                            <a href="#">JPMorgan</a>
                                        </td>
                                        <td class="text-center"><?php echo rand (100, 200);?>mln</td>
                                        <td class="text-center"><?php echo rand (20, 60);?>bp</td>
                                        <td class="text-center"><?php echo rand (20, 60);?>bp</td>
                                        <td class="text-center"><?php echo rand (100, 200);?>mln</td>
                                        <td class="text-center"><?php echo rand (20, 60);?>bp</td>
                                        <td class="text-center"><?php echo rand (20, 60);?>bp</td>
                                        <td class="text-center"><?php echo rand (100, 200);?>mln</td>
                                        <td class="text-center"><?php echo rand (20, 60);?>bp</td>
                                        <td class="text-center"><?php echo rand (20, 60);?>bp</td>
                                    </tr>
                                <?php } ?>
                            </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <a href="#" class="btn btn-primary export-to-exel">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<g>
	<path style="fill:#ffffff;" d="M25.162,3H16v2.984h3.031v2.031H16V10h3v2h-3v2h3v2h-3v2h3v2h-3v3h9.162
		C25.623,23,26,22.609,26,22.13V3.87C26,3.391,25.623,3,25.162,3z M24,20h-4v-2h4V20z M24,16h-4v-2h4V16z M24,12h-4v-2h4V12z M24,8
		h-4V6h4V8z"/>
	<path style="fill:#ffffff;" d="M0,2.889v20.223L15,26V0L0,2.889z M9.488,18.08l-1.745-3.299c-0.066-0.123-0.134-0.349-0.205-0.678
		H7.511C7.478,14.258,7.4,14.494,7.277,14.81l-1.751,3.27H2.807l3.228-5.064L3.082,7.951h2.776l1.448,3.037
		c0.113,0.24,0.214,0.525,0.304,0.854h0.028c0.057-0.198,0.163-0.492,0.318-0.883l1.61-3.009h2.542l-3.037,5.022l3.122,5.107
		L9.488,18.08L9.488,18.08z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

        Export to excel</a>
    </div>
</page-template>
<script>
    window.onload = function() {
        $('#datatable').DataTable({
            lengthChange: false,
            searching: false,
            ordering: false,
            bInfo: false,
            fnDrawCallback: function( oSettings ) {
                $('#datatable').find(".fas.fa-angle-up").removeClass("fa-angle-up");
                $("[data-toggle]").attr("data-toggle-tr", "false");
                if(window.innerWidth > 700) $(".export-to-exel").appendTo("#datatable_wrapper .col-md-5");
            }
        });

        $(document)
        .on("click", "[data-open]", function() {
            var $this = $(this);
            var $next = $this.next('tr');
            var id = $this.data('open');
            var $icon = $this.find(".fas.fa-angle-down");

            if($next.hasClass('table-data')) {
                if($next.is(":visible")) {
                    $this.siblings('[data-content-tr="'+id+'"]').hide();
                    $this.attr("data-toggle-tr", "false");
                } else {
                    $this.siblings('[data-content-tr="'+id+'"]').show();
                    $this.attr("data-toggle-tr", "true");
                }
            } else {
                var id = $this.data('open');
                var content = $('[data-content="'+id+'"] tbody').html();
                $this.attr("data-toggle-tr", "true");
                $this.after(content);
            }
            $icon.toggleClass('fa-angle-up');
        });

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
                {
                    name: "3 yr",
                    data: [12, 13, 11, 19]
                },
                {
                    name: "5 yr",
                    data: [45, 11, 14, 18]
                }
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
                position: 'top',
                horizontalAlign: 'center',
                offsetY: 10,
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
        
        var chart = new ApexCharts(
            document.querySelector("#chart"),
            options
        );
        chart.render();


        function add() {
            var arr = chart.w.globals.series.slice();
            var data = {
                name: "6 yr",
                data: [Math.floor(Math.random() * (60 - 1 + 1)) + 1, Math.floor(Math.random() * (60 - 1 + 1)) + 1, Math.floor(Math.random() * (60 - 1 + 1)) + 1, Math.floor(Math.random() * (60 - 1 + 1)) + 1]
            };
            arr.push(data);
            return arr;
        }

        $("select").on("change", function(){
            chart.updateSeries(add());
        });
        $("input").on("change", function(){
            chart.updateSeries(add());
        });

        $('input[name="sent"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });
    };
</script>

<style>
    .table-hover tr td {
        cursor:pointer;
    }

    .table-primary, .table-primary>td, .table-primary>th {
        background-color: #dbe6f4;
        color: #212529;
        cursor: default !important;
    }

    tr[data-toggle="true"] {
        background-color: #eff2f9;
        color: #212529;
    }

    .export-to-exel{
        margin-top: 16px;
    }

    .export-to-exel svg {
        display: inline-block;
        width: 16px;
        margin-right: 7px;
    }

    .export-to-exel svg path {
        fill: #fff;
    }

    th div{
        min-height:28px;
    }

    .tr-hold-w {
        min-width: 160px;
    }

    #datatable_wrapper .row:nth-child(2) .col-sm-12 {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .page-title-box {
        padding-bottom:0;
    }

    .nowrap {
        white-space: nowrap;
    }

    
    @media (max-width: 767px) {
        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            justify-content: center;
        }
    }
</style>