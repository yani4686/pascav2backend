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
	<?php echo view('/headmain.php'); ?>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<?php echo view('/headermobilemain.php'); ?>
		<!--end::Header Mobile-->

		<!--Starter-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<?php echo view('/sidemenumain.php'); ?>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					<!--begin::Header-->
					<?php echo view('/headermain.php'); ?>
					<!--end::Header-->
					
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->

							<!--begin::Container-->
							<div class="container">
								<!--begin::Page Layout-->
								<div class="d-flex flex-row">
									<!--begin::Aside-->
									<div class="flex-column offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
									
										<div class="card card-custom gutter-b">
										<div class="card-body">
												<div class="d-flex justify-content-between flex-column pt-4 h-100">
													
													<!-- <div class="pb-5"> -->

													<!--begin::Header-->
														<div class="ad-header" style="margin-top:-10px; padding: 13px;">Checklist</div>
													<!--end::Header-->

														<div class="d-flex flex-column flex-center" style="padding-top: 16px;">
															<div class="symbol symbol-120 symbol-circle symbol-success overflow-hidden">	
																<div class="image-boxdashboard" id="imageBox">
																	<img id="previewImage" src="./assets/media/users/blank.png" alt="Passport Picture" style="width: 100%; height: 100%; display: block;">
																</div>
															</div>
														</div>
													
													<!-- <div class="pt-1"> -->

														<!-- profile -->
														<div class="d-flex align-items-center pb-9">
																<div class="symbol symbol-45 symbol-light mr-4">
																		<span class="symbol-label" id ="profilepic">
																			<span class="svg-icon svg-icon-primary svg-icon-2x">
																				<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Address-card.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"/>
																					<path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>
																				</g>
																			</svg><!--end::Svg Icon-->
																			</span>
																		</span>
																</div>
																	<div class="d-flex flex-column flex-grow-1">
																		<span class="text-muted font-weight-bold">Profile</span>
																		<!-- <div id="statComplete"><span class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-1 min-w-45px ">Incomplete</span></div> -->
																		<span id="go-to-step-1" class="dashboard-link font-weight-bolder label label-xl label-light-success label-inline px-3 py-1 min-w-45px"></span>
																	</div>
														</div>
														<!-- program -->
														<div id ="program" class="d-flex align-items-center pb-9">
																<div class="symbol symbol-45 symbol-light mr-4">
																		<span class="symbol-label">
																		<span class="svg-icon svg-icon-primary svg-icon-2x">
																			<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Clipboard-list.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"/>
																					<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
																					<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
																					<rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
																					<rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
																					<rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
																					<rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
																					<rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
																					<rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
																				</g>
																			</svg><!--end::Svg Icon-->
																		</span>
																		</span>
																</div>
																	<div class="d-flex flex-column flex-grow-1">
																		<span class="text-muted font-weight-bold">Programme Details</span>
																		<span id="go-to-step-2" class="dashboard-link font-weight-bolder label label-xl label-light-danger label-inline px-3 py-1 min-w-45px step-link">Incomplete</span>
																	</div>
														</div>
														<!-- sokongan -->
														<div id="sokongan" class="d-flex align-items-center pb-9">
																<div class="symbol symbol-45 symbol-light mr-4">
																		<span class="symbol-label">
																			<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Plus.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"/>
																					<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
																					<path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"/>
																				</g>
																			</svg><!--end::Svg Icon-->
																			</span>
																		</span>
																</div>
																	<div class="d-flex flex-column flex-grow-1">
																		<span class="text-muted font-weight-bold">Supporting Documents</span>
																		<span id="go-to-step-3" class="dashboard-link font-weight-bolder label label-xl label-light-danger label-inline px-3 py-1 min-w-45px"></span>
																	</div>
														</div>
														<!-- doc tambahan -->
														<div id="tambahan" class="d-flex align-items-center pb-9">
																<div class="symbol symbol-45 symbol-light mr-4">
																		<span class="symbol-label">
																			<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\File.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24"/>
																						<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																						<rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
																						<rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
																					</g>
																				</svg><!--end::Svg Icon-->
																			</span>
																		</span>
																</div>
																	<div class="d-flex flex-column flex-grow-1">
																		<span class="text-muted font-weight-bold">Additional Information</span>
																		<span id="go-to-step-4" class="dashboard-link font-weight-bolder label label-xl label-light-danger label-inline px-3 py-1 min-w-45px">Not Completed</span>
																	</div>
														</div>
														<!-- Pengesahan -->
														<div id="pengesahan" class="d-flex align-items-center pb-9">
																<div class="symbol symbol-45 symbol-light mr-4">
																		<span class="symbol-label">
																			<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Design\Stamp.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"/>
																						<path d="M12.9863016,8.83409843 C12.9953113,8.88805868 13,8.94348179 13,9 L13,11 L17,11 C18.1045695,11 19,11.8954305 19,13 L19,16 L5,16 L5,13 C5,11.8954305 5.8954305,11 7,11 L11,11 L11,9 C11,8.94348179 11.0046887,8.88805868 11.0136984,8.83409843 C9.84135601,8.42615464 9,7.31133193 9,6 C9,4.34314575 10.3431458,3 12,3 C13.6568542,3 15,4.34314575 15,6 C15,7.31133193 14.158644,8.42615464 12.9863016,8.83409843 Z" fill="#000000"/>
																						<rect fill="#000000" opacity="0.3" x="5" y="18" width="14" height="2" rx="1"/>
																					</g>
																				</svg><!--end::Svg Icon-->
																			</span>
																		</span>
																</div>
																	<div class="d-flex flex-column flex-grow-1">
																		<span class="text-muted font-weight-bold">Submission</span>
																		<span id="go-to-step-5" class="dashboard-link font-weight-bolder label label-xl label-light-danger label-inline px-3 py-1 min-w-45px">Not Completed</span>
																	</div>
														</div>
														<!-- summary&print -->
														<div id="divsumm" class="d-flex align-items-center pb-9">
																<div class="symbol symbol-45 symbol-light mr-4">
																		<span class="symbol-label">
																			<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Devices\Printer.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"/>
																						<path d="M16,17 L16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 L8,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,15 C21,16.1045695 20.1045695,17 19,17 L16,17 Z M17.5,11 C18.3284271,11 19,10.3284271 19,9.5 C19,8.67157288 18.3284271,8 17.5,8 C16.6715729,8 16,8.67157288 16,9.5 C16,10.3284271 16.6715729,11 17.5,11 Z M10,14 L10,20 L14,20 L14,14 L10,14 Z" fill="#000000"/>
																						<rect fill="#000000" opacity="0.3" x="8" y="2" width="8" height="2" rx="1"/>
																					</g>
																				</svg><!--end::Svg Icon-->
																			</span>
																		</span>
																</div>
																	<div class="d-flex flex-column flex-grow-1">
																		<span class="text-muted font-weight-bold">Summary & Print</span>
																		<a href="summary"><span id="summary" class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-1 min-w-45px"></span></a>
																	</div>
														<!-- </div> -->
													<!-- end -->
													
													<!-- </div> -->
													</div>

												</div>
											</div>
										</div>
										
									</div>
									<!--end::Aside-->

									<!--begin::LayoutTimeline-->
									<div class="flex-row-fluid ml-lg-8">
										

										<div class="card card-custom gutter-b">
										<div class="card card-custom">
										<div class="container">
										<!--begin::Header-->
										<div class="ad-header" style="margin-top:10px; padding: 13px;">
											Application Processing Tracking 
										</div>
											<!--end::Header-->

											<!--begin::Body-->
											<div class="row">
												<div class="col">
													<div class="timeline-steps aos-init aos-animate" data-aos="fade-up" style="margin-top:10px; padding: 13px;">
														<div class="timeline-step" id="step-application">
															<div class="timeline-content">
																<div class="inner-circle"></div>
																<p><small>Application</small></p>
															</div>
														</div>
														<div class="timeline-step" id="step-processing">
															<div class="timeline-content">
																<div class="inner-circle"></div>
																<p><small>Processing</small></p>
															</div>
														</div>
														<div class="timeline-step" id="step-result">
															<div class="timeline-content">
																<div class="inner-circle"></div>
																<p><small>Result</small></p>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end::Body-->
											
										</div>
										</div>
										</div>
									  
								
									<!-- start ::cardTable -->
									<div class="card card-custom gutter-b">
										<div class="card card-custom">
											<!--begin::Body-->
											<div class="card-body p-0">
												<div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                                        <!-- begin ::Table -->
                                                        <div class="table-responsive">

															<table class="table table-borderless table-vertical-center">
																<thead class="ad-header" style="margin-top:10px; padding: 13px;">
																			<tr>
																				<th scope="col" style="min-width: 120px">Date</th>
																				<th scope="col" style="min-width: 120px">Subject</th>
																				<th scope="col" style="min-width: 120px">Status/View</th>
																			</tr>
																</thead>
																	<tbody>
																		<tr id="sttmntdraft">
																			<td class="pl-0">01/10/2024</td>
																			<td>Successful sign up application postgraduate. Please complete checklist</td>
																			<td><a href="./apply">Click Here</a></td>
																			<!-- <td><span class="label label-grey label-pill label-inline mr-2">Draft</span></td> -->
																		</tr>
																		<tr id="sttmntnew">
																			<td class="pl-0">14/10/2024</td>
																			<td>Your application has been submitted</td>
																			<!-- <td><a href="form/apply.php">Click Here</a></td> -->
																			<td><span class="label label-primary label-pill label-inline mr-2">New</span></td>
																		</tr>
																		<tr id="sttmntproccess">
																			<td class="pl-0">20/10/2024</td>
																			<td>Your application has been processed</td>
																			<!-- <td><a href="">Click Here</a></td> -->
																			<td><span class="label label-warning label-pill label-inline mr-2">Processing</span></td>
																		</tr>
																		<tr id="sttmntapprove">
																			<td class="pl-0">25/10/2024</td>
																			<td><span id="approvedstt"></span></td>
																			<!-- <td><a href="form/acceptance.php">Accept</a>|<a href="form/acceptance.php">Reject</a></td> -->
																			<td><a href="http://localhost/pascav2/public/accept"><span id ="updaccept" class="label label-success label-pill label-inline mr-2">Accept</a></span>
																			<a><span class="label label-danger label-pill label-inline mr-2" id="updreject">Reject</span></a>
																			<a><span class="symbol-label" id="viewpdf">
																				<span class="svg-icon svg-icon-success svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Devices\Printer.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"/>
																						<path d="M16,17 L16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 L8,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,15 C21,16.1045695 20.1045695,17 19,17 L16,17 Z M17.5,11 C18.3284271,11 19,10.3284271 19,9.5 C19,8.67157288 18.3284271,8 17.5,8 C16.6715729,8 16,8.67157288 16,9.5 C16,10.3284271 16.6715729,11 17.5,11 Z M10,14 L10,20 L14,20 L14,14 L10,14 Z" fill="#000000"/>
																						<rect fill="#000000" opacity="0.3" x="8" y="2" width="8" height="2" rx="1"/>
																					</g>
																				</svg><!--end::Svg Icon-->
																				</span>
																			</span></a>
																		</td>
																		</tr>
																		<!-- <tr>
																			<td class="pl-0">25/10/2024</td>
																			<td>Your application has not been approved</td>
																			<td><span class="label label-danger label-pill label-inline mr-2">Click Here</span></td>
																		</tr> -->
																	</tbody>
															</table>
                                                </div>
                                                 <!-- end ::Table -->
												</div>												
											</div>
											<!--end::Body-->
										</div>
									</div>
									<!-- end ::cardTable -->
								</div>
								<!--end::LayoutTimeline-->
								</div>
								<!--end::Page Layout-->
							</div>
							<!--end::Container-->

						<!--end::Entry-->

					</div><!--end::Content-->				
				</div><!--end::Wrapper-->			
			</div><!--end::Page-->			
		</div><!--Starter-->
		<!--end::Main-->
		<!-- begin::User Panel-->
		<?php echo view('/footermain.php'); ?>
		<!-- end::User Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!-- begin custom js -->
		<script src="assets/js/custom/custom.js"></script>
		<script src="../assets/js/custom/customfunc.js"></script>
		<!-- end custom js -->
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/widgets.js"></script>
		<!--end::Page Scripts-->
		
	</body>
	<!--end::Body-->
</html>