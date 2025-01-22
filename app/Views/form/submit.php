
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
							<img alt="Logo" src="assets/media/logos/logo-light.png" />
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
									<a href="http://localhost/pascav2/dashboard" class="menu-link">
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
									<a href="http://localhost/pascav2/apply" class="menu-link">
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
										<span class="menu-text">Applications</span>
										<!-- <i class="menu-arrow"><a href="form/apply.php" class="menu-link"></a></i> -->
									</a>
									<!-- <div class="menu-submenu">
										<i class="menu-arrow">
                                        </i>
									</div> -->
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
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
										<span class="menu-text">Acceptance & Registration</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
									</div>
								</li>
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
								<!--begin::Search-->
								<div class="dropdown" id="kt_quick_search_toggle">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
											<span class="svg-icon svg-icon-xl svg-icon-primary">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
										<div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
											<!--begin:Form-->
											<form method="get" class="quick-search-form">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</span>
													</div>
													<input type="text" class="form-control" placeholder="Search..." />
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
														</span>
													</div>
												</div>
											</form>
											<!--end::Form-->
											<!--begin::Scroll-->
											<div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
											<!--end::Scroll-->
										</div>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Search-->
								<!--begin::Quick panel-->
								<div class="topbar-item">
									<div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">
										<span class="svg-icon svg-icon-xl svg-icon-primary">
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
									</div>
								</div>
								<!--end::Quick panel-->
								<!--begin::Languages-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
											<img class="h-20px w-20px rounded-sm" src="assets/media/svg/flags/226-united-states.svg" alt="" />
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
										<!--begin::Nav-->
										<ul class="navi navi-hover py-4">
											<!--begin::Item-->
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="assets/media/svg/flags/226-united-states.svg" alt="" />
													</span>
													<span class="navi-text">English</span>
												</a>
											</li>
											<!--end::Item-->
										</ul>
										<!--end::Nav-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Languages-->
								<!--begin::User-->
								<div class="topbar-item">
									<div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
										<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
										<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
										<span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
											<span class="symbol-label font-size-h5 font-weight-bold">S</span>
										</span>
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
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="row">
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Basic Form Layout</h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
													</div>
												</div>
											</div>
											<!--begin::Form-->
											<form class="form">
												<div class="card-body">
													<div class="form-group">
														<label>Full Name:</label>
														<input type="email" class="form-control form-control-solid" placeholder="Enter full name" />
														<span class="form-text text-muted">Please enter your full name</span>
													</div>
													<div class="form-group">
														<label>Email address:</label>
														<input type="email" class="form-control form-control-solid" placeholder="Enter email" />
														<span class="form-text text-muted">We'll never share your email with anyone else</span>
													</div>
													<div class="form-group">
														<label>Subscription</label>
														<div class="input-group input-group-solid">
															<div class="input-group-prepend">
																<span class="input-group-text">$</span>
															</div>
															<input type="text" class="form-control form-control-solid" placeholder="99.9" />
														</div>
													</div>
													<div class="form-group">
														<label>Communication:</label>
														<div class="checkbox-list">
															<label class="checkbox">
															<input type="checkbox" />
															<span></span>Email</label>
															<label class="checkbox">
															<input type="checkbox" />
															<span></span>SMS</label>
															<label class="checkbox">
															<input type="checkbox" />
															<span></span>Phone</label>
														</div>
													</div>
													<!--begin: Code-->
													<div class="example-code mt-10">
														<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active" id="example_code_html" role="tabpanel">
																<div class="example-highlight">
																	<pre style="height:400px">
<code class="language-html">
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Full Name:&lt;/label&gt;
           &lt;input type="email" class="form-control form-control-solid" placeholder="Enter full name"/&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address:&lt;/label&gt;
           &lt;input type="email" class="form-control form-control-solid" placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Subscription&lt;/label&gt;
           &lt;div class="input-group input-group-lg"&gt;
            &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text" &gt;$&lt;/span&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control form-control-solid" placeholder="99.9"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Communication:&lt;/label&gt;
           &lt;div class="checkbox-list"&gt;
            &lt;label class="checkbox"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Email
            &lt;/label&gt;
            &lt;label class="checkbox"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             SMS
            &lt;/label&gt;
            &lt;label class="checkbox"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Phone
            &lt;/label&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
																</div>
															</div>
														</div>
													</div>
													<!--end: Code-->
												</div>
												<div class="card-footer">
													<button type="reset" class="btn btn-primary mr-2">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
										<!--begin::Card-->
										<div class="card card-custom example example-compact">
											<div class="card-header">
												<h3 class="card-title">Section Separator</h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
													</div>
												</div>
											</div>
											<!--begin::Form-->
											<form class="form">
												<div class="card-body">
													<div class="form-group">
														<label>Full Name:</label>
														<input type="email" class="form-control" placeholder="Enter full name" />
														<span class="form-text text-muted">Please enter your full name</span>
													</div>
													<div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Email address:</label>
														<input type="email" class="form-control" placeholder="Enter email" />
														<span class="form-text text-muted">We'll never share your email with anyone else</span>
													</div>
													<div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Subscription</label>
														<div class="input-group">
															<div class="input-group-prepend">
																<span class="input-group-text">$</span>
															</div>
															<input type="text" class="form-control" placeholder="99.9" />
														</div>
													</div>
													<div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Communication:</label>
														<div class="checkbox-list">
															<label class="checkbox">
															<input type="checkbox" />
															<span></span>Email</label>
															<label class="checkbox">
															<input type="checkbox" />
															<span></span>SMS</label>
															<label class="checkbox">
															<input type="checkbox" />
															<span></span>Phone</label>
														</div>
													</div>
													<!--begin: Code-->
													<div class="example-code mt-10">
														<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#example_code_html_2">HTML</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active" id="example_code_html_2" role="tabpanel">
																<div class="example-highlight">
																	<pre style="height:400px">
<code class="language-html">
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Full Name:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-5"&gt;&lt;/div&gt;

          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-5"&gt;&lt;/div&gt;

          &lt;div class="form-group"&gt;
           &lt;label&gt;Subscription&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text" &gt;$&lt;/span&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="99.9"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-5"&gt;&lt;/div&gt;

          &lt;div class="form-group"&gt;
           &lt;label&gt;Communication:&lt;/label&gt;
           &lt;div class="checkbox-list"&gt;
            &lt;label class="checkbox"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Email
            &lt;/label&gt;
            &lt;label class="checkbox"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             SMS
            &lt;/label&gt;
            &lt;label class="checkbox"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Phone
            &lt;/label&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
																</div>
															</div>
														</div>
													</div>
													<!--end: Code-->
												</div>
												<div class="card-footer">
													<button type="reset" class="btn btn-primary mr-2">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Horizontal Form Layout</h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
													</div>
												</div>
											</div>
											<!--begin::Form-->
											<form class="form">
												<div class="card-body">
													<h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Customer Info:</h3>
													<div class="mb-15">
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Full Name:</label>
															<div class="col-lg-6">
																<input type="email" class="form-control" placeholder="Enter full name" />
																<span class="form-text text-muted">Please enter your full name</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Email address:</label>
															<div class="col-lg-6">
																<input type="email" class="form-control" placeholder="Enter email" />
																<span class="form-text text-muted">We'll never share your email with anyone else</span>
															</div>
														</div>
													</div>
													<h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Customer Account:</h3>
													<div class="mb-3">
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Holder:</label>
															<div class="col-lg-6">
																<input type="email" class="form-control" placeholder="Enter full name" />
																<span class="form-text text-muted">Please enter your account holder</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Contact</label>
															<div class="col-lg-6">
																<div class="input-group">
																	<div class="input-group-prepend">
																		<span class="input-group-text">
																			<i class="la la-chain"></i>
																		</span>
																	</div>
																	<input type="text" class="form-control" placeholder="Phone number" />
																</div>
															</div>
														</div>
														<div class="form-group row align-items-center">
															<label class="col-lg-3 col-form-label">Communication:</label>
															<div class="col-lg-6">
																<div class="checkbox-inline">
																	<label class="checkbox">
																	<input type="checkbox" />
																	<span></span>Email</label>
																	<label class="checkbox">
																	<input type="checkbox" />
																	<span></span>SMS</label>
																	<label class="checkbox">
																	<input type="checkbox" />
																	<span></span>Phone</label>
																</div>
															</div>
														</div>
													</div>
													<!--begin: Code-->
													<div class="example-code mt-10">
														<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#example_code_html_3">HTML</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active" id="example_code_html_3" role="tabpanel">
																<div class="example-highlight">
																	<pre style="height:400px">
<code class="language-html">
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;h3 class="font-size-lg text-dark font-weight-bold mb-6"&gt;1. Customer Info:&lt;/h3&gt;
          &lt;div class="mb-15"&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label"&gt;Full Name:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
             &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label"&gt;Email address:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
             &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;h3 class="font-size-lg text-dark font-weight-bold mb-6"&gt;2. Customer Account:&lt;/h3&gt;
          &lt;div class="mb-3"&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label"&gt;Holder:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
             &lt;span class="form-text text-muted"&gt;Please enter your account holder&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label"&gt;Contact&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;div class="input-group"&gt;
              &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-chain"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
              &lt;input type="text" class="form-control" placeholder="Phone number"/&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row align-items-center"&gt;
            &lt;label class="col-lg-3 col-form-label"&gt;Communication:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;div class="checkbox-inline"&gt;
              &lt;label class="checkbox"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
               Email
              &lt;/label&gt;
              &lt;label class="checkbox"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
               SMS
              &lt;/label&gt;
              &lt;label class="checkbox"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
               Phone
              &lt;/label&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;

         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-3"&gt;&lt;/div&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;button type="reset" class="btn btn-success mr-2"&gt;Submit&lt;/button&gt;
            &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
																</div>
															</div>
														</div>
													</div>
													<!--end: Code-->
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-3"></div>
														<div class="col-lg-6">
															<button type="reset" class="btn btn-success mr-2">Submit</button>
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>
													</div>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
										<!--begin::Card-->
										<div class="card card-custom example example-compact">
											<div class="card-header">
												<h3 class="card-title">Form Label Aligment</h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
													</div>
												</div>
											</div>
											<!--begin::Form-->
											<form class="form">
												<div class="card-body">
													<h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Customer Info:</h3>
													<div class="mb-15">
														<div class="form-group row">
															<label class="col-lg-3 col-form-label text-right">Full Name:</label>
															<div class="col-lg-6">
																<input type="email" class="form-control" placeholder="Enter full name" />
																<span class="form-text text-muted">Please enter your full name</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label text-right">Email address:</label>
															<div class="col-lg-6">
																<input type="email" class="form-control" placeholder="Enter email" />
																<span class="form-text text-muted">We'll never share your email with anyone else</span>
															</div>
														</div>
													</div>
													<h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Customer Account:</h3>
													<div class="mb-3">
														<div class="form-group row">
															<label class="col-lg-3 col-form-label text-right">Holder:</label>
															<div class="col-lg-6">
																<input type="email" class="form-control" placeholder="Enter full name" />
																<span class="form-text text-muted">Please enter your account holder</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label text-right">Contact</label>
															<div class="col-lg-6">
																<div class="input-group">
																	<div class="input-group-prepend">
																		<span class="input-group-text">
																			<i class="la la-chain"></i>
																		</span>
																	</div>
																	<input type="text" class="form-control" placeholder="Phone number" />
																</div>
															</div>
														</div>
														<div class="form-group row align-items-center">
															<label class="col-lg-3 col-form-label text-right">Communication:</label>
															<div class="col-lg-6">
																<div class="checkbox-inline">
																	<label class="checkbox">
																	<input type="checkbox" />
																	<span></span>Email</label>
																	<label class="checkbox">
																	<input type="checkbox" />
																	<span></span>SMS</label>
																	<label class="checkbox">
																	<input type="checkbox" />
																	<span></span>Phone</label>
																</div>
															</div>
														</div>
													</div>
													<!--begin: Code-->
													<div class="example-code mt-10">
														<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#example_code_html_4">HTML</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active" id="example_code_html_4" role="tabpanel">
																<div class="example-highlight">
																	<pre style="height:400px">
<code class="language-html">
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;h3 class="font-size-lg text-dark font-weight-bold mb-6"&gt;1. Customer Info:&lt;/h3&gt;
          &lt;div class="mb-15"&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label text-right"&gt;Full Name:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
             &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label text-right"&gt;Email address:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
             &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;h3 class="font-size-lg text-dark font-weight-bold mb-6"&gt;2. Customer Account:&lt;/h3&gt;
          &lt;div class="mb-3"&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label text-right"&gt;Holder:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
             &lt;span class="form-text text-muted"&gt;Please enter your account holder&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label text-right"&gt;Contact&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;div class="input-group"&gt;
              &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-chain"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
              &lt;input type="text" class="form-control" placeholder="Phone number"/&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row align-items-center"&gt;
            &lt;label class="col-lg-3 col-form-label  text-right"&gt;Communication:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;div class="checkbox-inline"&gt;
              &lt;label class="checkbox"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
               Email
              &lt;/label&gt;
              &lt;label class="checkbox"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
               SMS
              &lt;/label&gt;
              &lt;label class="checkbox"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
               Phone
              &lt;/label&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;

         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-3"&gt;&lt;/div&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;button type="reset" class="btn btn-success mr-2"&gt;Submit&lt;/button&gt;
            &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
																</div>
															</div>
														</div>
													</div>
													<!--end: Code-->
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-3"></div>
														<div class="col-lg-6">
															<button type="reset" class="btn btn-success mr-2">Submit</button>
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>
													</div>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
									</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2020©</span>
								<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark">
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
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
				<small class="text-muted font-size-sm ml-2">12 messages</small></h3>
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
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">James Jones</a>
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
				<!--begin::Separator-->
				<div class="separator separator-dashed mt-8 mb-5"></div>
				<!--end::Separator-->
				<!--begin::Nav-->
				<div class="navi navi-spacer-x-0 p-0">
					<!--begin::Item-->
					<a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
						<div class="navi-link">
							<div class="symbol symbol-40 bg-light mr-3">
								<div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-success">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
												<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
							</div>
							<div class="navi-text">
								<div class="font-weight-bold">My Profile</div>
								<div class="text-muted">Account settings and more
								<span class="label label-light-danger label-inline font-weight-bold">update</span></div>
							</div>
						</div>
					</a>
					<!--end:Item-->
				</div>
				<!--end::Nav-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-7"></div>
				<!--end::Separator-->
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
	</body>
	<!--end::Body-->
</html>