
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="../../../">
		<meta charset="utf-8" />
		<title>Form Application</title>
		<meta name="description" content="Default form examples" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
        <!--begin::Page Custom Styles(used by this page)-->
		<link href="pascav2/assets/css/pages/login/classic/login-4.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="pascav2/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="pascav2/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="pascav2/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
        <!-- begin custom css -->
        <link href="pascav2/assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- <link rel="stylesheet" href="assets/css/bootstrap/3.4.1/bootstrap.min.css"> -->
        <!-- end custom css -->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="pascav2/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="pascav2/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="pascav2/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="pascav2/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="pascav2/assets/media/logos/favicon.ico" />
	</head>
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
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						<a href="index.php" class="brand-logo">
							<img alt="Logo" src="pascav2/assets/media/logos/Admission.png" />
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
							<?php echo view('/form/sidemenu.php'); ?>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<!-- <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper"> -->
                    <!--begin::Login-->
			    <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
                    <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('pascav2/assets/media/bg/bg-3.jpg');">
                        <div class="login-form text-center p-7 position-relative overflow-hidden">
                            	<!--begin::Login Header-->
                                <div class="d-flex flex-center mb-15">
                                    <a href="#">
                                        <img src="pascav2/assets/images/logounisza.png" class="max-h-75px" alt="" />
                                    </a>
                                </div>
						        <!--end::Login Header-->
                    <!--begin::Login Sign in form-->
						<div class="login-signin">
                            <div class="mb-20">
								<h3>Welcome! Please Login Here</h3>
								<div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
							</div>
                        <!-- </div> -->
                        <form class="form" id="kt_login_signin_form">
								<div class="form-group mb-5">
									<input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Username" name="username" id="username" autocomplete="off" />
								</div>
								<div class="form-group mb-5">
									<input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" id="password"/>
								</div>
								<div class="form-group d-flex flex-wrap justify-content-between align-items-center">
									<!-- <div class="checkbox-inline">
										<label class="checkbox m-0 text-muted">
										<input type="checkbox" name="remember" />
										<span></span>Remember me</label>
									</div> -->
									<a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forget Password ?</a>
								</div>
								<!-- <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Sign In</button> -->
								<button type="button" id="login_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Log In</button>
								<!-- <button type="button" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4" id="btnKemaskini" onclick="executeSubmitFrm('SubmitConfirm')">Kemaskini</button> -->
							</form>
                            <div class="mt-10">
								<span class="opacity-70 mr-4">Are New Here?</span>
								<a href="javascript:;" id="kt_login_signup" class="text-muted text-hover-primary font-weight-bold">Create New Account</a>
							</div>
                        </div>
                    <!--end::Login Sign in form-->
                    <!--begin::Login Sign up form-->
                        <div class="login-signup">
                                <div class="mb-20">
                                    <h3>Sign Up</h3>
                                    <div class="text-muted font-weight-bold">Enter your details to create your account</div>
                                </div>
                                <form class="form" id="kt_login_signup_form">

                                    <div class="form-group row">
									<label class="col-lg-4 col-form-label">Category<span class="text-danger">*</span></label>
														<div class="col-lg-8"  id="katwarga">
															<div class="radio-inline">
																<label class="radio">
																<input name="stswarga" id ="stswarga" type="radio" value="1"/>
																<span></span>Malaysian</label>

																<label class="radio">
																<input name="stswarga" id ="stswarga" type="radio" value="2"/>
																<span></span>Non Malaysian</label>																
															</div>
														</div>
                                    </div>
                                    <!-- <div class="form-group row">
									<label class="col-lg-4 col-form-label">UserID <span class="text-danger">*</span></label>
										<div class="col-lg-8"  id ="nokplabel">
											<input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="IC No" name="icno" id="icno"/>
										</div>
										<div class="col-lg-8"  id ="nopasslabel">
                                        <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Passport No" name="passno" id="passno"/>
										</div>
                                    </div> -->
									<div class="form-group row">
									<label class="col-lg-4 col-form-label">Username<span class="text-danger">*</span></label>
                                    	<div class="col-lg-8">
                                        <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Username" name="usr" id="usr"/>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-4 col-form-label">Email <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
											<input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="email" id ="email" autocomplete="off" />
											</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-4 col-form-label">Password <span class="text-danger">*</span></label>
										<div class="col-lg-8">  
											<input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" id="password"/>
                                   		 </div>
                                    </div>
									  <div class="form-group row">
									  <label class="col-lg-4 col-form-label">Confirm Password <span class="text-danger">*</span></label>
										<div class="col-lg-8">
											  <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" />
										</div>
                                    </div>
                                    <!-- <div class="form-group mb-5 text-left">
                                        <div class="checkbox-inline">
                                            <label class="checkbox m-0">
                                            <input type="checkbox" name="agree" />
                                            <span></span>I Agree the
                                            <a href="#" class="font-weight-bold ml-1">terms and conditions</a>.</label>
                                        </div>
                                        <div class="form-text text-muted text-center"></div>
                                    </div> -->
                                    <div class="form-group d-flex flex-wrap flex-center mt-10">
                                        <button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Sign Up</button>
                                        <button id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                                    </div>
                                </form>
                            </div>
                    <!-- end::Login Sign up form -->
                    <!--begin::Login forgot password form-->
						<div class="login-forgot">
							<div class="mb-20">
								<h3>Forgotten Password ?</h3>
								<div class="text-muted font-weight-bold">Enter your email to reset your password</div>
							</div>
							<form class="form" id="kt_login_forgot_form">
								<div class="form-group mb-10">
									<input class="form-control form-control-solid h-auto py-4 px-8" type="text" placeholder="Email" name="email" id="email" autocomplete="off" />
								</div>
								<div class="form-group d-flex flex-wrap flex-center mt-10">
									<button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Request</button>
									<button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
								</div>
							</form>
						</div>
						<!--end::Login forgot password form-->
						 <!--begin::verify password form-->
						 <!-- <div class="login-verify">
							<div class="mb-20">
								<h3>Verify Email ?</h3>
								<div class="text-muted font-weight-bold">Your email has been verified! You can now log in.</div>
							</div>
							<form class="form" id="kt_login_verify_form">
							</form>
						</div> -->
						 <!--end::verify password form-->
					<!--begin::Content-->
					<!-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content"></div> -->
					<!--end::Content-->
					<!--begin::Footer-->
					<!-- <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer"> -->
						<!--begin::Container-->
						<!-- <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between"> -->
							<!--begin::Copyright-->
							<!-- <div class="text-dark order-2 order-md-1">
                                <span class="text-muted font-weight-bold mr-2">2024©</span>
								<a href="" target="_blank" class="text-dark-75 text-hover-primary">PPIR Yani</a>
							</div> -->
							<!--end::Copyright-->
						<!-- </div> -->
						<!--end::Container-->
					<!-- </div> -->
					<!--end::Footer-->
                        </div>
                    </div>
				</div>
                <!-- End ::Login -->
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->

		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="pascav2/assets/plugins/global/plugins.bundle.js"></script>
		<script src="pascav2/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="pascav2/assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
        <!--begin::Page Scripts(used by this page)-->
        <script src="pascav2/assets/js/pages/custom/login/login-general.js"></script>
		<!--end::Page Scripts-->
        <!-- begin custom js -->
        <script src="pascav2/assets/js/custom/custom.js"></script>
        <!-- <script src="pascav2/assets/js/custom/customfunc.js"></script> -->
        <!-- end custom js -->
	</body>
	<!--end::Body-->
</html>