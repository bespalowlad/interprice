<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">My coverage team</li>
                    </ol>
                </div>
                <h4 class="page-title">My coverage team</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary waves-effect waves-light">Add new team</button>
                    <table id="my-team-table" class="table table-hover table-bordered mb-0" data-filtering="true" data-show-toggle="true">
                        <thead>
                            <tr class="table-header-row">
                                <th class="text-center" style="width: 20%">Team</th>
                                <th class="text-center" style="width: 30%">Primary Coverage Officer</th>
                                <th class="text-center" style="width: 30%">Secondary</th>
                                <th class="text-center" style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 10; $i++) { ?>
                                <tr data-open="<?php echo $i; ?>" data-toggle-tr="false">
                                    <td class="text-center">Team <?php echo $i+1 ?></td>
                                    <td>Olga Chin</td>
                                    <td>David MacMillan; Paul Young</td>
                                    <td>
                                        <button type="button" class="btn btn-link waves-effect row-view">edit</button>
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
        var table = $('#my-team-table').DataTable({
            lengthChange: false,
            searching: true,
            ordering: true,
            bInfo: false,
            editing: true,
        });

        $('#my-team-table').on( 'click', '.row-delete', function () {
            table
                .row( $(this).parents('tr') )
                .remove()
                .draw();
        } );
    }
</script>

<style>
    #my-team-table_filter {
        display: none;
    }

    .card-body > button {
        display: block;
        margin-left: auto;
        margin-bottom: 30px;
    }
</style>