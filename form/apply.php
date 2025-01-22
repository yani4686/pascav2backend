
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>Form Application</title>
		<meta name="description" content="Default form examples" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
        <!-- begin custom css -->
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- <link rel="stylesheet" href="assets/css/bootstrap/3.4.1/bootstrap.min.css"> -->
        <!-- end custom css -->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="assets/media/logos/logo-light.png" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						<a href="index.php" class="brand-logo">
							<img alt="Logo" src="assets/media/logos/Admission.png" />
						</a>
						<!--end::Logo-->
						<!--begin::Toggle-->
						<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</button>
						<!--end::Toolbar-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
                    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">
								<li class="menu-item menu-item-active" aria-haspopup="true">
									<a href="index.php" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
													<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Dashboard</span>
									</a>
								</li>
								<li class="menu-section">
									<h4 class="menu-text">HOME</h4>
									<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="form/login.php" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
													<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Login</span>		
									</a>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="form/apply.php" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<rect fill="#000000" opacity="0.3" transform="translate(9.000000, 12.000000) rotate(-270.000000) translate(-9.000000, -12.000000) " x="8" y="6" width="2" height="12" rx="1"/>
													<path d="M20,7.00607258 C19.4477153,7.00607258 19,6.55855153 19,6.00650634 C19,5.45446114 19.4477153,5.00694009 20,5.00694009 L21,5.00694009 C23.209139,5.00694009 25,6.7970243 25,9.00520507 L25,15.001735 C25,17.2099158 23.209139,19 21,19 L9,19 C6.790861,19 5,17.2099158 5,15.001735 L5,8.99826498 C5,6.7900842 6.790861,5 9,5 L10.0000048,5 C10.5522896,5 11.0000048,5.44752105 11.0000048,5.99956624 C11.0000048,6.55161144 10.5522896,6.99913249 10.0000048,6.99913249 L9,6.99913249 C7.8954305,6.99913249 7,7.89417459 7,8.99826498 L7,15.001735 C7,16.1058254 7.8954305,17.0008675 9,17.0008675 L21,17.0008675 C22.1045695,17.0008675 23,16.1058254 23,15.001735 L23,9.00520507 C23,7.90111468 22.1045695,7.00607258 21,7.00607258 L20,7.00607258 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.000000, 12.000000) rotate(-90.000000) translate(-15.000000, -12.000000) "/>
													<path d="M16.7928932,9.79289322 C17.1834175,9.40236893 17.8165825,9.40236893 18.2071068,9.79289322 C18.5976311,10.1834175 18.5976311,10.8165825 18.2071068,11.2071068 L15.2071068,14.2071068 C14.8165825,14.5976311 14.1834175,14.5976311 13.7928932,14.2071068 L10.7928932,11.2071068 C10.4023689,10.8165825 10.4023689,10.1834175 10.7928932,9.79289322 C11.1834175,9.40236893 11.8165825,9.40236893 12.2071068,9.79289322 L14.5,12.0857864 L16.7928932,9.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.500000, 12.000000) rotate(-90.000000) translate(-14.500000, -12.000000) "/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Applications</span>
										<!-- <i class="menu-arrow"><a href="form/apply.php" class="menu-link"></a></i> -->
									</a>
									<!-- <div class="menu-submenu">
										<i class="menu-arrow">
                                        </i>
									</div> -->
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="form/acceptance.php" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16" />
													<path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Acceptance</span>									
									</a>
								</li>
								<!-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="form/preregister.php" class="menu-link">
										<span class="svg-icon menu-icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"/>
													<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"/>
												</g>
											</svg>
										</span>
										<span class="menu-text">Pre-Registration</span>	
									</a>
								</li> -->
							</ul>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Header Menu Wrapper-->
							<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
								<!--begin::Header Menu-->
								<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
									<!--begin::Header Nav-->
									<ul class="menu-nav">
											<!--<li></li> -->
									</ul>
									<!--end::Header Nav-->
								</div>
								<!--end::Header Menu-->
							</div>
							<!--end::Header Menu Wrapper-->
							<!--begin::Topbar-->
							<div class="topbar">
								<!--begin::Quick panel-->
								<!-- <div class="topbar-item">
									<div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">
										<span class="svg-icon svg-icon-xl svg-icon-primary"> -->
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
													<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg> -->
											<!--end::Svg Icon-->
										<!-- </span>
									</div>
								</div> -->
								<!--end::Quick panel-->
								<!--begin::Languages-->
								<!-- <div class="dropdown"> -->
									<!--begin::Toggle-->
									<!-- <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
											<img class="h-20px w-20px rounded-sm" src="assets/media/svg/flags/226-united-states.svg" alt="" />
										</div>
									</div> -->
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<!-- <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right"> -->
										<!--begin::Nav-->
										<!-- <ul class="navi navi-hover py-4"> -->
											<!--begin::Item-->
											<!-- <li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="assets/media/svg/flags/226-united-states.svg" alt="" />
													</span>
													<span class="navi-text">English</span>
												</a>
											</li> -->
											<!--end::Item-->
										<!-- </ul> -->
										<!--end::Nav-->
									<!-- </div> -->
									<!--end::Dropdown-->
								<!-- </div> -->
								<!--end::Languages-->
								<!--begin::User-->
								<div class="topbar-item">
									<div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
										<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Welcome,</span>
										<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Yani</span>
										<!-- <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
											<span class="symbol-label font-size-h5 font-weight-bold">S</span>
										</span> -->
									</div>
								</div>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<!-- <div class="d-flex flex-column-fluid"> -->
							<!--begin::Container-->
							<div class="container">
                                <div class="ad-header" style="margin-top:10px; padding: 13px;">
                                Admission Application  
                                </div>
                                <div class="stepwizard">
                                    <div class="stepwizard-row setup-panel">
                                        <div class="stepwizard-step">  <!-- col-xs-2 -->
                                            <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                            <p><small>Profile</small></p>
                                        </div>
                                        <div class="stepwizard-step"> 
                                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                            <p><small>Program Detail</small></p>
                                        </div>
										<div class="stepwizard-step"> 
                                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled" id="click-3">3</a>
                                            <p><small>Upload</small></p>
                                        </div>
                                        <div class="stepwizard-step"> 
                                            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled" id="click-3">4</a>
                                            <p><small>Additional</small></p>
                                        </div>
                                        <div class="stepwizard-step"> 
                                            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                            <p><small>Submission</small></p>
                                        </div>
										<div class="stepwizard-step"> 
                                            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                                            <p><small>Summary&Print</small></p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group" style="display: flex;">
                                        <label style=" flex: 0 0 100%;"><span style="margin-right:10px;">Status : </span><span class="label1 label1-info lbl-font">Draft</span></label> 
                                </div>

                                <form role="form" id="idFrmApply">

                                    <div class="panel panel-primary setup-content" id="step-1">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Personal Information</h3>
                                        </div>

                                        <div class="panel-body form-horizontal m-10">
                                         <div class="mb-3">

										 	<div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Application Type <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                    <!-- <input type="date" required="required" class="form-control" name="tajuk_adn" /> -->
                                                        <select class ="form-control selectpicker" title="Please Choose" id ="laluan" name ="laluan">
                                                            <option value="SP">Normal</option>
                                                            <option value="AP">APEL.A Qualification</option>
                                                            <option value="NG">Non Graduating Program (Research Attachment)</option>
                                                        </select>
                                                    </div>
											</div>
											<div class="form-group row" id ="docap">
													<label class="col-lg-3 col-form-label">APEL. A certificate<span class="text-danger">*</span>
													<span class="form-text text-muted">(Except normal)</span></label>
													<div class="col-lg-4 custom-file ap">
														<input type="file" class="custom-file-input" id="customFile" />
														<label class="custom-file-label" for="customFile">Choose file</label>
													</div>
											</div>

											<div class="separator separator-dashed my-6"></div>

											<!-- <div id="divhide"> -->

												<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label">Passport-sized Picture<span class="text-danger">*</span><img style="margin:5px" id="info-mdl-1" src="../assets/images/info-icon-small.png" width="20" height="20"></label>
														<div class="col-lg-9 col-xl-6">
															<div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
																<div class="image-input-wrapper" style="background-image: url(assets/media/users/300_21.jpg)"></div>
																<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
																	<i class="fa fa-pen icon-sm text-muted"></i>
																	<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
																	<input type="hidden" name="profile_avatar_remove" />
																</label>
																<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
																	<i class="ki ki-bold-close icon-xs text-muted"></i>
																</span>
																<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
																	<i class="ki ki-bold-close icon-xs text-muted"></i>
																</span>
															</div>
															<!-- <span class="form-text text-muted">Please ensure the uploaded image size must be : <br>Either white/blue background <br>Does not exceed 3 MB and <br>Formatted is in jpg/jpeg file format.</span> -->
														</div>
												</div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">IC/Passport No.<span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text"  required="required" class="form-control" name="tajuk_adn" />
                                                    </div>
                                                </div>

												<div class ="form-group row">
													<label class="col-lg-3 col-form-label">Surname <span class="text-danger">*</span></label>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" name="tajuk_adn" placeholder="Full Name"/>
                                                    </div>
										
                                                    <label class="col-lg-3 col-form-label">Name <span class="text-danger">*</span></label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tajuk_adn" placeholder="Full Name"/>
                                                    </div><img style="margin:5px" id="info-mdl-2" src="../assets/images/info-icon-small.png" width="20" height="20">
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Date of Birth <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="date" class="form-control" name="tajuk_adn" />
                                                    </div>
												</div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Nationality Status <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                    <input type="text" class="form-control" name="stswarga" value="MALAYSIAN" readonly />
                                                        <!-- <select class ="form-control selectpicker" title="Please Choose">
                                                            <option>Malaysian</option>
                                                            <option>Non Malaysian</option>
                                                        </select> -->
                                                    </div>
                                                    <label class="col-lg-3 col-form-label">Nationality :</label>
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                            <option>MALAYSIA</option>
                                                            <option>SINGAPORE</option>
                                                            <option>INDONESIA</option>
                                                        </select>
                                                    </div>
                                                </div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Disablity :</label>
														<div class="col-lg-4">
															<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id ="stsoku" name ="stsoku">
																<option value ="y">BLIND</option>
																<option value ="n">NORMAL</option>
															</select>
														</div>
													<label class="col-lg-3 col-form-label" id="nooku">No OKU<span class="text-danger">*</span></label>
														<div class="col-lg-4" id="divoku">
															<input type="text" class="form-control" name="tajuk_adn" />
														</div>
												</div>

												<div class="separator separator-dashed my-6"></div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Corresponding Address<span class="text-danger">*</span></label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div><img style="margin:5px" id="info-mdl-3" src="../assets/images/info-icon-small.png" width="20" height="20">
													<label class="col-lg-3 col-form-label">Post/Zip code <span class="text-danger">*</span></label>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
													<label class="col-lg-3 col-form-label">City<span class="text-danger">*</span></label>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
													<label class="col-lg-2 col-form-label">State</label>
                                                    <div class="col-lg-2">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                                <option>Terengganu</option>
                                                                <option>Others</option>
                                                        </select>
                                                    </div>
													<label class="col-lg-2 col-form-label">Country</label>
													<div class="col-lg-2">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                                <option>Malaysia</option>
                                                                <option>Others</option>
                                                        </select>
                                                    </div>
                                                </div>
												
												<div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Tel. No <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
													<label class="col-lg-3 col-form-label">Mobile No <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Office.No</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
													<label class="col-lg-3 col-form-label">Fax.No</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
                                                </div>
						
												<div class="form-group row">
													<div class="checkbox-inline">
														<label class="checkbox m-0">
														<input type="checkbox" name="agree" id="AddressCheckBox"/>
														<span></span>Check if the permanent address if the same as the &nbsp;<b>Corresponding Address</b></label>
													</div>
													<div class="form-text text-muted text-center"></div>
                                                </div>

												<div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Home Address<span class="text-danger">*</span></label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div><img style="margin:5px" id="info-mdl-4" src="../assets/images/info-icon-small.png" width="20" height="20">
													<label class="col-lg-3 col-form-label">Post/Zip code <span class="text-danger">*</span></label>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
													<label class="col-lg-3 col-form-label">City<span class="text-danger">*</span></label>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
													<label class="col-lg-2 col-form-label">State</label>
                                                    <div class="col-lg-2">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                                <option>Terengganu</option>
                                                                <option>Others</option>
                                                        </select>
                                                    </div>
													<label class="col-lg-2 col-form-label">Country</label>
													<div class="col-lg-2">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                                <option>Terengganu</option>
                                                                <option>Others</option>
                                                        </select>
                                                    </div>
                                                </div>

												<div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Tel. No <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
													<label class="col-lg-3 col-form-label">Mobile No <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Office.No</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
													<label class="col-lg-3 col-form-label">Fax.No</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
                                                </div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Email<span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="tajuk_adn" />
                                                    </div>
                                                </div>
                                         </div>

										 <div class="row">
											<div class="col">
												<button class="btn btn-primary nextBtn pull-right m-1" type="button" data-inline="true">Save & Next</button>
												<button class="btn btn-primary pull-right m-1" type="button" data-inline="true">Save</button>
											</div>
										</div>

                                    </div>   
                                    </div>

									<!-- </div> -->

                                    <div class="panel panel-primary setup-content" id="step-2">
                                            <div class="panel-heading">
                                                    <h3 class="panel-title">Choose Programme</h3>
                                            </div>

                                         <div class="panel-body form-horizontal m-10">
                                            <div class="mb-3">

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Mode Of Study <span class="text-danger">*</span></label>
                                                    <div class="col-lg-3">
                                                        <select class ="form-control selectpicker" title="Please Choose" id ="modest" name ="modest">
                                                            <option value ="r">Research</option>
                                                            <option value ="c">Coursework</option>
                                                            <option value ="mx">Mix-Mode</option>
                                                        </select>
                                                    </div>
                                                 <label class="col-lg-3 col-form-label">Type of Study <span class="text-danger">*</span></label>
                                                    <div class="col-lg-3">
                                                        <select class ="form-control selectpicker" title="Please Choose">
                                                            <option>Part Time</option>
                                                            <option>Full Time</option>
                                                        </select>
                                                    </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Programme <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                            <optgroup label ="FACULTY OF INFORMATICS AND COMPUTING" data-max-options="2">
                                                                <option>MASTER OF SCIENCE - Computer science</option>
                                                                <option>MASTER OF SCIENCE IN MATHEMATICS - Mathematics</option>
                                                            </optgroup>
                                                            <optgroup label ="FACULTY OF LANGUAGES & COMMUNICATION" data-max-options="2">
                                                                <option>MASTER OF ENGLISH LANGUAGE STUDIES - Other languages</option>
                                                                <option>MASTER OF ARABIC LANGUAGE STUDIES - Other languages</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>

													<!-- <label class="col-lg-3 col-form-label">Campus</label>
                                                    <div class="col-lg-4">
                                                         <Label class="">Gong Badak Campus</label>
                                                    </div> -->
											</div>
										
                                            <div class="form-group row" id="hidespc">
                                                <label class="col-lg-3 col-form-label">Specialization <span class="text-danger">*</span></label>
												<div class="col-lg-3">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                                <option>Guidance And Counselling</option>
                                                                <option>Psychology And Counselling</option>
                                                        </select>
                                                    </div>
                                                <div class="alert-text text-muted">Note : Choose specialization only for those who choose <br> Mode of Study: RESEARCH
                                FACULTY OF ISLAMIC CONTEMPORARY STUDIES<br>(1) MASTER OF EDUCATION - Teacher training and education sciences<br>(2) DOCTOR OF PHILOSOPHY - Teacher training and education sciences                             
                                                </div>                            
                                            </div>

                                <div class="separator separator-dashed my-6"></div>

                                                <h3 class="font-size-h6 mb-5">Academic Qualification</h3>

                                                <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Highest Tertiary Education <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose">
                                                            <option>Diploma</option>
                                                            <option>Bachelor / Equivalent</option>
                                                            <option>Master Degree / Equivalent</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Awarding University (Bachelor/equivalent) <font color="red">*</font> :</label>
                                                    <div class="col-lg-6">
                                                            <input type="text" class="form-control" name="tajuk_adn" />
                                                        </div>
                                                <label class="col-lg-3 col-form-label">Class/CGPA <span class="text-danger">*</span></label>
                                                    <div class="col-lg-3">
                                                            <input type="text" class="form-control" name="tajuk_adn" />
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Awarding Country <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                            <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                                <option>Diploma</option>
                                                                <option>Bachelor / Equivalent</option>
                                                                <option>Master Degree / Equivalent</option>
                                                            </select>
                                                        </div>
                                                </div>
                                              
                                                <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Awarding University (Master /equivalent) <span class="text-danger">*</span></label>
                                                    <div class="col-lg-6">
                                                            <input type="text" class="form-control" name="tajuk_adn" />
                                                        </div>
                                                <label class="col-lg-3 col-form-label">Class/CGPA <span class="text-danger">*</span></label>
                                                    <div class="col-lg-3">
                                                            <input type="text" class="form-control" name="tajuk_adn" />
                                                        </div>
                                                </div>

                                                <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Awarding Country <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                            <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                                <option>Diploma</option>
                                                                <option>Bachelor / Equivalent</option>
                                                                <option>Master Degree / Equivalent</option>
                                                            </select>
                                                        </div>
                                                </div>

                                            <div class="form-group row" id ="hidework">
                                                <label class="col-lg-2 col-form-label">Work Experience <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                            <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                                <option>0 Years</option>
                                                                <option>1 Years</option>
                                                                <option>2 Years</option>
                                                                <option>More Than 5 Years</option>
                                                            </select>
                                                        </div>
												<label class="col-lg-2 col-form-label">Letter Of Working Experience</label>
                                                    <div class="col-lg-4 custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" />
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>

                                            <div class="form-group row" id ="hiderse">
                                            <label class="col-lg-2 col-form-label">Proposed Research Title/Area <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                    </div>
                                            </div>

                                            <div class ="form-group row" id ="hidesv">
                                                        <label class="col-lg-2 col-form-label">Proposed Supervisor <span class="text-danger">*</span></label>
                                                            <div class="col-lg-4">
                                                                <input type="text" class="form-control" name="tajuk_adn" />
                                                            </div>
                                            </div>

                                            <div class="separator separator-dashed my-6"></div>
											<h3 class="font-size-h6 mb-5">English Language Proficiency</h3>

											<div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Do you hold any English proficiency qualification? <span class="text-danger">*</span></label>
                                                <div class="col-4 col-form-label">
                                                    <div class="radio-inline">
                                                        <label class="radio">
                                                        <input name="stselp" id ="stselp1" type="radio" value="y"/>
                                                        <span></span>Yes</label>
                                                        <label class="radio">
                                                        <input name="stselp" id ="stselp2" type="radio" value="n"/>
                                                        <span></span>No</label>
                                                    </div>
                                                </div> 
                                            </div>

											<div id="hidediveng">

											<div class="form-group row" id="muet">
												<label class="col-lg-2 col-form-label">BI(SPM)<span class="text-danger">*</span></label>
													<div class="col-lg-4">
														<input type="text" class="form-control" name="tajuk_adn" />
													</div>
												<label class="col-lg-2 col-form-label">MUET<span class="text-danger">*</span></label>
													<div class="col-lg-4">
														<input type="text" class="form-control" name="tajuk_adn" />
														<span class="form-text text-muted">Malaysian University English Test(MUET)</span>
													</div>
											</div>

											<div class="form-group row" id="addeng">
												<label class="col-lg-2 col-form-label">Exam Type <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                            <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                                <option>IELTS</option>
                                                                <option>TOEFL</option>
                                                                <option>CEFR</option>
                                                            </select>
                                                        </div>

												<label class="col-lg-2 col-form-label">Result<span class="text-danger">*</span></label>
													<div class="col-lg-4">
														<input type="text" class="form-control" name="tajuk_adn" />
														<!-- <span class="form-text text-muted">Malaysian University English Test(MUET)</span> -->
													</div>
											</div>

											</div>
											
                                        </div>

                                        <div class="row">
											<div class="col">
												<button class="btn btn-primary nextBtn pull-right m-1" type="button" data-inline="true">Save & Next</button>
												<button class="btn btn-primary pull-right m-1" type="button" data-inline="true">Save</button>
											</div>
										</div>

                                    </div>
									</div>
                                <!-- </div> -->
								<!--  -->

								<div class="panel panel-primary setup-content" id="step-3">
                                            <div class="panel-heading">
                                                    <h3 class="panel-title">Supporting Documents</h3>
                                            </div>

                                            <div class="panel-body form-horizontal m-10">
                                            <div class="mb-3">

                                                <div class="form-group row">
                                               
                                                 <label class="col-lg-6 col-form-label">Scanned Copy of IC (Malaysian candidates)/Passport <span class="text-danger">*</span><i class="fas fa-times-circle text-danger mr-5"></i></label>
                                                    <div class="col-lg-2 custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" />
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                <label class="col-lg-6 col-form-label">Academic Certificates/ Senate Letter/ Completion Letter Of Programme Research Proposal<span class="text-danger">*</span><i class="fas fa-check-circle text-success mr-5"></i></label>
                                                    <div class="col-lg-2 custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" />
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                <label class="col-lg-6 col-form-label">Academic Transcript<span class="text-danger">*</span><i class="fas fa-check-circle text-success mr-5"></i></label>
                                                    <div class="col-lg-2 custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" />
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                <label class="col-lg-6 col-form-label">English Language Qualification<span class="text-danger">*</span><i class="fas fa-check-circle text-success mr-5"></i></label>
                                                    <div class="col-lg-2 custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" />
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                <label class="col-lg-6 col-form-label">Research Proposal<span class="text-danger">*</span><i class="fas fa-check-circle text-success mr-5"></i></label>
                                                    <div class="col-lg-2 custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" />
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                <label class="col-lg-6 col-form-label">Processing Fee Receipt<span class="text-danger">*</span><img style="margin:5px" id="info-mdl-5" src="../assets/images/info-icon-small.png" width="20" height="20"><i class="fas fa-check-circle text-success mr-5"></i></label>
                                                    <div class="col-lg-2 custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" />
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>

												<div class="row">
													<label class="col-lg-6 col-form-label text-danger"><span class="text-danger">*</span><span class="text-danger">*</span>Every single document must be less than 3Mb.<br><span class="text-danger">*</span><span class="text-danger">*</span>File Type : PDF/Docx/Doc.</label>
													<!-- <label class="col-lg-6 col-form-label text-danger"><span class="text-danger">*</span><span class="text-danger">*</span>File Type : PDF/Docx/Doc.</label> -->
												</div>
</div>
												<div class="row">
													<div class="col">
														<button class="btn btn-primary nextBtn pull-right m-1" type="button" data-inline="true">Save & Next</button>
														<button class="btn btn-primary pull-right m-1" type="button" data-inline="true">Save</button>
													</div>
												</div>

                                            </div>
                                            </div>
                                    <!-- </div> -->

								<div class="panel panel-primary setup-content" id="step-4">
                                            <div class="panel-heading">
                                                    <h3 class="panel-title">Additional</h3>
                                            </div>

											<div class="panel-body form-horizontal m-10">
                                            <div class="mb-3">

											 <h3 class="font-size-h6 mb-5">Agent Information</h3>

                                            <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Do you have any agent? <span class="text-danger">*</span></label>
                                                <div class="col-4 col-form-label">
                                                    <div class="radio-inline">
                                                        <label class="radio">
                                                        <input name="stsag" id ="stsag1" type="radio" value="y"/>
                                                        <span></span>Yes</label>
                                                        <label class="radio">
                                                        <input name="stsag" id ="stsag2" type="radio" value="n"/>
                                                        <span></span>No</label>
                                                    </div>
                                                </div> 
                                            </div>

                                            <div class ="form-group row" id ="hideag">
                                                        <label class="col-lg-2 col-form-label">Agent Name <span class="text-danger">*</span></label>
                                                            <div class="col-lg-4">
                                                                <input type="text" class="form-control" name="tajuk_adn" />
                                                            </div>
                                                        <label class="col-lg-2 col-form-label">Email <span class="text-danger">*</span></label>
                                                            <div class="col-lg-4">
                                                                <input type="text" class="form-control" name="tajuk_adn" />
                                                            </div>
                                            </div>

											 <div class="separator separator-dashed my-6"></div>

											
											 <div class="form-group row">
											 <label class="col-lg-2 col-form-label">Type Financial<span class="text-danger">*</span></label> 
											
                                                <div class="col-4 col-form-label">
                                                    <div class="radio-inline">
                                                        <label class="radio">
                                                        <input name="stssc" id ="stssc1" type="radio" value="sch"/>
                                                        <span></span>Scholarship</label>
                                                        <label class="radio">
                                                        <input name="stssc" id ="stssc2" type="radio" value="self"/>
                                                        <span></span>Self-financed</label>
                                                    </div>
                                                </div> 
                                             </div>

											 <div class="form-group row" id="hidetypefinance">
                                                    <div class="col-lg-4" id="divtypefinance1">
													<label class="col-lg-4 col-form-label">Type of Sponsorship<span class="text-danger">*</span></label> 
                                                            <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                                <option>KPT</option>
                                                                <option>Bank Islam</option>
                                                            </select>
                                                 	</div>
											<!-- </div> -->
											<!-- <div class="form-group row"> -->
													 <div class="col-lg-4" id="divtypefinance2">
													 <label class="col-lg-10 col-form-label">HouseHold Income<span class="text-danger">*</span></label> 
                                                            <input type="text" class="form-control" name="tajuk_adn" />
															<span class="form-text text-muted">Amount in Ringgit Malaysia (RM)</span>
                                                 	</div>

														<div class="col-lg-4 custom-file" id ="divtypefinance3">
															<label class="col-lg-10 col-form-label">Upload Document<span class="text-danger">*</span>
															<input type="file" class="custom-file-input" id="customFile" />
															<label class="custom-file-label" for="customFile">Choose file</label>
															<span class="form-text text-muted">Supporting Document for International Student Only</span>
														</div>
											 </div>

											</div>

											<div class="row">
												<div class="col">
													<button class="btn btn-primary nextBtn pull-right m-1" type="button" data-inline="true">Save & Next</button>
													<button class="btn btn-primary pull-right m-1" type="button" data-inline="true">Save</button>
												</div>
										    </div>

									</div>
								</div>
								<!-- </div> -->
								
                                 
								<div class="panel panel-primary setup-content" id="step-5">
                                            <div class="panel-heading">
                                                    <h3 class="panel-title">Acknowledgement</h3>
                                            </div>

											<div class="panel-body form-horizontal m-10">
                                            <div class="mb-3">

												<h3 class="font-size-h6 mb-5">Disclaimer</h3>
												<div class="separator separator-dashed my-6"></div>

												<div class="form-group row">
												<label class="col-lg-12 col-form-label">(1) Approval of Program Changes </label>
												</div>

												<div class="form-group row">
                                                    <div class="col-lg-8">
														<div class="radio-inline">
															<label class="radio">
															<input name="stsacctkr" id ="stsacctkr1" type="radio" value="y"/>
															<span></span>Agree</label>
															<span class="form-text text-muted">Consent for UniSZA to offer an alternative program for specific reasons.</span>

															<label class="radio">
															<input name="stsacctkr" id ="stsacctkr2" type="radio" value="n"/>
															<span></span>Disagree</label>
															<span class="form-text text-muted">I only want to be offered my chosen program.</span>
														</div>
													</div>
												</div>
											<div class="separator separator-dashed my-6"></div>

												<div class="form-group row">
														<div class="col-lg-12">
															<div class="checkbox-inline">
																<label class="checkbox">
																<input type="checkbox" />
																<span></span>I certify that all the information given in this online application is correct. The University reserves the right to reject this application or withdraw the offer of admission if any incorrect information given during the application process.</label>
															</div>
														</div>
                                            	</div>

												<div class="row">
													<div class="col">
														<button class="btn btn-primary nextBtn pull-right m-1" type="button" data-inline="true">Summary & Print</button>
														<button class="btn btn-primary pull-right m-1" type="button" data-inline="true">Submit Application</button>
													</div>
												</div>

											</div>
											</div>
									</div>

									<div class="panel panel-primary setup-content" id="step-6">
                                            <div class="panel-heading">
                                                    <h3 class="panel-title">Summary & Print</h3>
                                            </div>

											<div class="panel-body form-horizontal m-10">
                                            <div class="mb-3">

											<div class="separator separator-dashed my-6"></div>
											<h3 class="font-size-h6 mb-5">Profile Information</h3>

											<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label">Passport-sized Picture<span class="text-danger">*</span><img style="margin:5px"></label>
														<div class="col-lg-9 col-xl-6">
															<div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
																<div class="image-input-wrapper" style="background-image: url(assets/media/users/300_21.jpg)"></div>
															</div>	
														</div>
											</div>

											<div class="form-group row my-2">
												
												<label class="col-4 col-form-label">Nama : </label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">MOHD ALI</span>
													</div>

												<label class="col-4 col-form-label">IC/Passport No. : </label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">SA0001</span>
													</div>

												<label class="col-4 col-form-label">Nationality. : </label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">Malaysian </span>
													</div>
											</div>

											<div class="separator separator-dashed my-6"></div>
											<h3 class="font-size-h6 mb-5">Application Details</h3>

											<div class="form-group row my-2">

											 	<label class="col-4 col-form-label">Mode Of Study : </label>
												<div class="col-8">
													<span class="form-control-plaintext font-weight-bolder">Research</span>
												</div>

												<label class="col-4 col-form-label">Type of Study : </label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">Full Time</span>
													</div>
												<label class="col-4 col-form-label">Programme : </label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">Master Of Science-Computer Science</span>
													</div>
												<label class="col-4 col-form-label">Fakulti : </label>
													<div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">FIK</span>
													</div>

												<div class="row">
													<div class="col">
														<!-- <button class="btn btn-primary nextBtn pull-right m-1" type="button" data-inline="true">Next</button> -->
														<button class="btn btn-primary pull-right m-1" type="button" data-inline="true">Print</button>
													</div>
												</div>

											</div>
											</div>
									</div>

                                </div>
                            </form>

							</div>
							
					</div>
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
				<h3 class="font-weight-bold m-0">User Profile
				<!-- <small class="text-muted font-size-sm ml-2">12 messages</small></h3> -->
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content pr-5 mr-n5">
				<!--begin::Header-->
				<div class="d-flex align-items-center mt-5">
					<div class="symbol symbol-100 mr-5">
						<div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
						<i class="symbol-badge bg-success"></i>
					</div>
					<div class="d-flex flex-column">
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">Yani</a>
						<div class="text-muted mt-1">Application Developer</div>
						<div class="navi mt-2">
							<a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
								</span>
							</a>
							<a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
						</div>
					</div>
				</div>
				<!--end::Header-->
			</div>
			<!--end::Content-->
		</div>
		<!-- end::User Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!-- <script src="assets/plugins/custom/uppy/uppy.bundle.js"></script>
		<script src="assets/js/pages/crud/file-upload/uppy.js"></script> -->
        <!-- begin custom js -->
        <script src="assets/js/custom/custom.js"></script>
        <!-- end custom js -->
	</body>
	<!--end::Body-->
</html>