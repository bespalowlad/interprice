
<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">Underwriters</li>
                    </ol>
                </div>
                <h4 class="page-title">Underwriters</h4>
                <p class="text-muted mb-3">select underwriters with whom you want to work</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <h4 class="mt-0 header-title">Known lenders and underwriters</h4>
                        <div id="datatable_filter" class="dataTables_filter mt-3 mb-3">
                            <input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="datatable">
                        </div>
                        <div class="custom-dd dd" id="nestable_list_1">
                            <ol class="dd-list">
                                <? foreach (range(1, 10) as $i) { ?>
                                    <li class="dd-item" data-id="<? echo $i; ?>">
                                        <div class="dd-handle">
                                            BNP Paribas
                                        </div>  
                                        <div class="icon-state">
                                            <button type="button" class="btn btn-outline-light">
                                                <i class="fas fa-arrow-right"></i>
                                            </button>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    BNP Paribas New York   
                                                </div>
                                                <div class="icon-state"></div>                                             
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    BNP Paribas New York  
                                                </div>
                                                <div class="icon-state"></div>                                              
                                            </li>
                                        </ol>
                                    </li> 
                                <? } ?> 
                            </ol>
                        </div>   
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <h4 class="mt-0 header-title">Approved underwriters</h4>
                        <div id="datatable_filter" class="dataTables_filter mt-3 mb-3">
                            <input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="datatable">
                        </div>
                        <div class="custom-dd dd" id="nestable_list_2">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        KBC Bank
                                    </div>
                                    <div class="icon-state"></div>
                                    <ol class="dd-list">
                                        <li class="dd-item">
                                            <div class="dd-handle">
                                                HSBC Bank USA
                                            </div>
                                            <div class="icon-state">
                                                <button type="button" class="btn btn-outline-light" data-action="like" data-like-id="1233" type="button">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-light">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="dd-item">
                                            <div class="dd-handle">
                                                HSBC Bank USA
                                            </div>
                                            <div class="icon-state">
                                                <button type="button" class="btn btn-outline-light" data-action="like" data-like-id="1233" type="button">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-light">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle">
                                        HSBC Bank USA
                                    </div>
                                    <div class="icon-state">
                                        <button type="button" class="btn btn-outline-light" data-action="like" data-like-id="1233" type="button">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-light">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </li>    
                            </ol>
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
                    <table id="underwriters-table" class="table table-hover table-bordered mb-0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-middle">Date</th>
                                <th class="text-middle">Underwriter</th>
                                <th class="text-middle">Officer name</th>
                                <th colspan="2" class="text-middle">Action</th>
                            </tr>
                            <tr class="d-none">
                                <?php for($i=0; $i < 4; $i++) { ?>
                                    <td></td>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01/04/19</td>
                                <td>Industrial and Comm Bank of China</td>
                                <td>Tim Bonner</td>
                                <td>
                                    <button type="button" class="btn btn-outline-light">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-light">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>01/05/19</td>
                                <td>ING Bank</td>
                                <td>Citi</td>
                                <td>
                                    <button type="button" class="btn btn-outline-light">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-light">
                                        <i class="mdi mdi-close"></i>
                                    </button>
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
        var table = $('#underwriters-table').DataTable({
            lengthChange: false,
            searching: false,
            paging: false,
            bInfo: false, 
            ordering: true,
            'aoColumns': [
                null,
                null,
                null,
                {
                    'bSortable': false
                },
            ],
            "bSortCellsTop": true
        });

        $('[data-action="like"]').on("click", function(){
            $(this).toggleClass("btn-outline-light").toggleClass("btn-primary");
        });
    }
</script>

<script defer src="assets/plugins/nestable/jquery.nestable.min.js"></script>
<script defer src="assets/pages/jquery.nastable.init.js"></script>

<style>
    .dd-list {
        max-height: 300px;
    }

    .custom-dd {
        overflow-y: auto;
    }

    .icon-state {
        display: block;
        position: absolute;
        right: 0px;
        top: 0px;
        height: 40px;
    }
    .icon-state > * {
        margin-right: 3px;
    }

    .icon-state button {
        border-color: transparent;
        height:100%;
    }

    .icon-state i:last-child {
        margin-right: 0;
    }

    .custom-dd {
        max-height:400px;
    }

    .toast {
        width: 100%;
        max-width: none;
    }
</style>