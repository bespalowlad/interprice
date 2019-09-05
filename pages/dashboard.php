<page-template>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Bond syndicate</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
                <p class="text-muted mb-3">activity with your clients</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Your corporate clients</h4>
                    <table id="datatable" class="table table-hover table-bordered mb-0" data-filtering="true" data-show-toggle="true">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-center">Issuer</th>
                                <th class="text-center">Team</th>
                                <th class="text-center">Sector</th>
                                <th class="text-center">Last Pricing Date</th>
                                <th class="text-center">Next Pricing Date</th>
                                <th class="text-center">Assign to</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control select-filter" type="search" value="" placeholder="filter">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control select-filter" type="search" value="" placeholder="filter">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control select-filter" type="search" value="" placeholder="filter">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="sent" value="10/10/2001">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="sent" value="10/10/2001">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <input class="form-control select-filter" type="search" value="" placeholder="Underwriter name">
                                </th>
                                <th class="text-center tr-hold-w" width="180px">
                                    <select class="select2 form-control mb-3 custom-select">
                                        <option value="Draft">Draft</option>
                                        <option value="Select">Select</option>
                                    </select>
                                </th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 5; $i++) { ?>
                                <tr data-open="<?php echo $i; ?>" data-toggle-tr="false">
                                    <td class="text-center">
                                        <button type="button" class="btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to you">
                                            <i class="fas fa-user-alt"></i>
                                        </button>  
                                    </td>
                                    <td>Caterpillar Finan</td>
                                    <td>Captive Finance</td>
                                    <td class="text-center">Sector 1</td>
                                    <td class="text-center">03/15/2019</td>
                                    <td class="text-center">03/25/2019</td>
                                    <td class="text-center">
                                        <select class="select2 form-control mb-3 custom-select">
                                            <option value="Draft">Draft</option>
                                            <option value="Select">Select</option>
                                        </select>
                                    </td>
                                    <td class="text-center">in progress</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="View history">
                                            <i class="fas fa-university"></i>
                                        </button> 
                                        <button type="button" class="btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Prepare pricing">
                                            <i class="fas fa-dollar-sign"></i>
                                        </button> 
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
        var table = $('#datatable').DataTable({
            lengthChange: false,
            searching: true,
            ordering: false,
            bInfo: false,
            "scrollX": true,
            fnDrawCallback: function( oSettings ) {
                $('#datatable').find(".fas.fa-angle-up").removeClass("fa-angle-up");
                $("[data-toggle]").attr("data-toggle-tr", "false");
                if(window.innerWidth > 700) $(".export-to-exel").appendTo("#datatable_wrapper .col-md-5");
            }
        });

        $('.select-filter').each(function(i) {
            $(this).on('keyup', function() {
                table
                    .columns(i + 1)
                    .search(this.value)
                    .draw();
            })
        })

        $('input[name="sent"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });
    }
</script>

<style>
    #datatable_filter {
        display: none;
    }
    .btn-outline-light {
        padding: 0;
        border: none;
    }
    .btn-outline-light:hover {
        border:none;
        background-color: transparent;
    }
</style>