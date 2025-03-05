
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
                            <form role="form" id="idFrmSummary">
							    <div class="panel panel-primary">
                                <div class="panel-heading"><h3 class="panel-title">Summary Application</h3></div>
																				
                                                                                <div class="panel-body form-horizontal m-10">
                                                
                                                                                <!-- <div class="card-toolbar">
                                                                                    <button type="button" class="btn btn-success mr-2 printPage" onclick="window.print()">Print</button>
                                                                                </div> -->
                                                                                <div class="d-flex justify-content-end">
                                                                                    <div class="d-flex justify-content-end">
                                                                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon printPageIcon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="icon-2x text-dark-50 flaticon-download"></i>
                                                                                    </a>
                                                                                    </div>
                                                                                </div>
                                                
                                                                                <div class="mb-3">
                                                                                <!--  -->
                                                                                <h3 class="font-size-h6 mb-5">Profile Information</h3>								
                                                                                    <div class="separator separator-dashed my-6"></div>
                                                
                                                                                    <div class="form-group row">
                                                                                                <label class="col-xl-3 col-lg-3 col-form-label">Passport-sized Picture<span class="text-danger">*</span><img style="margin:5px"></label>
                                                                                                    <div class="col-lg-9 col-xl-6">
                                                                                                        <!-- <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(pascav2/assets/media/users/blank.png)">
                                                                                                            <div class="image-input-wrapper" style="background-image: url(pascav2/assets/media/users/300_21.jpg)"></div>
                                                                                                        </div>	 -->
                                                                                                        <div class="image-boxdashboard" id="imageBox">
                                                                                                                <img id="previewImage1" src="./pascav2/assets/media/users/blank.png" alt="Passport Picture" style="width: 100%; height: 100%; display: block;">
                                                                                                            </div>
                                                                                                    </div>
                                                                                    </div>
                                                
                                                                                    <div class="form-group row my-2">
                                                                                                
                                                                                                <label class="col-lg-3 col-form-label">Name : </label>
                                                                                                <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelnama" data-name="labelnama"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">IC/Passport No. : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelic" data-name="labelic"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Date Of Birth : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeldob"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Nationality Status : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelnatstat"></span>
                                                                                                    </div>
                                                                                                
                                                                                                <label class="col-lg-3 col-form-label">Nationality : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelnat"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Disablity : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeldisable"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Email : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelemel"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Corresponding Address : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdcurr"></span>
                                                                                                    </div>
                                                                                                
                                                                                                <label class="col-lg-3 col-form-label">State : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdstate"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Country : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdcountry"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Tel No : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdtel"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Mobile No : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdhp"></span>
                                                                                                    </div>
                                                
                                                                                                
                                                                                                <label class="col-lg-3 col-form-label">Off. No : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdtel"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Fax No : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdhp"></span>
                                                                                                    </div>
                                                
                                                                                            <label class="col-lg-3 col-form-label"></label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id=""></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Home Address : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdcurr"></span>
                                                                                                    </div>
                                                                                                
                                                                                                <label class="col-lg-3 col-form-label">State : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdstate"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Country : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdcountry"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Tel No : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdtel"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Mobile No : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdhp"></span>
                                                                                                    </div>
                                                
                                                                                                
                                                                                                <label class="col-lg-3 col-form-label">Off. No : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdtel"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Fax No : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeladdhp"></span>
                                                                                                    </div>
                                                                                                
                                                                                </div>
                                                
                                                                                <div class="separator separator-dashed my-6"></div>
                                                                                <h3 class="font-size-h6 mb-5">Application Details</h3>
                                                
                                                                                <div class="form-group row my-2">
                                                
                                                                                             <label class="col-lg-3 col-form-label">Mode of Study : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelmodestdy"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Type of Study : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeltypestudy"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Programme : </label>
                                                                                                    <div class="col-lg-4">
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelkdprogram"></span>
                                                                                                    </div>
                                                                                </div>
                                                
                                                                                <div class="separator separator-dashed my-6"></div>
                                                                                <h3 class="font-size-h6 mb-5">Academic Qualification</h3>
                                                
                                                                                <div class="form-group row my-2">
                                                
                                                                                                <label class="col-lg-2 col-form-label">Highest Tertiary Education : </label>
                                                                                                    <div class="col-lg-4"> 
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labeltypestudy"></span>
                                                                                                    </div>	
                                                                                                    
                                                                                                <label class="col-lg-2 col-form-label">Awarding University (Bachelor/equivalent) : </label>
                                                                                                    <div class="col-lg-4"> 
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-2 col-form-label">Class/CGPA : </label>
                                                                                                    <div class="col-lg-4"> 
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelcgpa"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Country Awarding : </label>
                                                                                                    <div class="col-lg-4"> 
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                    </div>
                                                
                                                                                                    <label class="col-lg-2 col-form-label">Awarding University (Master /equivalent) : </label>
                                                                                                    <div class="col-lg-4"> 
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-2 col-form-label">Class/CGPA : </label>
                                                                                                    <div class="col-lg-4"> 
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelcgpa"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Country Awarding : </label>
                                                                                                    <div class="col-lg-4"> 
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Proposed Research Title/Area : </label>
                                                                                                    <div class="col-lg-4"> 
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Proposed Supervisor : </label>
                                                                                                    <div class="col-lg-4"> 
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                    </div>
                                                
                                                                                                <label class="col-lg-3 col-form-label">Portfolio Document : </label>
                                                                                                    <div class="col-lg-4"> 
                                                                                                        <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                    </div>
                                                                                </div>
                                                
                                                                                <div class="separator separator-dashed my-6"></div>
                                                                                <h3 class="font-size-h6 mb-5">English Language Proficiency</h3>
                                                
                                                                                <div class="form-group row my-2">								
                                                
                                                                                            <label class="col-lg-3 col-form-label">Exam Type : </label>
                                                                                                <div class="col-lg-4"> 
                                                                                                    <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                </div>
                                                
                                                                                            <label class="col-lg-3 col-form-label">Result : </label>
                                                                                                <div class="col-lg-4"> 
                                                                                                    <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                </div>
                                                
                                                                                            <label class="col-lg-3 col-form-label">Registration No./Candidate No. : </label>
                                                                                                <div class="col-lg-4"> 
                                                                                                    <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                </div>
                                                
                                                                                            <label class="col-lg-3 col-form-label">Date of Examination : </label>
                                                                                                <div class="col-lg-4"> 
                                                                                                    <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                </div>								
                                                                                </div>
                                                
                                                                                <div class="separator separator-dashed my-6"></div>
                                                                                <h3 class="font-size-h6 mb-5">Additional</h3>
                                                
                                                                                <div class="form-group row my-2">								
                                                
                                                                                            <label class="col-lg-3 col-form-label">Agent Name : </label>
                                                                                                <div class="col-lg-4"> 
                                                                                                    <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                </div>
                                                
                                                                                            <label class="col-lg-3 col-form-label">Agent Email : </label>
                                                                                                <div class="col-lg-4"> 
                                                                                                    <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                </div>
                                                
                                                                                            <label class="col-lg-3 col-form-label">Type Of Sponsorship : </label>
                                                                                                <div class="col-lg-4"> 
                                                                                                    <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                </div>
                                                
                                                                                            <label class="col-lg-3 col-form-label">HouseHold Income : </label>
                                                                                                <div class="col-lg-4"> 
                                                                                                    <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                </div>								
                                                                                </div>
                                                
                                                                                <div class="separator separator-dashed my-6"></div>
                                                                                <h3 class="font-size-h6 mb-5">Submission</h3>
                                                
                                                                                <div class="form-group row my-2">								
                                                
                                                                                            <label class="col-lg-6 col-form-label">Approval of Program Changes : </label>
                                                                                                <div class="col-lg-4"> 
                                                                                                    <span class="form-control-plaintext font-weight-bolder" id="labelawarduni"></span>
                                                                                                </div>					
                                                                                </div>
                                                
                                                                                                <div class="row">
                                                                                                    <div class="col">
                                                                                                        <button class="btn btn-primary printPdf pull-right m-1" type="button" data-inline="true">Print</button>
                                                                                                        </div>
                                                                                                </div>
                                                                                <!--  -->
                                                                                </div>
                                                                                </div>
								
								</div>   
                            </form>

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