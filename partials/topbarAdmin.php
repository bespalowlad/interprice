		<!-- Top Bar Start -->
		<div class="topbar">

			<!-- LOGO -->
			<div class="topbar-left">
				<a href="../projects/projects-index.html" class="logo">
					<span>
						<img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
					</span>
					<span>
						<img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
					</span>
				</a>
			</div>
			<!--end logo-->
			<!-- Navbar -->
			<nav class="navbar-custom">    
				<ul class="list-unstyled topbar-nav float-right mb-0"> 
					<!-- notifications list -->
					<li class="dropdown notification-list">
						<a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" href="" role="button" aria-haspopup="false" aria-expanded="false">
							<i class="dripicons-bell noti-icon"></i>
							<span class="badge badge-danger badge-pill noti-icon-badge">2</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-lg">
							<h6 class="dropdown-item-text">
								<p>Notifications <span>(18)</span></p>
								<button class="hide-notifications"><i class="fa fa-times" aria-hidden="true"></i></button>
							</h6>
							<div class="slimscroll notification-list">
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-details">Your order is placed
										<small class="text-muted">Dummy text of the printing and typesetting industry.</small>
										<div class="notify-view">Expand</div>
									</div>
                                    <button class="delete-notification"><i class="fa fa-trash" aria-hidden="true"></i></button>	
								</a>
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-details">New Message received
										<small class="text-muted">You have 87 unread messages</small>
										<div class="notify-view">Expand</div>
									</div>
                                    <button class="delete-notification"><i class="fa-trash"></i></button>
								</a>
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-details">Your item is shipped
										<small class="text-muted">It is a long established fact that a reader will</small>
										<div class="notify-view">Expand</div>
									</div>
                                    <button class="delete-notification"><i class="fa-trash"></i></button>
								</a>
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-details">Your order is placed
										<small class="text-muted">Dummy text of the printing and typesetting industry.</small>
										<div class="notify-view">Expand</div>
									</div>
                                    <button class="delete-notification"><i class="fa-trash"></i></button>
								</a>
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-details">New Message received
										<small class="text-muted">You have 87 unread messages</small>
										<div class="notify-view">Expand</div>
									</div>
                                    <button class="delete-notification"><i class="fa-trash"></i></button>
								</a>
							</div>
							<a href="javascript:void(0);" class="dropdown-item text-center text-primary delete-all-notifications">
								Clear all
							</a>
						</div>
					</li>
					<li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
							aria-haspopup="false" aria-expanded="false">
                            <div class="avatar-box thumb-xs align-self-center">
                                <span class="avatar-title bg-soft-info rounded-circle">IN</span>
                            </div>
							<span class="ml-1 nav-user-name hidden-sm">issuer_name<i class="mdi mdi-chevron-down"></i> </span>
						</a>	
						<div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-item">issuer_name@interprice.com</div>
                            <div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
							<a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Support</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
						</div>
					</li>
				</ul>
				<!--end topbar-nav-->
            	<ul class="list-unstyled topbar-nav mb-0">                        
                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i class="dripicons-menu nav-icon"></i>
                        </button>
                    </li>
                </ul>
			</nav>
			<!-- end navbar-->
		</div>
		<!-- Top Bar End -->

<style>
    .topbar .topbar-left .logo .logo-sm {
        height: 42px;
        margin-left: 1px;
        position: relative;
        bottom: 5px;
    }

	.notification-list .dropdown-menu{
		position: fixed !important;
		left: auto !important;
		right: 0 !important;
		top: 70px !important;
		height: calc(100vh - 70px);
		transform: none !important;
	}

	.slimScrollDiv {
		height: 100% !important;
		max-height: calc(100% - 80px);
	}

	.notification-list .slimscroll {
		max-height: none !important;
		height: 100% !important;
	}

    .notify-details {
        margin-left: 0 !important;
    }

    .notify-item {
        display: flex;
		align-items: center;
		justify-content: space-between;
	}

	.notify-item i {
		font-size: 15px;
		font-weight: 400;
		line-height: 0;
	}

	.notify-item:hover i {
		color: #2f4686;
	}

	.notify-view {
		text-align: center;
		font-size: 11px;
	}

	.delete-notification {
		background: transparent;
		border: none;
	}

	h6.dropdown-item-text {
		display: flex;
		align-items: center;
		justify-content: space-between;
	}

	h6.dropdown-item-text p {
		margin: 0;
	}

	.hide-notifications {
		background: transparent;
		border: none;
		width: 25px;
		height: 25px;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.notify-details small {
		
	}

	.notify-details small.collapse {
		height: 16px;
		overflow:hidden;
		transition: .3s height ease;
	}

	.notify-details small.expand {
		height: auto;
	}
</style>