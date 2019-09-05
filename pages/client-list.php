<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">Client list</li>
                    </ol>
                </div>
                <h4 class="page-title">Client list</h4>
                <p class="text-muted mb-3">List of approved corporate clients</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="client-list-table" class="table table-hover table-bordered mb-0" data-filtering="true" data-show-toggle="true">
                        <thead>
                            <tr class="table-header-row">
                                <th class="text-center sorting_asc sorter">Issuer</th>
                                <th class="text-center sorting_asc sorter">Sector</th>
                                <th class="text-center sorting_asc sorter">Current team</th>
                            </tr>
                            <tr class="table-filter-row">
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control select-filter" type="search" value="" placeholder="filter">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control select-filter" type="search" value="" placeholder="filter">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <select class="select2 form-control mb-3 custom-select">
                                        <option value="Draft">Team-1</option>
                                        <option value="Select">Team-2</option>
                                    </select>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 10; $i++) { ?>
                                <tr data-open="<?php echo $i; ?>" data-toggle-tr="false">
                                    <td class="text-center">Client <?php echo $i+1; ?></td>
                                    <td>Sector 1</td>
                                    <td>
                                        <select class="select2 form-control mb-3 custom-select">
                                            <option value="Draft">Tiger 1</option>
                                            <option value="Select">Tiger 2</option>
                                        </select>
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
        var table = $('#client-list-table').DataTable({
            lengthChange: false,
            searching: true,
            ordering: true,
            bInfo: false,
            editing: true,
            select: true,
            "bSortCellsTop": true
        });

        $('.select-filter').each(function(i) {
            $(this).on('keyup', function() {
                table
                    .columns(i)
                    .search(this.value)
                    .draw();
            })
        })

        $('.custom-select').on('change', function() {
            table
                .column(3)
                .search(this.value)
                .draw();
        })
    }
</script>

<style>
    #client-list-table_filter {
        display: none;
    }
    thead > tr:nth-child(2) > th[class*="sort"]::after,
    thead > tr:nth-child(2) > th[class*="sort"]::before{
        display: none
    }
</style>