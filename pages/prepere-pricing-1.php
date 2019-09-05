<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<page-template>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose secondary market bonds</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="table-modal" class="table table-hover table-bordered table-init mb-0" data-filtering="true" data-show-toggle="true">
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
                                <?php for ($i=0; $i < 2; $i++) { ?>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>

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
                <p class="text-muted mb-3">step 1</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="alert icon-custom-alert alert-outline-pink" role="alert">                                            
                <i class="mdi mdi-alert-outline alert-icon"></i>
                <div class="alert-text">
                    <h5>Syndicate review result</h5>
                    <p>Our desk is quoting the existing 23s 10 bps tighter; hence we are changing the 5yr to +80 area</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Issuer</label>
                            <div class="col-sm-4">
                                <select class="form-control">
                                    <option>Mondelez Inter</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Issue type</label>
                            <div class="col-sm-4">
                                <select class="form-control">
                                    <option>Sr Unsecured</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">    
                            <label class="col-sm-2 col-form-label text-left">Expiration date</label>  
                            <div class="col-sm-4">      
                                <div class="input-group">                                
                                    <input type="text" class="form-control" name="daterange">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-sm-2 text-left">Ratings</span> 
                            <div class="col-sm-4">
                                <!-- <a href="#" id="inline-ratings" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname" class="editable editable-click editable-empty">Baa1 / BBB / BBB</a> -->
                                <a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-sm-2 text-left">Rating outlook</span> 
                            <div class="col-sm-4">
                                <a href="#" data-type="text" data-pk="2" data-placement="right" data-placeholder="Required" data-title="Enter your firstname" class="editable-label editable editable-click editable-empty">Stable</a> /
                                <a href="#" data-type="text" data-pk="3" data-placement="right" data-placeholder="Required" data-title="Enter your firstname" class="editable-label editable editable-click editable-empty">Stable</a> /
                                <a href="#" data-type="text" data-pk="4" data-placement="right" data-placeholder="Required" data-title="Enter your firstname" class="editable-label editable editable-click editable-empty">Stable</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-left">Use of proceeds</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="select-proceeds">
                                    <option value="general">General corporate purposes</option>
                                    <option value="large">Large select</option>
                                    <option value="small">Small select</option>
                                    <option value="custom">Custom value</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row d-none">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" placeholder="Input other use of proceeds" id="example-text-input">
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
                                                    <button onclick="addCol()" type="button" id="btn-add-tenor" class="btn btn-link waves-effect btn-add-tenor underline text-success">+add tenor</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active" role="tabpanel" id="tabpanel-1">
                                                <div class="d-inline-block align-top">
                                                    <table class="table table-sidebar table-bordered p-1">
                                                        <tr>
                                                            <td>Tenor</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fee</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Maturity</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Amount ($mm)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>UST <button type="button" class="btn waves-effect btn-refresh underline" style="font-weight: 500;">Refresh</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spread  / UST</td>
                                                        </tr>
                                                        <tr>
                                                            <td>All-in yield</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spread over 3m$L</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                        </tr>                                                                
                                                    </table>
                                                </div>
                                                <div class="no-data d-flex align-items-center justify-content-center">Click Add tenor to add indication</div>
                                                <div class="content-overflow align-top">
                                                    <?php for($i=0; $i<5; $i++) { ?>
                                                        <div id="card-<?php echo $i; ?>" class="d-inline-block align-top card-small">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <td>
                                                                        <input type="text" class="form-control" placeholder="Tenor">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input type="text" class="form-control" placeholder="Fee">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">                                            
                                                                            <input type="text" class="form-control" name="Maturity" value="10/24/1984">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <select class="select2 form-control mb-3 custom-select">                                                                                    <option value="Draft">Floating</option>
                                                                            <option value="Select">Fixed</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input type="text" class="form-control" placeholder="Amount ($mm)">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2.644%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="row d-flex align-items-center">
                                                                            <div class="col-12 d-flex align-items-center">
                                                                                <input type="text" class="form-control spread-input mr-1" placeholder="Spread">
                                                                                <input type="text" class="form-control spread-input mr-1" placeholder="A">
                                                                                <i class="fa fa-question-circle" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="leave empty to set 'A' value"></i>
                                                                            </div>
                                                                        </div>                                                                        
                                                                    </td>
                                                                </tr> 
                                                                <tr>
                                                                    <td>2.647%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>60bp</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <button data-delete="<?php echo $i; ?>" type="button" class="btn btn-link underline text-danger">Delete</button>
                                                                    </td>
                                                                </tr>                                                                                                                                                                                                                                                                                                                                                   
                                                            </table>
                                                        </div>
                                                    <?php } ?>                         
                                                </div>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="tabpanel-2">
                                                <div class="d-inline-block align-top">
                                                    <table class="table table-sidebar table-bordered p-1">
                                                        <tr>
                                                            <td>Tenor</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fee</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Maturity</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Amount ($mm)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>UST <button type="button" class="btn waves-effect btn-refresh underline" style="font-weight: 500;">Refresh</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spread  / UST</td>
                                                        </tr>
                                                        <tr>
                                                            <td>All-in yield</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spread over 3m$L</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                        </tr>                                                                
                                                    </table>
                                                </div>
                                                <div class="no-data d-flex align-items-center justify-content-center">Click Add tenor to add indication</div>
                                                <div class="content-overflow align-top"></div>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="tabpanel-3">
                                                <div class="d-inline-block align-top">
                                                    <table class="table table-sidebar table-bordered p-1">
                                                        <tr>
                                                            <td>Tenor</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fee</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Maturity</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Amount ($mm)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>UST <button type="button" class="btn waves-effect btn-refresh underline" style="font-weight: 500;">Refresh</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spread  / UST</td>
                                                        </tr>
                                                        <tr>
                                                            <td>All-in yield</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spread over 3m$L</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                        </tr>                                                                
                                                    </table>
                                                </div>
                                                <div class="no-data d-flex align-items-center justify-content-center">Click Add tenor to add indication</div>
                                                <div class="content-overflow align-top"></div>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="tabpanel-4">
                                                <div class="d-inline-block align-top">
                                                    <table class="table table-sidebar table-bordered p-1">
                                                        <tr>
                                                            <td>Tenor</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fee</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Maturity</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Amount ($mm)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>UST <button type="button" class="btn waves-effect btn-refresh underline" style="font-weight: 500;">Refresh</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spread  / UST</td>
                                                        </tr>
                                                        <tr>
                                                            <td>All-in yield</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spread over 3m$L</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                        </tr>                                                                
                                                    </table>
                                                </div>
                                                <div class="no-data d-flex align-items-center justify-content-center">Click Add tenor to add indication</div>
                                                <div class="content-overflow align-top"></div>
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
                                        <div class="row mb-4">
                                            <button type="button" class="btn btn-primary btn-save mr-3 ml-2" data-toggle="modal" data-target="#modal">Add Secondary Market  data</button>
                                        </div>
                                        <div class="caption">Client 1]'s Secondary Market Outstandings</div>
                                        <table id="table-1" class="table table-hover table-bordered table-init mb-0" data-filtering="true" data-show-toggle="true">
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
                                        <div class="caption mt-4">Select Secondary Market Comparables</div>
                                        <table id="table-2" class="table table-hover table-bordered table-init mb-0" data-filtering="true" data-show-toggle="true">
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

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group mb-0">
                                            <label for="exampleFormControlTextarea1">Notes on the market</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <button type="button" class="btn btn-primary btn-save mr-3 ml-2">Save draft</button>
                            <button type="button" class="btn btn-primary btn-preview">Preview</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="d-inline-block align-top card-small card-template">
        <table class="table table-bordered">
            <tr>
                <td>
                    <input type="text" class="form-control" placeholder="Tenor">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" placeholder="Fee">
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-group">                                            
                        <input type="text" class="form-control" name="Maturity" value="">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <select class="select2 form-control mb-3 custom-select">
                        <option value="Draft">Floating</option>
                        <option value="Select">Fixed</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" placeholder="Amount ($mm)">
                </td>
            </tr>
            <tr>
                <td>0.000%</td>
            </tr>
            <tr>
                <td>
                    <div class="row d-flex align-items-center">
                        <div class="col-12 d-flex align-items-center">
                            <input type="text" class="form-control spread-input mr-1" placeholder="Spread">
                            <input type="text" class="form-control spread-input mr-1" placeholder="A">
                            <i class="fa fa-question-circle" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="leave empty to set 'A' value"></i>
                        </div>
                    </div>                                                                        
                </td>
            </tr> 
            <tr>
                <td>0.000%</td>
            </tr>
            <tr>
                <td>0bp</td>
            </tr>
            <tr>
                <td>
                    <button data-delete="0" type="button" class="btn btn-link underline text-danger">Delete</button>
                </td>
            </tr>                                                                                                                                                                                                                                                                                                                                                   
        </table>
    </div>   
</page-template>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        $('#inline-dob').editable({
            mode: 'inline',
            inputclass: 'form-control-sm'
        });

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

        $('.editable-label').editable({
            validate: function (value) {
                if ($.trim(value) == '') return 'This field is required';
            },
            mode: 'inline',
            inputclass: 'form-control-sm'
        });

        var tables = $('.table-init');
        tables.each(function(){
            $(this).DataTable({
                lengthChange: false,
                searching: true,
                ordering: false,
                bInfo: false,
                editing: true,
                "scrollX": true,
                paging: false,
                "autoWidth": false,
                language: {
                    emptyTable: "No data available in table"
                },
            })
        })
        
        $('#select-proceeds').change(function(){
            var field = $(this).closest('.form-group').next();
            if($(this).val() == 'custom') {
                field.removeClass('d-none')
            } else {
                field.addClass('d-none')
            }
        });

        //set display no-data block
        setDisplayNoData();        

        $(document).on("click", "[data-delete]", function(){
            var id = $(this).attr('data-delete');
            $(this).parents('.card-small').remove();
            setDisplayNoData();
        });
    })

    function addCol() {
        var $contentOverflow = $(".tab-pane.active .content-overflow");
        $(".card-template").clone().appendTo(".tab-pane.active .content-overflow");
        $contentOverflow.find(".card-template").removeClass('card-template');
        $contentOverflow.animate({
            scrollLeft: $contentOverflow[0].scrollWidth
        }, 300);

        setDisplayNoData();
    }

    function setDisplayNoData(){
        var $contentOverflow = $(".tab-pane.active .content-overflow");
        var noData = $('.tab-pane.active').find('.no-data');

        if($contentOverflow.children().length > 0) {
            noData.addClass('d-none').removeClass('d-flex');
        } else {
            noData.addClass('d-flex').removeClass('d-none');
        }
    }

</script>

<style>
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
        /* width: 60%; */
        /* margin-right: 10px; */
    }

    .input-group-text {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    #datatable-left thead,
    #datatable-right thead {
        display: none;
    }

    .table td {
        height: 63px;
        /* border: none !important; */
    }

    .nav-tabs {
        justify-content: flex-end;
    }

    .nav-link {
        padding: .5rem 2rem;
        font-weight: 500;
    }

    button {
        /* color: #50649c !important; */
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

    .table-sidebar {
        min-width:100px;
    }

    .content-overflow {
        display:inline-block;
        width: calc(100% - 160px);
        white-space: nowrap;
        overflow-x: auto;
    }

    .p-1 {
        border: none;
    }

    .p-1 td {
        padding: 14px;
        border: none;
    }

    .card-small {
        width: 200px;
    }

    .card-template {
        display: none !important;
    }

    .content-overflow .card-template {
        display: inline-block !important;
    }

    .no-data {
        height: 63px;
        width: calc(100% - 160px);
       float: right;
    }
</style>