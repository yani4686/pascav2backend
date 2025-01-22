
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
					<div class="content d-flex flex-column flex-column-fluid">
						<!--begin::Container-->
						<div class="container">
                                <form role="form" id="idFrmAddInfo">
<!--  -->
							<div class="panel panel-primary">

								<div class="panel-heading"><h3 class="panel-title">Update Addition Information</h3></div>
								
									<div class="panel-body form-horizontal m-10">
									 <div class="mb-3">

									 <div class="form-group row">
									 	<label class="col-lg-3 col-form-label">Name : </label>
												<div class="col-lg-4">
														<span class="form-control-plaintext font-weight-bolder" id="labelnama" data-name="labelnama"></span>
													</div>
										<label class="col-lg-3 col-form-label">IC/Passport No. : </label>
												<div class="col-lg-4">
													<span class="form-control-plaintext font-weight-bolder" id="labelic" data-name="labelic"></span>
												</div>
										<label class="col-lg-3 col-form-label">Nationality : </label>
												<div class="col-lg-4">
													<span class="form-control-plaintext font-weight-bolder" id="labelnat"></span>
												</div>
										
										<label class="col-lg-3 col-form-label">Corresponding Address : </label>
												<div class="col-lg-4">
													<span class="form-control-plaintext font-weight-bolder" name ="labeladdcurr" id="labeladdcurr"></span>
												</div>
											
										<label class="col-lg-3 col-form-label">State : </label>
												<div class="col-lg-4">
													<span class="form-control-plaintext font-weight-bolder" id="labeladdstate"></span>
												</div>

										<label class="col-lg-3 col-form-label">Country : </label>
												<div class="col-lg-4">
													<span class="form-control-plaintext font-weight-bolder" id="labeladdcountry"></span>
													</div>	
									</div>	
								<div class="form-group row">

										<label class="col-lg-3 col-form-label">Dun <span class="text-danger">*</span></label>
												<div class="col-lg-4">
												<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="dun" name="dun">
												</select>
												</div>

										<label class="col-lg-3 col-form-label">Parliment <span class="text-danger">*</span></label>
												<div class="col-lg-4">
													<input type="text" class="form-control" name="parliment" id="parlimen" readonly/>
												</div>
										
										<label class="col-lg-3 col-form-label">Type of Secondary School <span class="text-danger">*</span></label>
												<div class="col-lg-4">
												<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="sek" name="sek">
												</select>
												</div>
										<label class="col-lg-3 col-form-label">BI(SPM)<span class="text-danger">*</span></label>
												<div class="col-lg-4">
													<input type="text" class="form-control" name="bispm" id="bispm"/>
												</div>

									</div>

									 <div class="row" id="">
										<div class="col">
											<button class="btn btn-primary updaddinfo pull-right m-1" type="button" data-inline="true">Update</button>
										</div>
									</div>
									
<div class="row"><span class="text-danger">*</span><span class="text-danger">*</span><span class="form-text text-muted">Please update Additional Information above before Generate Offer Letter</span></div>

<!--  -->
									 </div>
									 </div>
								  </div>
								  
								</form>

					<!--begin::Content-->
                                <form role="form" id="idFrmAccept">
<!--  -->
								 <div class="panel panel-primary">
									<div class="panel-heading">
											<h3 class="panel-title">Acceptance Approval</h3>
									</div>

									<div class="panel-body form-horizontal m-10">
									 <div class="mb-3">
										<div class="form-group row my-2">
											<label class="col-2 col-form-label">Name:</label>
											<div class="col-4">
												<span class="form-control-plaintext font-weight-bolder">MR ALI</span>
											</div>
										<!-- </div>
										<div class="form-group row my-2"> -->
											<label class="col-2 col-form-label">IC No/ Passport No:</label>
											<div class="col-4">
												<span class="form-control-plaintext font-weight-bolder">SQ123</span>
											</div>
										</div>
										
										<div class="form-group row my-2">
											<label class="col-2 col-form-label">Programme:</label>
											<div class="col-4">
												<span class="form-control-plaintext font-weight-bolder">Master Of Science</span>
											</div>
										<!-- </div>
										<div class="form-group row my-2"> -->
											<label class="col-2 col-form-label">Mode</label>
											<div class="col-4">
												<span class="form-control-plaintext font-weight-bolder">Research</span>
											</div>
										</div>

										<div class="form-group row my-2">
											<label class="col-2 col-form-label">Faculty</label>
											<div class="col-4">
												<span class="form-control-plaintext font-weight-bolder">FIK</span>
											</div>
										</div>
										<div class="form-group row my-2">
											<label class="col-2 col-form-label">Type Of Study</label>
											<div class="col-4">
												<span class="form-control-plaintext font-weight-bolder">Full Time</span>
											</div>
										</div>
										<div class="form-group row my-2">
											<label class="col-2 col-form-label">Date Of Registration:</label>
											<div class="col-4">
												<span class="form-control-plaintext font-weight-bolder">18 November 2024</span>
											</div>
										</div>
									</div>

									<div class="separator separator-dashed my-6"></div>

									<div class="form-group row my-2">
										<!-- <label class="col-2 col-form-label">Date Of Approve:</label> -->
												<div class="checkbox-inline">
														<label class="checkbox m-0">
														<input type="checkbox" name="stsagree" id="stsagree" value ="1"/>
														<span></span>I understand and accept the offer from Unisza.</label>
													</div>
												<div class="form-text text-muted text-center"></div>					
									</div>

									<div class="row">
										<label class="col-lg-12 col-form-label text-muted"><span class="text-danger">*</span><span class="text-danger">*</span>For your information,this offer letter valid 1 year after approval date. If the application expires, a new application process is required again.</label>
									</div>

									<div class="row" id="hidebtnoffer">
										<div class="col">
											<button class="btn btn-primary printPdfsurat pull-right m-1" type="button" data-inline="true">Generate Offer Letter</button>
										</div>
									</div>
<!--  -->
									</div>  
									</div>   
									</div>   
                                </form>

								<!-- <form role="form" id="idFrmAccept">
								<div class="panel panel-primary" id="">
									<div class="panel-heading">
											<h3 class="panel-title">Offer Letter</h3>
									</div>
		
									<div class="row">
										<div class="col">
											<button class="btn btn-primary pull-right m-1" type="button" data-inline="true">Generate Offer Letter</button>
										</div>
									</div>

								</div>   
                                </form> -->
					<!--end::Content-->
					<!--begin::Footer-->
					<?php echo view('/form/footer.php'); ?>
					<!--end::Footer-->
					</div><!-- end container -->
				
				</div><!--end::Content-->
				
				</div><!--end::Wrapper-->
					
				</div><!--end::Page-->
				
				</div><!--End Starter-->
				
	
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