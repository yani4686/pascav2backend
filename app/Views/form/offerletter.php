
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<?php echo view('/form/head.php'); ?>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->

		<!--begin::Header Mobile-->
		<?php echo view('/form/headermobile.php'); ?>
		<!--end::Header Mobile-->

		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">

				<!--begin::Aside-->
				<?php echo view('/form/sidemenu.php'); ?>
				<!--end::Aside-->

				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					<!--begin::Header-->
					<?php echo view('/form/header.php'); ?>
					<!--end::Header-->

                    <!--start::Content-->
					<div class="content d-flex flex-column flex-column-fluid">
						<!--begin::Container-->
						<div class="container">	
                        <div class="headerSurat">Offer Letter</div>
                        <div id="offerContent" class="contentSurat">
                            <!-- jQuery will insert content here -->
                        </div>
                                        <!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
							<!--begin::Container-->
							<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted font-weight-bold mr-2">2020©</span>
									<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">yani</a>
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

					</div><!-- end container -->
				
				</div><!--end::Content-->
				
				</div><!--end::Wrapper-->
					
				</div><!--end::Page-->
				
				</div><!--End Starter-->

				<?php echo view('/form/footer.php'); ?>
	
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="pascav2/assets/plugins/global/plugins.bundle.js"></script>
		<script src="pascav2/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="pascav2/assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
        <!-- begin custom js -->
        <script src="pascav2/assets/js/custom/custom.js"></script>
        <script src="pascav2/assets/js/custom/customfunc.js"></script>
        <!-- end custom js -->
	</body>
	<!--end::Body-->
</html>