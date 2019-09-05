<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">Draft finalized</li>
                    </ol>
                </div>
                <h4 class="page-title">Draft finalized</h4>
                <p class="text-muted mb-3">drafts and syndicate review</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Prepared indications</h4>
                    <table id="draft-finalized-table" class="table table-hover table-bordered mb-0" data-filtering="true" data-show-toggle="true">
                        <thead>
                            <tr class="table-header-row">
                                <th></th>
                                <th class="text-center w-25">Date</th>
                                <th class="text-center">Client</th>
                                <th class="text-center">Completed by</th>
                                <th class="text-center">Status</th>
                                <th class="text-center" style="width:140px;">Action</th>
                            </tr>
                            <tr class="table-filter-row">
                                <th></th>
                                <th class="text-center tr-hold-w w-25">
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="sent" value="10/10/2001">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control select-filter" type="search" value="" placeholder="filter">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control select-filter" type="search" value="" placeholder="filter">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <select class="select2 form-control mb-3 custom-select">
                                        <option value="Draft">Draft</option>
                                        <option value="Select">Select</option>
                                    </select>
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
                                    <td>Caterpillar Financial Se</td>
                                    <td>John Smith</td>
                                    <td>Draft</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-light"><i class="mdi mdi-call-made"></i></button>
                                        <button type="button" class="btn btn-outline-light"><i class="mdi mdi-square-edit-outline"></i></button>
                                        <button type="button" class="btn btn-outline-light"><i class="mdi mdi-delete-forever"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr data-open="<?php echo $i; ?>" data-toggle-tr="false">
                                    <td class="text-center">
                                        <i class="fas fa-angle-down"></i>
                                    </td>
                                    <td>04/01/19</td>
                                    <td>Caterpillar Financial Se</td>
                                    <td>John Smith</td>
                                    <td class="select">Select</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-light"><i class="mdi mdi-call-made"></i></button>
                                        <button type="button" class="btn btn-outline-light"><i class="mdi mdi-square-edit-outline"></i></button>
                                        <button type="button" class="btn btn-outline-light"><i class="mdi mdi-delete-forever"></i></button>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    <div class="d-none">
                        <?php for ($i=0; $i < 10; $i++) { ?>
                            <table class="d-none" data-content="<?php echo $i; ?>">
                                <?php for ($s=0; $s < 3; $s++) { ?>
                                    <tr class="table-primary table-data" data-content-tr="<?php echo $i; ?>">
                                        <td></td>
                                        <td>Syndicate note</td>
                                        <td colspan="4">Our desk is quoting the existing 23s 10 bps tighter; hence we are changing the 5yr to +80 area</td>
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
    window.onload = function() {
        $('input[name="sent"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });

        var table = $('#draft-finalized-table').DataTable({
            lengthChange: false,
            searching: true,
            ordering: false,
            bInfo: false,
            editing: true,
            select: true
        });

        $('.select-filter').each(function(i) {
            $(this).on('keyup', function() {
                table
                    .columns(i + 2)
                    .search(this.value)
                    .draw();
            })
        })

        $('.custom-select').on('change', function() {
            table
                .column(4)
                .search(this.value)
                .draw();
        })

        $('#draft-finalized-table').on( 'click', '.row-delete', function () {
            table
                .row( $(this).parents('tr') )
                .remove()
                .draw();
        } );

        $('#draft-finalized-table').on( 'click', '.row-edit', function () {
            table
                .row( $(this).parents('tr') )
                .edit()
                .draw();
        } );

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
    #draft-finalized-table_filter {
        display: none;
    }
    .table-filter-row {
        background: #fff;
    }
    .table-filter-row th {
        border-bottom: none !important;
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
    span.select2-selection__rendered {
        font-weight: 400;
    }
    table tbody tr {
        cursor: pointer;
    }
</style>