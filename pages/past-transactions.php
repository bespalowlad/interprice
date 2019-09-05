<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">Past transactions</li>
                    </ol>
                </div>
                <h4 class="page-title">Past transactions</h4>
                <p class="text-muted mb-3">Your past transactions and corresponding indications accuracy</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="transactions-table" class="table table-hover table-bordered mb-0" data-filtering="true" data-show-toggle="true">
                        <thead>
                            <tr class="table-header-row">
                                <th></th>
                                <th class="text-center">Issue date</th>
                                <th class="text-center">Tranche</th>
                                <th class="text-center">Issue spread</th>
                                <th class="text-center">Underwriter</th>
                                <th class="text-center">Underwriter indications</th>
                                <th class="text-center">Delta</th>
                                <th class="text-center">Last indications date</th>
                                <th class="text-center">Notes</th>
                            </tr>
                            <tr class="table-filter-row">
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
                                    <input class="form-control select-filter" type="search" value="" placeholder="tranch filter">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control select-filter" type="search" value="" placeholder="spread filter">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control select-filter" type="search" value="" placeholder="underwriter filter">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control select-filter" type="search" value="" placeholder="indications filter">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control select-filter" type="search" value="" placeholder="filter">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="sent" value="10/10/2001">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                </th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 10; $i++) { ?>
                                <tr data-open="<?php echo $i; ?>" data-toggle-tr="false">
                                    <td class="text-center">
                                        <i class="fas fa-angle-down"></i>
                                    </td>
                                    <td>04/01/19</td>
                                    <td>2.50% Jun-21</td>
                                    <td>+67</td>
                                    <td>BAML</td>
                                    <td>+65</td>
                                    <td>-2</td>
                                    <td>03/01/19</td>
                                    <td class="edit-row"></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="d-none">
                        <?php for ($i=0; $i < 10; $i++) { ?>
                            <table class="d-none" data-content="<?php echo $i; ?>">
                                <?php for ($s=0; $s < 3; $s++) { ?>
                                    <tr class="table-primary table-data" data-content-tr="<?php echo $i; ?>">
                                        <td class="text-center"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Citi</td>
                                        <td>+63</td>
                                        <td>-4</td>
                                        <td>03/11/19</td>
                                        <td class="edit-row"></td>
                                    </tr>
                                <?php } ?>
                            </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</page-template>

<script>
    window.onload = function () {
        $('input[name="sent"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });

        var table = $('#transactions-table').DataTable({
            lengthChange: false,
            searching: true,
            ordering: false,
            bInfo: false,
            editing: true,
            "scrollX": true
        });

        $('.select-filter').each(function(i) {
            $(this).on('keyup', function() {
                table
                    .columns(i + 2)
                    .search(this.value)
                    .draw();
            })
        })

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
    }
</script>

<style>
    #transactions-table_filter {
        display: none;
    }
    .table-filter-row {
        background: #fff;
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
</style>