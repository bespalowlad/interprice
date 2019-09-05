<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">My teams</li>
                    </ol>
                </div>
                <h4 class="page-title">My teams</h4>
                <p class="text-muted mb-3">Add new team</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Team description</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Retail sector">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Members</label>
                            <div class="row">
                            <select class="form-control col-9" id="exampleFormControlSelect1">
                                <option>Kimberly T McCloud</option>
                                <option>Kimberly T McCloud</option>
                                <option>Kimberly T McCloud</option>
                                <option>Kimberly T McCloud</option>
                                <option>Kimberly T McCloud</option>
                            </select>
                            <div class="col-3">
                            <button type="button" class="btn btn-primary add">Add</button>
                            </div>
                            </div>
                        </div>
                        
                        <table id="my-team-table" class="table table-hover table-bordered mb-3 mt-3" data-filtering="true" data-show-toggle="true">
                            <thead>
                                <tr class="table-header-row">
                                    <th class="text-center" style="width: 15%">Team</th>
                                    <th class="text-center" style="width: 15%">Title</th>
                                    <th class="text-center" style="width: 30%">Primary Coverage Officer</th>
                                    <th class="text-center" style="width: 15%">Able to assign</th>
                                    <th class="text-center" style="width: 25%">Able to send to client directly</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i=0; $i < 5; $i++) { ?>
                                    <tr>
                                        <td class="text-center">Olga Chin</td>
                                        <td class="text-center">Managing Director</td>
                                        <td class="text-center">
                                        <div class="form-check-inline my-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1<?=$i;?>" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                <label class="custom-control-label" for="customCheck1<?=$i;?>"></label>
                                            </div>
                                        </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2<?=$i;?>" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label class="custom-control-label" for="customCheck2<?=$i;?>"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check-inline my-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3<?=$i;?>" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label class="custom-control-label" for="customCheck3<?=$i;?>"></label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </form> 
                    <div class="row mt-3 justify-content-end">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="button" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>                                          
                </div>
            </div>
        </div>
    </div>
</page-template>

<script>
    window.onload = function () {
        $('#my-team-table').DataTable({
            lengthChange: false,
            searching: false,
            ordering: false,
            bInfo: false,
            editing: true,
            "scrollX": true,
            paging: false,
            "autoWidth": false,
            language: {
                emptyTable: "No data available in table"
            }
         })
    }
</script>

<style>
    button.add {
        float: right;
    }
    button {
        float: right;
    }
    button[type=submit] {
        margin-left: 10px;
    }
    .form-check-inline {
        margin-right: 0;
    }
    .text-center {
        vertical-align: middle !important;
    }
</style>