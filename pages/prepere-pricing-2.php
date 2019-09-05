<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">Prepare indications</li>
                    </ol>
                </div>
                <h4 class="page-title">Prepare indications</h4>
                <p class="text-muted mb-3">step 2  - preview</p>
            </div>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    Data
                </div>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label class="col-sm-2 text-left">Issuer</label>
                            <div class="col-sm-4 semibold">Mondelez Inter</div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 text-left">Issue type</label>
                            <div class="col-sm-4 semibold">Sr Unsecured</div>
                        </div>
                        <div class="form-group row">    
                            <label class="col-sm-2 text-left">Expiration date</label>  
                            <div class="col-sm-4 semibold">09/03/2019</div>
                        </div>
                        <div class="form-group row">
                            <span class="col-sm-2 text-left">Ratings</span> 
                            <div class="col-sm-4 semibold">24/09/2015</div>
                        </div>
                        <div class="form-group row">
                            <span class="col-sm-2 text-left">Rating outlook</span> 
                            <div class="col-sm-4 semibold">Stable/Stable/Stable</div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 text-left">Use of proceeds</label>
                            <div class="col-sm-4 semibold">General corporate purposes</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <ul class="nav nav-tabs col-12 mt-3 mb-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" role="tab" data-toggle="tab" aria-controls="tabpanel-1" href="#tabpanel-1">USD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" role="tab" data-toggle="tab" aria-controls="tabpanel-2" href="#tabpanel-2">EUR</a>
                            </li>                                                
                            <li class="nav-item">
                                <a class="nav-link" role="tab" data-toggle="tab" aria-controls="tabpanel-3" href="#tabpanel-3">GBP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" role="tab" data-toggle="tab" aria-controls="tabpanel-4" href="#tabpanel-4">JPY</a>
                            </li>
                            <li class="nav-item">
                                <button type="button" id="btn-add-tenor" class="btn btn-link waves-effect btn-add-tenor underline text-success">+add tenor</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tabpanel-1">
                            <table id="table-currency-usd" class="table table-hover table-bordered mb-0">
                                <thead class="d-none">
                                    <tr>
                                        <?php for($i=0; $i<5; $i++) { ?>
                                            <th></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-1"><input type="text" class="form-control" placeholder="Tenor"></td>
                                        <?php for($i=0; $i<4; $i++) { ?>
                                            <td>3</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-1"><input type="text" class="form-control" placeholder="Fee"></td>
                                        <?php for($i=0; $i<4; $i++) { ?>
                                            <td>1000</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-1">
                                            <span> Maturity</span>
                                            <div class="input-group">                                            
                                                <input type="text" class="form-control" name="Maturity" value="10/24/1984">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                                </div>
                                            </div>
                                        </td>
                                        <?php for($i=0; $i<4; $i++) { ?>
                                            <td>03/01/2022</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-1"></td>
                                        <?php for($i=0; $i<4; $i++) { ?>
                                            <td>
                                                <select class="select2 form-control mb-3 custom-select">
                                                    <option value="Draft">Floating</option>
                                                    <option value="Select">Fixed</option>
                                                </select>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-1"><input type="text" class="form-control" placeholder="Amount ($mm)"></td>
                                        <?php for($i=0; $i<4; $i++) { ?>
                                            <td>500</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-1">UST <button type="button" class="btn waves-effect btn-refresh underline" style="font-weight: 500;">Refresh</button></td>
                                        <td>2.644%</td>
                                        <td>3.642%</td>
                                        <td>3.641%</td>
                                        <td>3.649%</td>
                                    </tr>
                                    <tr>
                                        <td class="col-1">Spread  / UST</td>
                                        <?php for($i=0; $i<4; $i++) { ?>
                                            <td>
                                                <div class="row">
                                                    <div class="col-3 d-flex align-items-center ">
                                                        78
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row align-items-center">
                                                            <input type="text" class="form-control spread-input" placeholder="A">
                                                            <i class="mdi mdi-help" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="leave empty to set "A" value"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-1">All-in yield</td>
                                        <?php for($i=0; $i<4; $i++) { ?>
                                            <td>2.647%</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-1">Spread over 3m$L</td>
                                        <?php for($i=0; $i<4; $i++) { ?>
                                            <td>60bp</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-1"></td>
                                        <td></td>
                                        <td><button type="button" class="btn btn-link waves-effect column-delete underline text-danger">Delete</button></td>
                                        <td><button type="button" class="btn btn-link waves-effect column-delete underline text-danger">Delete</button></td>
                                        <td><button type="button" class="btn btn-link waves-effect column-delete underline text-danger">Delete</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tabpanel-2">
                            <table id="table-currency-eur" class="table table-hover table-bordered mb-0">
                                <thead class="d-none">
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tabpanel-3">
                            <table id="table-currency-gbp" class="table table-hover table-bordered mb-0">
                                <thead class="d-none">
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tabpanel-4">
                            <table id="table-currency-jpy" class="table table-hover table-bordered mb-0">
                                <thead class="d-none">
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
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
                    <button type="button" class="btn btn-primary btn-save mr-3 ml-2" data-toggle="modal" data-target="#modal">Add Secondary Market  data</button>
                </div>
            </div>
        </div>
    </div>
                        
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="caption">Client 1]'s Secondary Market Outstandings</div>
                    <table id="table-1" class="table table-hover table-bordered mb-0" data-filtering="true" data-show-toggle="true">
                        <thead>
                            <tr class="table-header-row">
                                <th class="text-center">CUSIP</th>
                                <th class="text-center">Issue date</th>
                                <th class="text-center">Issuer</th>
                                <th class="text-center">Ratings</th>
                                <th class="text-center">Size (MM)</th>
                                <th class="text-center">Coupon</th>
                                <th class="text-center">Coupon type</th>
                                <th class="text-center">Maturity</th>
                                <th class="text-center">Yrs to maturity</th>
                                <th class="text-center">Issue spread</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Market</th>
                                <th class="text-center">G-Spread</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 3; $i++) { ?>
                                <tr>
                                    <td class="text-center">008000AA7</td>
                                    <td class="text-center">03/20/19</td>
                                    <td class="text-center">Mondelez International Inc.</td>
                                    <td class="text-center">BBB/BBB</td>
                                    <td class="text-center">$550</td>
                                    <td class="text-center">2.5%</td>
                                    <td class="text-center">Fixed</td>
                                    <td class="text-center">03/01/21</td>
                                    <td class="text-center">2.7</td>
                                    <td class="text-center">65bps</td>
                                    <td class="text-center">$97.4</td>
                                    <td class="text-center">90bps</td>
                                    <td class="text-center">93bps</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="caption">Select Secondary Market Comparables</div>
                    <table id="table-2" class="table table-hover table-bordered mb-0" data-filtering="true" data-show-toggle="true">
                        <thead>
                            <tr class="table-header-row">
                                <th class="text-center">CUSIP</th>
                                <th class="text-center">Issue date</th>
                                <th class="text-center">Issuer</th>
                                <th class="text-center">Ratings</th>
                                <th class="text-center">Size (MM)</th>
                                <th class="text-center">Coupon</th>
                                <th class="text-center">Coupon type</th>
                                <th class="text-center">Maturity</th>
                                <th class="text-center">Yrs to maturity</th>
                                <th class="text-center">Issue spread</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Market</th>
                                <th class="text-center">G-Spread</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 3; $i++) { ?>
                                <tr>
                                    <td class="text-center">005000AA7</td>
                                    <td class="text-center">03/20/19</td>
                                    <td class="text-center">Constellation Brands Inc.</td>
                                    <td class="text-center">BBB/BBB</td>
                                    <td class="text-center">$550</td>
                                    <td class="text-center">2.5%</td>
                                    <td class="text-center">Fixed</td>
                                    <td class="text-center">03/01/21</td>
                                    <td class="text-center">2.7</td>
                                    <td class="text-center">65bps</td>
                                    <td class="text-center">$97.4</td>
                                    <td class="text-center">90bps</td>
                                    <td class="text-center">93bps</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <select class="form-control mb-2">
                                    <option>Cary Schultz</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                            <div class="row">
                                <button class="btn btn-primary col-12">Send to syndicate</button>
                            </div>
                        </div>
                        <div class="col-4 offset-4">
                            <button type="submit" class="btn btn-primary px-5 py-3 btn-send">Send to [client 1]</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</page-template>

<script>
    window.onload = function(){
        $('input[name="daterange"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });

        $('input[name="Maturity"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });

        $('#inline-ratings').editable({
            validate: function (value) {
                if ($.trim(value) == '') return 'This field is required';
            },
            mode: 'inline',
            inputclass: 'form-control-sm'
        });

        $('#inline-ratings-outlook').editable({
            validate: function (value) {
                if ($.trim(value) == '') return 'This field is required';
            },
            mode: 'inline',
            inputclass: 'form-control-sm'
        });

        var tables = $('.table');
        tables.each(function(table){
            $(this).DataTable({
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
        })
    }
</script>

<style>
    .btn-send {
        display: block;
        margin-left: auto;
    }

    .semibold {
        font-weight: 500;
    }

    .modal-dialog {
        width: 80%;
        max-width: none;
    }

    .modal-dialog table th {
        min-width: 100px;
        width: 1px;
        height: 40px;
    }

    .modal-dialog table td {
        min-width: 100px;
        width: 1px;
        height: 40px;
    }

    #table-currency {
        border-collapse: collapse;
        table-layout: fixed; 
    }

    #table-currency td:not(.col-1) {
        width: 150px !important;
    }

    .col-1 {
        width: 250px;
        box-sizing: border-box;
    }

    .spread-input {
        width: 60%;
        margin-right: 10px;
    }

    .input-group-text {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .table td {
        height: 63px;
    }

    .nav-tabs {
        justify-content: flex-end;
    }

    .nav-link {
        padding: .5rem 2rem;
        font-weight: 500;
    }

    #table-1_filter {
        display: none;
    }

    #table-2_filter {
        display: none;
    }

    .caption {
        font-weight: bold;
        caption-side: top !important;
    }

    .underline {
        text-decoration: underline;
    }
</style>