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
                <p class="text-muted mb-3">All sent indications</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="history-of-indications-table" class="table table-hover table-bordered mb-0" data-filtering="true" data-show-toggle="true">
                        <thead>
                            <tr class="table-header-row">
                                <th class="text-center" style="width: 20%">Date</th>
                                <th class="text-center" style="width: 15%">Client</th>
                                <th class="text-center" style="width: 25%">Coverage officer</th>
                                <th class="text-center" style="width: 15%">Status</th>
                                <th class="text-center" style="width: 25%">Action</th>
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
                                <th class="text-center tr-hold-w" width="180px">
                                    <select class="select2 form-control mb-3 custom-select">
                                        <option value="Draft">unread</option>
                                        <option value="Select">read</option>
                                    </select>
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 10; $i++) { ?>
                                <tr data-open="<?php echo $i; ?>" data-toggle-tr="false">
                                    <td class="text-center">03/01/19 5:45am</td>
                                    <td>Client <?php echo $i+1 ?></td>
                                    <td>John Smith</td>
                                    <td>unread</td>
                                    <td>
                                        <button type="button" class="btn btn-link waves-effect">view</button>
                                        <button type="button" class="btn btn-link waves-effect">download</button>    
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

        var table = $('#history-of-indications-table').DataTable({
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
    }
</script>

<style>
    #history-of-indications-table_filter {
        display: none;
    }
</style>