<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">Request updated indications</li>
                    </ol>
                </div>
                <h4 class="page-title">Request updated indications</h4>
                <p class="text-muted mb-3">Request a set of updated indications from select underwriters</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group mb-0">
                <label for="exampleFormControlTextarea1">Request note</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <label class="mb-2 mt-3">Choose underwriters</label>
            <select class="select2 form-control mb-3 select2-multiple custom-select" multiple="multiple" data-placeholder="Choose underwriters">
                <option value="1">BAML, Citi</option>
                <option value="2">BAML</option>
            </select>
            <p class="text-muted mt-2">Not found? <a href="#">Add more underwriters to your list</a></p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table dataTable table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-middle" aria-sort="ascending">Underwriter</th>
                                <th class="text-middle" aria-sort="ascending">Coverage officer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0; $i<5; $i++) {?>
                                <tr>
                                    <td>BAML</td>
                                    <td>Curtis Marshall; Nicole Robinson</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary waves-effect waves-light mt-3" style="float: right;">Send request for indications</button>
                </div>
            </div>
        </div>
    </div>
</page-template>

<script>
    window.onload = function () {
        $('#datatable').DataTable({
            lengthChange: false,
            searching: false,
            ordering: true,
            bInfo: false,
            paging: false
        });
    }
</script>