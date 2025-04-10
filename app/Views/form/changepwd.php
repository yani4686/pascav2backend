
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
	<!--Starter-->
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
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->					
						<!--begin::Container-->
						<div class="container">
                        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="">
                            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('pascav2/assets/media/bg/bg-3.jpg');">
                                <div class="login-form text-center p-7 position-relative overflow-hidden">
                                        <!--begin::Login Header-->
                                        <div class="d-flex flex-center mb-15">
                                            <a href="#">
                                                <img src="pascav2/assets/images/logounisza.png" class="max-h-75px" alt="" />
                                            </a>
                                        </div>
                                        <!--end::Login Header-->
                        <form role="form" id="idFrmChangePwd">
                            <div class="card-body">
                
                                <!-- <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">Current Password</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="password" class="form-control form-control-lg form-control-solid mb-2" value="" placeholder="Current password" />
                                        <a href="#" class="text-sm font-weight-bold">Forgot password ?</a>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">New Password</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <input type="password" class="form-control form-control-lg form-control-solid" value="" placeholder="New password" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">Verify Password</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <input type="password" class="form-control form-control-lg form-control-solid" value="" placeholder="Verify password" />
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-group d-flex flex-wrap flex-center mt-10">
                                        <button id="resetpwd" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Submit</button>
                                        <!-- <button id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button> -->
                                    </div>
                    </form>
                    </div><!-- end container -->
                    </div><!-- end container -->
                    </div><!-- end container -->
		                </div><!-- end container -->
				
                    </div><!--end::Content-->
<!--begin::Footer-->
<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
		<!--begin::Container-->
		<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
			<!--begin::Copyright-->
			<div class="text-dark order-2 order-md-1">
				<span class="text-muted font-weight-bold mr-2">2020©</span>
				<a href="" target="_blank" class="text-dark-75 text-hover-primary">yani</a>
			</div>
		</div>
		<!--end::Container-->
</div>
<!--end::Footer-->

</div><!--end::Wrapper-->
	
</div><!--end::Page-->

</div><!--End Starter-->

		<!--end::Main-->

		<!-- begin::User Panel-->
		<?php echo view('/form/footer.php'); ?>
		<!-- end::User Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="pascav2/assets/plugins/global/plugins.bundle.js"></script>
		<script src="pascav2/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="pascav2/assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!-- <script src="pascav2/assets/plugins/custom/uppy/uppy.bundle.js"></script>
		<script src="pascav2/assets/js/pages/crud/file-upload/uppy.js"></script> -->
        <!-- begin custom js -->
        <script src="pascav2/assets/js/custom/custom.js"></script>
        <script src="pascav2/assets/js/custom/customfunc.js"></script>
        <script src="pascav2/assets/js/custom/lookup.js"></script>
        <script src="pascav2/assets/js/custom/profile.js"></script>
        <!-- end custom js -->
	</body>
	<!--end::Body-->
</html>