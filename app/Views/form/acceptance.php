
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
							<div class="panel panel-primary accept-content">
								<div class="panel-heading"><h3 class="panel-title">Acceptance Approval (MyMOHES DATA)</h3></div>
								
									<div class="panel-body form-horizontal m-10">
									 <div class="mb-3">

									 <h4 class="font-size-h6 mb-5">Approval Details</h4>

									 <div class="form-group row">
									 	<label class="col-lg-2 col-form-label">Name: </label>
												<div class="col-lg-4">
														<span class="form-control-plaintext font-weight-bolder" id="labelnama" data-name="labelnama"></span>
													</div>
										<label class="col-lg-2 col-form-label">IC/Passport No.: </label>
												<div class="col-lg-4">
													<span class="form-control-plaintext font-weight-bolder" id="labelic" data-name="labelic"></span>
												</div>
									</div>
									<div class="form-group row">
											<label class="col-2 col-form-label">Programme:</label>
											<div class="col-lg-4">
												<span class="form-control-plaintext font-weight-bolder" id="labelkdprogrm" data-name="labelkdprogrm"></span>
											</div>										
											<label class="col-2 col-form-label">Faculty:</label>
											<div class="col-lg-4">
												<span class="form-control-plaintext font-weight-bolder" id="labelfakulti" data-name="labelfakulti"></span>
											</div>
										</div>
										<div class="form-group row my-2">
												
											<label class="col-2 col-form-label">Email:</label>
											<div class="col-lg-4">
												<span class="form-control-plaintext font-weight-bolder" id="labelemel" data-name="labelemel"></span>
											</div>																			
											<label class="col-2 col-form-label">Date Of Birth:</label>
											<div class="col-lg-4">
												<span class="form-control-plaintext font-weight-bolder" id="labeldob" data-name="labeldob"></span>
											</div>
										</div>
										<div class="form-group row my-2">
											<label class="col-2 col-form-label">Date Of Approval:</label>
											<div class="col-lg-4">
												<span class="form-control-plaintext font-weight-bolder" id="tkhstatus" data-name="tkhstatus"></span>
											</div>
							
											<label class="col-2 col-form-label">Offer Letter No:</label>
											<div class="col-lg-4">
												<span class="form-control-plaintext font-weight-bolder" id="labelnosurat" data-name="labelnosurat"></span>
											</div>
										</div>
										<div class="separator separator-dashed my-6"></div>
										<!--  -->								

									 <h4 class="font-size-h6 mb-5">Update Additional Personal Details</h4><span class="form-text text-muted">Please fill in/update the addtional information form below. All fields must be filled up to obtain Offer Letter</span>
									 <div class="separator separator-dashed my-6"></div>
									 <div class="form-group row">
										<label class="col-lg-3 col-form-label">Mobile No <span class="text-danger">*</span></label>
											<div class="col-lg-3">
												<input type="text" class="form-control" name="mobilenoupd" id="mobilenoupd" />
											</div>
									</div>
									 <div class="separator separator-dashed my-6"></div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Corresponding Address : </label>
												<!-- <div class="col-lg-4">
													<span class="form-control-plaintext font-weight-bolder" name ="labeladdcurr" id="labeladdcurr"></span>
												</div> -->
												<div class="col-lg-4">
                                                        <input type="text" class="form-control" name="corradd" id="corradd" oninput="this.value = this.value.toUpperCase()"/>
                                                </div>
												<div class="col-lg-4">
                                                        <input type="text" class="form-control" name="corradd" id="corradd" oninput="this.value = this.value.toUpperCase()"/>
                                                </div>
									<!-- </div>
									<div class="form-group row"> -->										
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Post/Zip code <span class="text-danger">*</span></label>
											<div class="col-lg-3">
												<input type="text" class="form-control" name="postcorradd" id="postcorradd" />
											</div>
										<label class="col-lg-3 col-form-label">City<span class="text-danger">*</span></label>
											<div class="col-lg-4">
												<input type="text" class="form-control" name="bndrcorradd" id="bndrcorradd" oninput="this.value = this.value.toUpperCase()"/>
											</div>											
									</div>
									<div class="form-group row">
									<label class="col-lg-3 col-form-label">State : </label>
												<div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="kdnegeri" name="kdnegeri">
                                                        </select>
                                                    </div>
										<label class="col-lg-3 col-form-label">Country : </label>
												<!-- <div class="col-lg-4">
													<span class="form-control-plaintext font-weight-bolder" name ="labeladdcountry" id="labeladdcountry"></span>
												</div>	 -->
												<div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose"data-live-search="true" id="kdnegara" name="kdnegara" >
                                                        </select>
                                                </div>
									</div>
									<div class="separator separator-dashed my-6"></div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Home Address : </label>
										<div class="col-lg-4">
                                                        <input type="text" class="form-control" name="labeladdtetap" id="labeladdtetap" oninput="this.value = this.value.toUpperCase()"/>
                                                </div>
												<div class="col-lg-4">
                                                        <input type="text" class="form-control" name="labeladdtetap1" id="labeladdtetap1" oninput="this.value = this.value.toUpperCase()"/>
                                                </div>									
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Post/Zip code : <span class="text-danger">*</span></label>
											<div class="col-lg-3">
												<input type="text" class="form-control" name="postcodehomeadd" id="postcodehomeadd" />
											</div>
										<label class="col-lg-3 col-form-label">City :<span class="text-danger">*</span></label>
											<div class="col-lg-4">
												<input type="text" class="form-control" name="bndrhomeadd" id="bndrhomeadd" oninput="this.value = this.value.toUpperCase()"/>
											</div>											
									</div>
									<div class="form-group row">
									<label class="col-lg-3 col-form-label">State : </label>
												<div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="kdnegerihome" name="kdnegerihome">
                                                        </select>
                                                    </div>
										<label class="col-lg-3 col-form-label">Country : </label>
												<div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose"data-live-search="true" id="kdnegarahome" name="kdnegarahome" >
                                                        </select>
                                                </div>
									</div>
									<div class="separator separator-dashed my-6"></div>
									<div class="form-group row">
									 <label class="col-lg-3 col-form-label">Place of Birth : </label>
												<div class="col-lg-4">
													<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="birthplace" name="birthplace" required>
												</select>
												</div>
									<label class="col-lg-3 col-form-label">Gender: </label>
												<div class="col-lg-4">
													<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="gender" name="gender">
													<option value="L">MALE</option>
                    								<option value="P">FEMALE</option>
												</select>
												</div>
									</div>
									<div class="form-group row">	
										<label class="col-lg-3 col-form-label">Nationality Status : </label>										
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id ="warganegsta" name ="warganegsta">
															<option value="1">BUMIPUTERA</option>
                                                            <option value="2">Non BUMIPUTERA</option>   
                                                        </select>
                                                    </div>											 	
										<!-- <label class="col-lg-3 col-form-label">Nationality: </label>										
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id ="warganeg" name ="warganeg">
                                                        </select>
                                                    </div> -->
										<label class="col-lg-3 col-form-label">Race : </label>
												<div class="col-lg-4">
													<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="race" name="race">
												</select>
												</div>
									</div>																									
									<div class="form-group row">									
									<label class="col-lg-3 col-form-label">Religion : </label>
												<div class="col-lg-4">
													<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="religion" name="religion">
												</select>
												</div>							
									<!-- </div>
									<div class="form-group row"> -->
									<label class="col-lg-3 col-form-label">Marital Status: </label>
												<div class="col-lg-4">
													<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="marital" name="marital">
												</select>
												</div>
									</div>
									<div class="form-group row">
									<label class="col-lg-3 col-form-label">Status OKU<span class="text-danger">*</span></label>
											<div class="col-lg-4">
												<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id ="stsoku" name ="stsoku">
												</select>
											</div>
									<label class="col-lg-3 col-form-label" id="nooku">No OKU<span class="text-danger">*</span></label>
												<div class="col-lg-4" id="divoku">
													<input type="text" class="form-control" name="no_oku" id="no_oku" />
												</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Dun <span class="text-danger">*</span></label>										
												<div class="col-lg-4">												
												<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="dun" name="dun">
												</select><span class="form-text text-muted">**For local applicant only</span>
												</div>
												
										<label class="col-lg-3 col-form-label">Parliment <span class="text-danger">*</span></label>
												<div class="col-lg-4">
												<span class="form-control-plaintext font-weight-bolder" name ="labeladdparlimen" id="labeladdparlimen"></span>
													<!-- <select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="parlimen" name="parlimen">
												</select> -->
												</div>
									</div>
									<div class="form-group row">									
										<label class="col-lg-3 col-form-label">Type of Secondary School <span class="text-danger">*</span></label>
												<div class="col-lg-4">
												<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="sek" name="sek">
												</select>
												<span class="form-text text-muted">**For local applicant only</span>
												</div>
										<label class="col-lg-3 col-form-label">Admission Qualification <span class="text-danger">*</span></label>
												<div class="col-lg-4">
												<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="lykmsk" name="lykmsk">
												</select>
												</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">English Language (SPM)<span class="text-danger">*</span></label>
												<div class="col-lg-4">
													<!-- <input type="text" class="form-control" name="bispm" id="bispm"/> -->
													<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="bispm" name="bispm">
													</select>
													<span class="form-text text-muted">**For local applicant only</span>
												</div>
										<label class="col-lg-3 col-form-label">Malay Language (SPM)<span class="text-danger">*</span></label>
												<div class="col-lg-4">
													<!-- <input type="text" class="form-control" name="bispm" id="bispm"/> -->
													<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="bmspm" name="bmspm">
													</select>
													<span class="form-text text-muted">**For local applicant only</span>
												</div>
									</div>
									<div class="form-group row">
										<!-- <label class="col-lg-3 col-form-label">Entrance Qualification<span class="text-danger">*</span></label>
												<div class="col-lg-4">
												<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="entrance" name="entrance">
													</select>
												</div> -->
									
										<label class="col-lg-3 col-form-label">Sponsorship<span class="text-danger">*</span></label>
												<div class="col-lg-4">
												<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="tajaan" name="tajaan">
													</select><input type="text" class="form-control" id="dlltaja1" name="dlltaja1" data-toggle="tooltip" title="Please state sponsorship"/><span class="form-text text-muted">Choose 'TIADA' for no sponsorship</span>
												</div>
												</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Income<span class="text-danger">*</span></label>
												<div class="col-lg-4">
												<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="incomekd" name="incomekd">
													</select>
												<!-- </div>
												<div class="col-lg-4"> -->
												<input type="text" class="form-control" id="income" name="income"/>
												<span class="form-text text-muted">Please state amount</span>
												</div>
									</div>

									 <div class="row" id="hidebuttonupdaccept">
										<div class="col">
											<button class="btn btn-primary updaddinfo pull-right m-1" type="button" data-inline="true">Update</button>
										</div>
									</div>
									
		

		<div class="separator separator-dashed my-6"></div>

		<!-- <div class="form-group row my-2" id="hidebtnoffer">										
					<div class="checkbox-inline">
							<label class="checkbox m-0">
							<input type="checkbox" name="stsagree" id="stsagree" value ="1"/>
							<span></span>I understand and accept the offer from Unisza.</label>
						</div>
					<div class="form-text text-muted text-center"></div>					
		</div> -->

		<div class="row" id="infoacceptval">
			<label class="col-lg-12 col-form-label text-muted"><span class="text-danger">*</span><span class="text-danger">*</span>For your information,this offer letter valid 1 year after approval date. If the application expires, a new application process is required again.</label>
		</div>
			<div class="row" id="buttonviewsurat" >
				<div class="col">
				<button class="btn btn-primary previewBtnPDF pull-right m-1" type="button" data-inline="true">Preview Offer Letter</button>
					<!-- <button class="btn btn-primary saveBtnPDF pull-right m-1" type="button" data-inline="true">Download as PDF</button> -->
				</div>
			</div>

			<!-- modal show surat -->
			<!-- Bootstrap Modal for Offer Letter Preview -->
				<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="previewModalLabel">Offer Letter Preview</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div id="previewContent">Loading...</div>
							</div>
						</div>
					</div>
				</div>

<!--  -->
									
									 </div>

								  </div>
								  </div>
								  
								</form>
				
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
		<script src="pascav2/assets/js/custom/lookup.js"></script>
        <!-- end custom js -->
	</body>
	<!--end::Body-->
</html>