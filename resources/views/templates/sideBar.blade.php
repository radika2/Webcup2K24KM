<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="{{asset('assets/images/photo4.jpg')}}" alt="">
						</span>
						<span class="user-name">Rdk Monster</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.html">Form Basic</a></li>
							<li><a href="advanced-components.html">Advanced Components</a></li>
							<li><a href="form-wizard.html">Form Wizard</a></li>
							<li><a href="html5-editor.html">HTML5 Editor</a></li>
							<li><a href="form-pickers.html">Form Pickers</a></li>
							<li><a href="image-cropper.html">Image Cropper</a></li>
							<li><a href="image-dropzone.html">Image Dropzone</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Tables</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<!-- js -->
	<script src="{{asset('assets/js/core.js')}}"></script>
	<script src="{{asset('assets/js/script.min.js')}}"></script>
	<script src="{{asset('assets/js/process.js')}}"></script>
	<script src="{{asset('assets/js/layout-settings.js')}}"></script>
	<script src="{{asset('assets/js/apexcharts.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('assets/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('assets/js/dashboard.js')}}"></script>
</body>
</html>
