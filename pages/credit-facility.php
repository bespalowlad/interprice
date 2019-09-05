<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">Credit facility</li>
                    </ol>
                </div>
                <h4 class="page-title">Credit facility</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 header-title">Credit Facility Upload</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="toggle-calendar">Expiration date:</label>
                            <div class="input-group">                                            
                                <input id="toggle-calendar" type="text" class="form-control" name="sent" value="10/10/2001">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="file" id="input-file-now" class="dropify" /> 
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
                    <table id="datatable" class="table dataTable table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="sorting_asc text-middle" aria-sort="ascending">Date uploaded</th>
                                <th class="sorting_asc text-middle" aria-sort="ascending">Name</th>
                                <th class="sorting_asc text-middle" aria-sort="ascending">Expiration Date</th>
                                <th class="sorting_asc text-middle" aria-sort="ascending">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>05/14/19</td>
                                <td>document1.pdf</td>
                                <td>04/22/19</td>
                                <td>
                                    <div class="cell-delete">
                                        <button type="button" class="btn btn-outline-light">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>05/14/19</td>
                                <td>document2.pdf</td>
                                <td></td>
                                <td>
                                    <div class="cell-delete">
                                        <button type="button" class="btn btn-outline-light">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</page-template>

<script>
    window.onload = function() {
        $('.dropify').dropify();

        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element){
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element){
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element){
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e){
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })

        $('input[name="sent"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });

        var table = $('#datatable').DataTable({
            lengthChange: false,
            searching: false,
            ordering: true,
            bInfo: false,
        });

        $('#datatable').on( 'click', '.cell-delete', function () {
            table
                .row( $(this).parents('tr') )
                .remove()
                .draw();
        } );
    }
</script>

<style>
    .dropify-wrapper {
        margin-top: 30px;
    }
    .cell-delete {
        cursor: pointer;
    }
</style>