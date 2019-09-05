<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">History of requests</li>
                    </ol>
                </div>
                <h4 class="page-title">History of indications requests</h4>
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
                                <th class="sorting_asc text-middle" aria-sort="ascending">Request date</th>
                                <th class="sorting_asc text-middle" aria-sort="ascending">Note</th>
                                <th class="sorting_asc text-middle" aria-sort="ascending">Underwriter</th>
                                <th class="sorting_asc text-middle" aria-sort="ascending">Read</th>
                                <th class="sorting_asc text-middle" aria-sort="ascending">Responded</th>
                                <th class="sorting_asc text-middle" aria-sort="ascending">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>03/01/19</td>
                                <td>Please provide 3yr and 5.5yr indications for a benchmark transaction</td>
                                <td>BAML</td>
                                <td>03/01/19 02:34pm</td>
                                <td>
                                    <div class="icon-state">
                                        <button type="button" class="btn btn-outline-light">
                                            <i class="mdi mdi-eye"></i>
                                        </button>  
                                    </div>
                                </td>
                                <td>
                                    <div class="icon-state">
                                        <button type="button" class="btn btn-outline-light">
                                            <i class="mdi mdi-reload"></i>
                                        </button>                                
                                        <button type="button" class="btn btn-outline-light">
                                            <i class="mdi mdi-trash-can"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>03/01/19</td>
                                <td>Please provide 3yr and 5.5yr indications for a benchmark transaction</td>
                                <td>Citi</td>
                                <td>Unread</td>
                                <td></td>
                                <td>
                                    <div class="icon-state">
                                        <button type="button" class="btn btn-outline-light">
                                            <i class="mdi mdi-reload"></i>
                                        </button>                                
                                        <button type="button" class="btn btn-outline-light">
                                            <i class="mdi mdi-trash-can"></i>
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
    window.onload = function () {
        $('#datatable').DataTable({
            lengthChange: false,
            searching: false,
            ordering: true,
            bInfo: false,
        });
    }
</script>

<style>
    .text-middle {
        vertical-align: middle !important;
    }
    .text-middle:before {
        bottom: 50% !important;
        transform: translateY(50%);
    }
    .text-middle:after {
        bottom: 50% !important;
        transform: translateY(50%);
    }
    .icon-state {
        display: block;
        min-width: 100px;
    }
</style>