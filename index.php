

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Interprice</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content="A premium admin dashboard template by Mannatthemes" name="description" />
		<meta content="Mannatthemes" name="author" />

		<!-- App favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.png">

		<!--Plugins css -->
		<link href="assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
        <link href="assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
		<link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
		<link href="assets/plugins/x-editable/css/bootstrap-editable.css" rel="stylesheet">
		<link href="assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
		<link href="assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">


		 <!-- DataTables -->
		<link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

		<!-- Nestable css -->
        <link href="assets/plugins/nestable/jquery.nestable.min.css" rel="stylesheet" />


		<!-- App css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <style>
			.topbar .topbar-left {
				text-align: left;
				padding-left: 18px;
			}
			.topbar .topbar-left .logo .logo-sm {
				display:none;
			}

			.left-sidenav .main-icon-menu .nav-link-hidden {
				cursor: default;
				pointer-events: none;
			}
			.nav-link-hidden + .menu-item {
				text-align: center;
			}
			@media (max-width: 1024px) {
				.topbar .topbar-left .logo .logo-sm {
					display: inline-block;
				}
				.page-content {
					width: 100% !important;
				}
				.mb-3, .my-3 {
					margin-bottom: 0rem!important;
					margin-top: 1rem !important;
				}
				.navbar-custom .button-menu-mobile {
					position: relative;
    				right: 24px;
				}
			}
		</style>
	</head>
	<body>

		<?php include('partials/topbarAdmin.php'); ?>
		<div class="page-wrapper">
			<?php include('partials/left-sidenav.php'); ?>
			<!-- Page Content-->
			<div class="page-content">
				<div class="container-fluid">
					<?php 
						if(array_key_exists("p", $_GET)) {
							include('pages/'.$_GET['p'].'.php');
						} else {
							include('pages/current-indications.php');
						}
					?>
				</div>
			</div>
		</div>
		<!-- end page-wrapper -->

		<!-- jQuery  -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/metisMenu.min.js"></script>
		<script src="assets/js/waves.min.js"></script>
		<script src="assets/js/jquery.slimscroll.min.js"></script>

		<script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="assets/plugins/apexcharts/irregular-data-series.js"></script>
		<script src="assets/plugins/dropify/js/dropify.min.js"></script>


		<!--Chartist Chart-->
		<script src="assets/plugins/chartist/js/chartist.min.js"></script>
		<script src="assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
		<!--<script src="assets/pages/jquery.crypto-dashboard.init.js"></script>-->

		<!-- Required datatable js -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

		<!-- Responsive examples -->
		<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
		<!-- <script src="assets/pages/jquery.datatable.init.js"></script> -->
		<script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/select2/select2.min.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
		<script src="assets/plugins/x-editable/js/bootstrap-editable.min.js"></script>
        <script src="assets/pages/jquery.form-xeditable.init.js"></script> 

		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
		<script src="assets/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js"></script>

		<!-- App js -->
		<script src="assets/pages/jquery.forms-advanced.js"></script>
		<script src="assets/js/app.js"></script>

		<script>
			window.onload = function () {
				$('li.dropdown.notification-list > a').on('click', function (event) {
					event.preventDefault();
					$(this).parent().toggleClass('open');
				});

				$('.hide-notifications').on('click', function (event) {
					$(this).closest('.notification-list').toggleClass('open');
				});

				$('.delete-notification').on('click', function(){
					$(this).parent('.dropdown-item').hide();
				});

				$('.delete-all-notifications').on('click', function(){
					$('.notification-list.slimscroll').children().each(function() {
						$(this).hide()
					})
				})
				
				$('.notify-view').on('click', function(){
					$(this).siblings('small').toggleClass('expand').toggleClass('collapse')

					if($(this).siblings('small').hasClass('expand')) {
						$(this).text('Collapse')
					} else {
						$(this).text('Expand')
					}
				})

				function toggleNotification() {
					var text = $('.notify-details small');

					text.each(function(key,value) {
						if($(value).text().length > 30) {
							$(value).addClass('collapse');
							$(value).siblings().show();
						} else {
							$(value).siblings().hide()
						}
					});
				}

				toggleNotification();
			}
		</script>
	</body>
</html>