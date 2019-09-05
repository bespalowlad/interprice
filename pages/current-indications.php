<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">Current indications</li>
                    </ol>
                </div>
                <h4 class="page-title">Current indications</h4>
                <p class="text-muted mb-3">Latest indications and your secondary market outstanding</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
                            <label class="mb-3">Tenor</label>
                            <select class="select2 form-control mb-3 custom-select select2-multiple" multiple="multiple" data-placeholder="Tenor">
                                <option value="1">2yr</option>
                                <option value="2">3 yr</option>
                                <option value="2">5yr</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <label class="mb-3">Type</label>
                            <select class="select2 form-control mb-3 custom-select">
                                <option value="1">Month</option>
                                <option value="2">Year</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <label class="mb-3">Currency</label>
                            <select class="select2 form-control mb-3 custom-select">
                                <option value="1">Month</option>
                                <option value="2">Year</option>
                            </select>
                        </div>
                        <div class="checkbox form-check-inline col-md-2 col-xs-12">
                            <input type="checkbox" id="inlineCheckbox1" value="option1" checked>
                            <label for="inlineCheckbox1"> Show FRN </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Spread:</h4>
                    <table id="datatable" class="table table-hover table-bordered mb-0" data-filtering="true" data-show-toggle="true">
                        <caption><span class="disclaimer">Disclaimer:</span> All indications shown to the tight end of the range submitted by underwriters</caption>
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
                                    <input class="form-control select-filter" type="search" value="" placeholder="Underwriter name">
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
                        </tbody>
                    </table>
                    <div class="d-none">
                        <?php for ($i=0; $i < 20; $i++) { ?>
                            <table class="d-none" data-content="<?php echo $i; ?>">
                                <tr class="table-primary table-data" data-content-tr="<?php echo $i; ?>">
                                    <td class="text-center">
                                    </td>
                                    <td collspan="2">
                                        All-in yield: 
                                    </td>
                                    <td></td>
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
                                <tr class="table-primary table-data" data-content-tr="<?php echo $i; ?>">
                                    <td class="text-center">
                                    </td>
                                    <td>
                                        Spread / 3mo Libor: 
                                    </td>
                                    <td></td>
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
                                <tr class="table-primary table-data" data-content-tr="<?php echo $i; ?>">
                                    <td class="text-center">
                                    </td>
                                    <td collspan="2">
                                        <b>Note:</b>
                                    </td>
                                    <td>
                                        We are moving our 5yr indication a couple of bps tighter this week, given the particularly strong investor demand in that part of the curve. 
                                    </td>
                                </tr>
                            </table>
                        <?php } ?>
                    </div>

                    <div class="row">
                        <h4 class="mt-5 header-title">Market Outstandings</h4>
                        <table id="market-outstanding-table" class="table table-hover table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th class="sorting_asc text-middle">Issue date</th>
                                    <th class="sorting_asc text-middle">Issuer</th>
                                    <th class="sorting_asc text-middle">Ratings</th>
                                    <th class="sorting_asc text-middle">Size</th>
                                    <th class="sorting_asc text-middle">Coupon</th>
                                    <th class="sorting_asc text-middle">Coupon type</th>
                                    <th class="sorting_asc text-middle">Maturity</th>
                                    <th class="sorting_asc text-middle">Yrs to maturity</th>
                                    <th class="sorting_asc text-middle">Issue spread</th>
                                    <th class="sorting_asc text-middle">Price</th>
                                    <th class="sorting_asc text-middle">Market</th>
                                    <th class="sorting_asc text-middle">G-Spread</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0; $i<2; $i++) {?>
                                    <tr>
                                        <td>05/14/19</td>
                                        <td>Caterpillar Financial Services Corp</td>
                                        <td>A3 / A</td>
                                        <td>$750mm</td>
                                        <td>2.65%</td>
                                        <td>Fixed</td>
                                        <td>05/17/21</td>
                                        <td>calculated</td>
                                        <td>65bps</td>
                                        <td>100.634</td>
                                        <td>45bps</td>
                                        <td>45bps</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</page-template>

<script>
    window.onload = function () {
        var table = $('#datatable').DataTable({
            lengthChange: false,
            searching: true,
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

        $('.select-filter').on('keyup', function() {
            table
                .columns(2)
                .search(this.value)
                .draw();
        })

        $('#market-outstanding-table').DataTable({
            lengthChange: false,
            searching: false,
            ordering: true,
            bInfo: false,
            // "scrollX": true,
        });


        $('input[name="sent"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });
    }
</script>

<style>
    #datatable_filter {
        display: none;
    }
    .form-check-inline {
        margin-top: auto;
    }
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

    .disclaimer {
        font-weight: bold;
    }

    #market-outstanding-table_wrapper {
        width: 100%;
    }

    #market-outstanding-table_wrapper .row:nth-child(2) .col-sm-12 {
        overflow-x:auto;
    }

    @media (max-width: 767px) {
        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            justify-content: center;
        }
    }
</style>