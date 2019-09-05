<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">Indication requests</li>
                    </ol>
                </div>
                <h4 class="page-title">Indication requests</h4>
                <p class="text-muted mb-3">Your clients’ requests for updated indications</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="indications-requests-table" class="table table-hover table-bordered mb-0" data-filtering="true" data-show-toggle="true">
                        <thead>
                            <tr class="table-header-row">
                                <th class="text-center" style="width: 20%">Date</th>
                                <th class="text-center" style="width: 20%">Client</th>
                                <th class="text-center" style="width: 40%">Note</th>
                                <th class="text-center" style="width: 20%">Action</th>
                            </tr>
                            <tr class="table-filter-row">
                                <th class="text-center tr-hold-w">
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="sent" value="4/22/2012">
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 10; $i++) { ?>
                                <tr data-open="<?php echo $i; ?>" data-toggle-tr="false">
                                    <td class="text-center">03/01/19 5:45am</td>
                                    <td>Client <?php echo $i+1 ?></td>
                                    <td>Please provide 3yr and 5.5yr indications for a benchmark transaction</td>
                                    <td>
                                        <button type="button" class="btn btn-link waves-effect row-view">view</button>
                                        <button type="button" class="btn btn-link waves-effect row-delete">delete</button>    
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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

        var table = $('#indications-requests-table').DataTable({
            lengthChange: false,
            searching: true,
            ordering: true,
            "bSortCellsTop": true,
            bInfo: false,
            editing: true,
            select: true
        });

        $('.select-filter').each(function(i) {
            $(this).on('keyup', function() {
                table
                    .columns(i + 1)
                    .search(this.value)
                    .draw();
            })
        })

        $('#indications-requests-table').on( 'click', '.row-delete', function () {
            table
                .row( $(this).parents('tr') )
                .remove()
                .draw();
        } );
    }
</script>

<style>
    #indications-requests-table_filter {
        display: none;
    }
</style>