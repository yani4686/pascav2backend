
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
						<!-- <div class="d-flex flex-column-fluid"> -->

						<!--begin::Container-->
						<div class="container">

							<div class="ad-header" style="margin-top:10px; padding: 13px;">Admission Application</div>
                                
								<div class="stepwizard">
                                    <div class="stepwizard-row setup-panel">

                                        <div class="stepwizard-step">  <!-- col-xs-2 -->
                                            <a href="#step-1" type="button" class="btn btn-success btn-circle" id="click-1">1</a>
                                            <p><small>Profile</small></p>
                                        </div>

                                        <div class="stepwizard-step"> 
                                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled" id="click-2">2</a>
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
                                            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled" id="click-5">5</a>
                                            <p><small>Submission</small></p>
                                        </div>

										<!-- <div class="stepwizard-step"> 
                                            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled" id="click-6">6</a>
                                            <p><small>Summary&Print</small></p>
                                        </div> -->

                                    </div>
                                </div> 

								<!-- Iframe container to load content -->
								<!-- <iframe id="stepFrame" src="" style="width:100%; height:500px;" frameborder="0"></iframe> -->

                                <div class="form-group" style="display: flex;">
                                        <label style=" flex: 0 0 100%;"><span style="margin-right:10px;">Status : </span><span class="label1 label1-info lbl-font" id="stat"></span></label> 
                                </div>

                        <form role="form" id="idFrmApply">

                        <div class="panel panel-primary setup-content" id="step-1">

                            <div class="panel-heading"><h3 class="panel-title">Personal Information</h3></div>                                          
                                        
                                    <div class="panel-body form-horizontal m-10">
                                    <div class="mb-3">
									<!--  -->
									<div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Application Type <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">

                                                        <select class ="form-control selectpicker" title="Please Choose" id ="laluan" name ="laluan">
                                                            <option value="SP">Normal</option>
                                                            <option value="AP">APEL.A Qualification</option>
                                                            <!-- <option value="NG">Non Graduating Program (Research Attachment)</option> -->
                                                        </select>
                                                    </div>
									</div>
									<div class="form-group row" id ="docap">
													<label class="col-lg-3 col-form-label">APEL. A certificate<span class="text-danger">*</span>
													<span class="form-text text-muted">(Except normal)</span></label>
													<div class="col-lg-4 custom-file ap">
														<input type="file" class="custom-file-input" id ="filelalu" name="filelalu" />
														<label class="custom-file-label" for="filelalu">Choose file</label>
													</div>

													<div style="padding: 20px;" id="cpt1">
														<a href="#" id="doclalu" name="doclalu" data-file="lalu" class="view-file text-primary font-weight-bolder">View File</a>
													</div>
									</div>

											<div class="separator separator-dashed my-6"></div>

											<!-- <div id="divhide"> -->

									<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label">Passport-sized Picture<span class="text-danger">*</span><img style="margin:5px" id="info-mdl-1" src="pascav2/assets/images/info-icon-small.png" width="20" height="20" data-toggle="tooltip" title="Please click here for details information"><span class="form-text text-muted">(H 45mm X W 35mm)</span>
													</label>
														<div class="col-lg-9 col-xl-6">
															<div class="image-box" id="imageBox">
																<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change passport photo">
																	<i class="fa fa-pen icon-sm text-muted"></i>
																	<input type="file" id ="file1" name="file1" accept=".png, .jpg, .jpeg" />
																</label>
																<img id="previewImage" src="pascav2/assets/media/users/blank.png" alt="Passport Picture" style="width: 100%; height: auto; display: block;">
															</div>
														</div>
									</div>

                                    <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">IC/Passport No.<span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text"  required="required" class="form-control" name="kppass" id="kppass"/>
                                                    </div>
                                    </div>

									<div class ="form-group row">
                                                    <label class="col-lg-3 col-form-label">Name <span class="text-danger">*</span></label>
                                                    <div class="col-lg-6">
                                                        <input type="text" required class="form-control" name="fullname" id="fullname" placeholder="Full Name" oninput="this.value = this.value.toUpperCase()"/>
                                                    </div><img style="margin:5px" id="info-mdl-2" src="pascav2/assets/images/info-icon-small.png" width="20" height="20" data-toggle="tooltip" title="Please click here for details information">
                                    </div>

                                    <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Date of Birth <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="date" class="form-control" name="dob" id="dob"/>
                                                    </div>
									</div>

                                    <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Nationality Status <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" name="wargast" id="wargast" required>
                                                            <option value="1">Malaysian</option>
                                                            <option value="2">Non Malaysian</option>
                                                            <option value="3">Permanent Residence (PR)</option>
                                                        </select>
                                                    </div>
                                                    <label class="col-lg-3 col-form-label">Nationality <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id ="warganeg" name ="warganeg">
                                                        </select>
                                                    </div>
                                    </div>

									<div class="form-group row">
													<label class="col-lg-3 col-form-label">Disablity <span class="text-danger">*</span></label>
														<div class="col-lg-4">
															<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id ="stsoku" name ="stsoku">
															</select>
														</div>
													<label class="col-lg-3 col-form-label" id="nooku">No OKU<span class="text-danger">*</span></label>
														<div class="col-lg-4" id="divoku">
															<input type="text" class="form-control" name="no_oku" id="no_oku" />
														</div>
									</div>

												<div class="separator separator-dashed my-6"></div>

                                     <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Corresponding Address<span class="text-danger">*</span></label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="corradd" id="corradd" oninput="this.value = this.value.toUpperCase()"/>
                                                    </div>
									</div>
									<div class="form-group row">
													<label class="col-lg-3 col-form-label"></label>
													<div class="col-lg-8" style="">
													<input type="text" class="form-control" name="corradd1" id="corradd1"/>
                                                    </div>
													<img style="margin:5px" id="info-mdl-3" src="pascav2/assets/images/info-icon-small.png" width="20" height="20" data-toggle="tooltip" title="Please click here for details information">
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
													<label class="col-lg-3 col-form-label">State <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="kdnegeri" name="kdnegeri">
                                                        </select>
                                                    </div>
													<label class="col-lg-3 col-form-label">Country <span class="text-danger">*</span></label>
													<div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose"data-live-search="true" id="kdnegara" name="kdnegara" >
                                                        </select>
                                                    </div>
                                    </div>
												
									<div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Tel. No <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="notel" id="notel" />
                                                    </div>
													<label class="col-lg-3 col-form-label">Mobile No <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="hpno" id="hpno" />
                                                    </div>
                                    </div>

                                     <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Office.No</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="offno" id="offno"/>
                                                    </div>
													<label class="col-lg-3 col-form-label">Fax.No</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="faxno" id="faxno"/>
                                                    </div>
                                    </div>
						
									<div class="form-group row">
													<div class="checkbox-inline">
														<label class="checkbox m-0">
														<input type="checkbox" name="sameAddress" id="sameAddress"/>
														<span></span>Check if the &nbsp;<b>Home Address</b>&nbsp; if the same as the &nbsp;<b>Corresponding Address</b></label>
													</div>
													<div class="form-text text-muted text-center"></div>
                                    </div>

									<div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Home Address<span class="text-danger">*</span></label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="homeadd" id="homeadd" oninput="this.value = this.value.toUpperCase()"/>
                                                    </div>
									</div>	
									<div class="form-group row">
													<label class="col-lg-3 col-form-label"></label>
													<div class="col-lg-8">
                                                        <input type="text" class="form-control" name="homeadd1" id="homeadd1" />
                                                    </div>
													<img style="margin:5px" id="info-mdl-4" src="pascav2/assets/images/info-icon-small.png" width="20" height="20" data-toggle="tooltip" title="Please click here for details information">
									</div>
									<div class="form-group row">
													<label class="col-lg-3 col-form-label">Post/Zip code <span class="text-danger">*</span></label>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" name="posthomeadd" id="posthomeadd"/>
                                                    </div>
													<label class="col-lg-3 col-form-label">City<span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="bndrhomeadd" id="bndrhomeadd" oninput="this.value = this.value.toUpperCase()"/>
                                                    </div>
                                    </div>

                                    <div class="form-group row">
													
													<label class="col-lg-3 col-form-label">State<span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true"  id="kdnegerihome" name="kdnegerihome">
                                                        </select>
                                                    </div>
													<label class="col-lg-3 col-form-label">Country<span class="text-danger">*</span></label>
													<div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="kdnegarahome" name="kdnegarahome">
                                                        </select>
                                                    </div>
                                    </div>

									<div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Tel. No <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="notelhome" id="notelhome"/>
                                                    </div>
													<label class="col-lg-3 col-form-label">Fax.No</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="faxnohome" id="faxnohome"/>
                                                    </div>
													
                                    </div>

                                    <div class="form-group row">
                                                    <!-- <label class="col-lg-3 col-form-label">Office.No</label>
                                                    <div class="col-lg-4">
                                                        <input type="hidden" class="form-control" name="offnohome" id="offnohome" />
                                                    </div> -->
													<!-- <label class="col-lg-3 col-form-label">Mobile No <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="hpnohome" id="hpnohome"/>
                                                    </div> -->
													
                                    </div>

									<div class="separator separator-dashed my-6"></div>
									
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Email<span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" name="email" id="email" readonly/>
                                                    </div>
                                                </div>
												
                                         <!-- </div> -->

										 <div class="row">
											<div class="col">
												<button class="btn btn-primary saveNextBtn pull-right m-1" id="btnstep1sn" type="button" data-inline="true" data-action="save-next">Save & Next</button>
												<button class="btn btn-primary saveBtn pull-right m-1" id="btnstep1sv" type="button" data-inline="true" data-action="save">Save</button>
												<!-- <button class="btn btn-primary pull-right m-1" type="button" onclick="executeSubmitFrmStep1('SubmitConfirmStep1')" data-inline="true">Save</button> -->
											</div>
										</div>
									<!--  -->
                                    </div>   
                                	</div>

						</div>

                        <div class="panel panel-primary setup-content" id="step-2">

                            <div class="panel-heading"><h3 class="panel-title">Choose Programme</h3></div>

									<div class="panel-body form-horizontal m-10">
									<div class="mb-3">						
									<!--  -->
									
									<div class="form-group row">
													<label class="col-lg-3 col-form-label">Campus <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" id ="kampus" name ="kampus">
															<option value ="1">Gong Badak Campus</option>
															<option value ="2">Tembila Campus</option>
                                                            <option value ="3">Medicine Campus</option>
                                                            <option value ="4">UniSZA International Campus</option>
                                                        </select>
                                                    </div>
                                                	<label class="col-lg-3 col-form-label">Mode Of Study <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" id ="modest" name ="modest">
															<option value ="7">Coursework</option>
															<option value ="8">Research</option>
                                                            <option value ="9">Mix-Mode</option>
                                                        </select>
                                                    </div>
									</div>
									<div class="form-group row">
                                                 	<label class="col-lg-3 col-form-label">Type of Study <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" id="typest" name="typest">
                                                            <option value="1">Part Time</option>
                                                            <option value="2">Full Time</option>
                                                        </select>
                                                    </div>
                                            <!-- </div>

                                    <div class="form-group row"> -->

                                            <label class="col-lg-3 col-form-label">Programme <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="kdprg" name="kdprg">
                                                        </select>
                                                    </div>
									</div>
										
                                            <div class="form-group row" id="hidespc">
													<label class="col-lg-3 col-form-label">Specialization <span class="text-danger">*</span></label>
													<div class="col-lg-4">
                                                        <select class ="form-control selectpicker" title="Please Choose" data-live-search="true">
                                                                <option>Guidance And Counselling</option>
                                                                <option>Psychology And Counselling</option>
                                                        </select>
                                                    </div>
                                                <span class="form-text text-muted">Note : Choose specialization only for those who choose <br> Mode of Study: RESEARCH
                                FACULTY OF ISLAMIC CONTEMPORARY STUDIES<br>(1) MASTER OF EDUCATION - Teacher training and education sciences<br>(2) DOCTOR OF PHILOSOPHY - Teacher training and education sciences                             
												</span>                            
                                            </div>

                                <div class="separator separator-dashed my-6"></div>

                                                <h3 class="font-size-h6 mb-5">Academic Qualification</h3>

                                                <div class="form-group row">
														<label class="col-lg-2 col-form-label">Highest Tertiary Education <span class="text-danger">*</span></label>
														<div class="col-lg-4">
															<select class ="form-control selectpicker" title="Please Choose" id="highedu" name="highedu">
																<option value="1">Bachelor/Equivalent</option>
																<option value="2">Master Degree/Equivalent</option>
																<option value="3">Diploma</option>
															</select>
														</div>
                                                </div>

                                                <div class="form-group row">
														<label class="col-lg-2 col-form-label">Awarding University (Bachelor/equivalent) <font color="red">*</font></label>
														<div class="col-lg-6">
                                                            <input type="text" class="form-control" name="highuni" id="highuni"/>
                                                        </div>
                                                		<label class="col-lg-3 col-form-label">Class/CGPA <span class="text-danger">*</span></label>
                                                    	<div class="col-lg-3">
                                                            <input type="text" class="form-control" name="highcgpa" id="highcgpa"/>
                                                        </div><img style="margin:5px" id="info-mdl-6" src="pascav2/assets/images/info-icon-small.png" width="20" height="20" data-toggle="tooltip" title="Please click here for details information">
                                                </div>
                                                <div class="form-group row">
														<label class="col-lg-2 col-form-label">Awarding Country <span class="text-danger">*</span></label>
														<div class="col-lg-4">
                                                            <select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="highunicountry" name="highunicountry">
                                                            </select>
                                                        </div>
                                                </div>
                                              
                                                <div class="form-group row">
														<label class="col-lg-2 col-form-label">Awarding University (Master /equivalent) <span class="text-danger">*</span></label>
														<div class="col-lg-6">	
                                                            <input type="text" class="form-control" name="unimasterphd" id="unimasterphd"/>
                                                        </div>
														<label class="col-lg-3 col-form-label">Class/CGPA <span class="text-danger">*</span></label>
														<div class="col-lg-3">
                                                            <input type="text" class="form-control" id= "cgpamasterphd" name="cgpamasterphd" />
                                                        </div><img style="margin:5px" id="info-mdl-6_1" src="pascav2/assets/images/info-icon-small.png" width="20" height="20" data-toggle="tooltip" title="Please click here for details information">
                                                </div>

                                                <div class="form-group row">
														<label class="col-lg-2 col-form-label">Awarding Country <span class="text-danger">*</span></label>
														<div class="col-lg-4">
                                                            <select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="masterphdcountry" name="masterphdcountry">
                                                            </select>
                                                        </div>
                                                </div>

                                            <div class="form-group row" id ="hidework">
                                                	<label class="col-lg-2 col-form-label">Work Experience <span class="text-danger">*</span></label>
                                                    <div class="col-lg-3">
                                                            <select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="exp" name="exp">
                                                                <option value="1">1 Years</option>
                                                                <option value="2">2 Years</option>
                                                                <option value="3">3 Years</option>
                                                                <option value="4">4 Years</option>
                                                                <option value="5">6 Years</option>
                                                                <option value="6">More Than 5 Years</option>
                                                            </select>
                                                        </div>
													<label class="col-lg-3 col-form-label">Letter Of Working Experience</label>
                                                    <div class="col-lg-4 custom-file">
                                                        <input type="file" class="custom-file-input" id="fileexpr" name="fileexpr" />
                                                        <label class="custom-file-label" for="fileexpr">Choose file</label>
                                                    </div>
													<div style="padding: 10px;" id="cpt2">
														<a href="#" id="docexp" name="docexp" class="text-primary font-weight-bolder">View File</a>
													</div>
                                                </div>

                                            <div class="form-group row" id ="hiderse">
                                            	<label class="col-lg-2 col-form-label">Proposed Research Title/Area <span class="text-danger">*</span></label>
                                                	<div class="col-lg-8">
                                                    <textarea class="form-control" rows="3" id="proresearch" name="proresearch"></textarea>
                                                    </div>
                                            </div>

                                            <div class ="form-group row" id ="hidesv">
                                                        <label class="col-lg-2 col-form-label">Proposed Supervisor <span class="text-danger">*</span></label>
                                                            <div class="col-lg-4 d-flex align-items-center">
                                                                <input type="text" class="form-control" name="prosv" id="prosv" />
																
																<a href="https://experts.unisza.edu.my/" class="ml-3 font-weight-bold" target="_blank">Experts Unisza</a>.
                                                            </div>
                                            </div>

											<div class ="form-group row" id ="hideupportfolio">
                                                        <label class="col-lg-3 col-form-label">Portfolio Document<span class="text-danger">*</span></label>
														<div class="col-lg-6">
                                                                <input type="text" class="form-control" name="urlart" id="urlart" />
                                                        </div><span class="form-text text-muted">Please attach url/link to public cloud/blog/website for portfolio document (MASTER & PHD - ARTS ONLY)</span>
                                            </div>

                                            <div class="separator separator-dashed my-6"></div>
											<h3 class="font-size-h6 mb-5">English Language Proficiency</h3>

										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Do you hold any English proficiency qualification? <span class="text-danger">*</span></label>
                                                <div class="col-6 col-form-label">
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

											<!-- <div class="form-group row" id="muet">
												<label class="col-lg-2 col-form-label">BI(SPM)<span class="text-danger">*</span></label>
													<div class="col-lg-4">
														<input type="text" class="form-control" name="tajuk_adn" />
													</div>
												<label class="col-lg-2 col-form-label">MUET<span class="text-danger">*</span></label>
													<div class="col-lg-4">
														<input type="text" class="form-control" name="rsltmuet" id="rsltmuet"/>
														<span class="form-text text-muted">Malaysian University English Test(MUET)</span>
													</div>
											</div> -->

										<div id="addeng">

												<div class="form-group row">
															<label class="col-lg-2 col-form-label text-lg-left">Examination <span class="text-danger">*</span></label>
															<div class="col-lg-4">
																<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" name="bitype" id="bitype">
																	<option value="MT">MUET</option>
																	<option value="IE">IELTS</option>
																	<option value="TF">TOEFL</option>
																	<option value="CF">CEFR</option>
																</select>															
															</div>
												<!-- </div>
												<div class="form-group row mt-3"> -->
													<label class="col-lg-2 col-form-label text-lg-left">Score<span class="text-danger">*</span></label>
														<div class="col-lg-3 d-flex align-items-center">
															<input type="text" class="form-control" name="resultaddbi" id="resultaddbi" />
															</div><img class="ml-2" id="info-mdl-6_2" src="pascav2/assets/images/info-icon-small.png" width="20" height="20" data-toggle="tooltip" title="English competency equivalence score">
														</div>
												<div class="form-group row mt-3">
													<label class="col-lg-2 col-form-label text-lg-left">Registration/Candidate No.<span class="text-danger">*</span></label>
														<div class="col-lg-4">
															<input type="text" class="form-control" name="registerid" id="registerid" />
														</div>
													<label class="col-lg-2 col-form-label text-lg-left">Date of Examination <span class="text-danger">*</span></label>
														<div class="col-lg-4">
															<input type="date" class="form-control" name="datexm" id="datexm"/>
														</div>

												</div>
										</div>
										<!-- addeng -->										
                                        </div>
										<!-- hidediveng -->

                                        <div class="row">
											<div class="col">
												<button class="btn btn-primary saveNextBtn1 pull-right m-1" id="btnstep2sn" type="button" data-inline="true" data-action="save-next">Save & Next</button>
												<button class="btn btn-primary saveBtn1 pull-right m-1" id="btnstep2sv" type="button" data-inline="true" data-action="save">Save</button>
											</div>
										</div>
									<!--  -->                                           
									</div>
									</div>
						</div>

						<div class="panel panel-primary setup-content" id="step-3">

								<div class="panel-heading"><h3 class="panel-title">Supporting Documents</h3></div>
																				
									<div class="panel-body form-horizontal m-10">
									<div class="mb-3">
												
									<!--  -->
                                               <div class="form-group row">                                             
													<label class="col-lg-6 col-form-label">Scanned Copy of IC (Malaysian candidates)/Passport <span class="text-danger">*</span id="val_ada"><i id="iconpass" class="fas"></i></label>
														<div class="col-lg-4 custom-file">
															<input type="file" class="custom-file-input" id="fileic" name="fileic"/>
															<label class="custom-file-label" for="fileic">Choose file</label>
														</div>
														<div style="padding: 20px;" id="cpt">
															<a href="#" id="docic" name="docic" data-file="passport" class="view-file text-primary font-weight-bolder">View File</a>
														</div>

														<!-- The Modal -->
															<div id="myModal1" class="modal1">
																<!-- Modal content -->
																<div class="modal-content1">
																<span class="close1">x</span>
																<iframe id="content1" height="100%" width="100%"></iframe>
																</div>
															</div>
												</div>

												<div class="form-group row">
                                                <label class="col-lg-6 col-form-label">Academic Certificates/ Senate Letter/ Completion Letter Of Programme<span class="text-danger">*</span><i id="iconakad" class="fas"></i></label>
                                                    <div class="col-lg-4 custom-file">
                                                        <input type="file" class="custom-file-input" id="fileaka" name="fileaka" accept=".doc, .docx, .pdf"/>
                                                        <label class="custom-file-label" for="fileaka">Choose file</label>
                                                    </div>
													<div style="padding: 20px;" id="cpt">
														<a href="#" id="docaka" name="docaka" data-file="akadtgg" class="view-file text-primary font-weight-bolder">View File</a>
													</div>
											</div>
											<div class="form-group row">
                                                <label class="col-lg-6 col-form-label">Academic Transcript<span class="text-danger">*</span></label>
                                                    <div class="col-lg-4 custom-file">
                                                        <input type="file" class="custom-file-input" id="fileakaT" name="fileakaT"/>
                                                        <label class="custom-file-label" for="fileakaT">Choose file</label>
                                                    </div>
													<div style="padding: 20px;" id="cptakaT">
													<a href="#" id="docakaT" name="docakaT" class="text-primary font-weight-bolder">View File</a>
													</div>
											</div>
											<div class="form-group row">
                                                <label class="col-lg-6 col-form-label">English Language Qualification<span class="text-danger">*</span><i id="iconeng" class="fas"></i></label>
                                                    <div class="col-lg-4 custom-file">
                                                        <input type="file" class="custom-file-input" id="fileEng" name="fileEng"/>
                                                        <label class="custom-file-label" for="fileEng">Choose file</label>
                                                    </div>
													<div style="padding: 20px;" id="cpt">
														<a href="#" id="doceng" name="doceng" data-file="eng" class="view-file text-primary font-weight-bolder">View File</a>
													</div>
											</div>
											<div class="form-group row">
                                                <label class="col-lg-6 col-form-label">Research Proposal<span class="text-danger">*</span><i id="iconpro" class="fas"></i></label>
                                                    <div class="col-lg-4 custom-file">
                                                        <input type="file" class="custom-file-input" id="filePro" name="filePro" />
                                                        <label class="custom-file-label" for="filePro">Choose file</label>
                                                    </div>
													<div style="padding: 20px;" id="cpt">
													<a href="#" id="docpro" name="docpro" data-file="proposal" class="view-file text-primary font-weight-bolder">View File</a>
													</div>
											</div>
											<div class="form-group row">
                                                <label class="col-lg-6 col-form-label">Processing Fee Receipt<span class="text-danger">*</span><img style="margin:5px" id="info-mdl-5" src="pascav2/assets/images/info-icon-small.png" width="20" height="20"><i id="iconresit" class="fas"></i></label>
                                                    <div class="col-lg-4 custom-file">
                                                        <input type="file" class="custom-file-input" id="fileFee" name="fileFee"/>
                                                        <label class="custom-file-label" for="fileFee">Choose file</label>
                                                    </div>
													<div style="padding: 20px;" id="cpt">
														<a href="#" id="docfee" name="docfee" data-file="resit" class="view-file text-primary font-weight-bolder">View File</a>
													</div>
                                            </div>

											<div class="form-group row">
												<div class="row">
													<label class="col-lg-12 col-form-label text-danger"><span class="text-danger">*</span><span class="text-danger">*</span>Every single document must be less than 3MB.<br><span class="text-danger">*</span><span class="text-danger">*</span>File Type : PDF/Docx/Doc.</label>
													<!-- <label class="col-lg-6 col-form-label text-danger"><span class="text-danger">*</span><span class="text-danger">*</span>File Type : PDF/Docx/Doc.</label> -->
												</div>
											</div>
									
												<div class="row">
													<div class="col">
														<button class="btn btn-primary saveNextBtn2 pull-right m-1" id="btnstep3sn" type="button" data-inline="true" data-action="save-next">Save & Next</button>
														<button class="btn btn-primary saveBtn2 pull-right m-1" id="btnstep3sv" type="button" data-inline="true" data-action="save">Save</button>
													</div>
												</div>
									<!--  -->

									</div>
									</div>
                        </div>

						<div class="panel panel-primary setup-content" id="step-4">

                                <div class="panel-heading"><h3 class="panel-title">Additional</h3></div>
          
									<div class="panel-body form-horizontal m-10">
									<div class="mb-3">
											
									<!--  -->
									<h3 class="font-size-h6 mb-5">Agent Information</h3>

									<div class="form-group row">
											<label class="col-lg-2 col-form-label">Do you have any agent?</label>
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
												<label class="col-lg-2 col-form-label">Agent Name</label>
													<div class="col-lg-4">
														<input type="text" class="form-control" id = "namaejen" name="namaejen" />
													</div>
												<label class="col-lg-2 col-form-label">Email</label>
													<div class="col-lg-4">
														<input type="text" class="form-control" id= "emailejen" name="emailejen" />
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
										<label id ="typesponser" class="col-lg-2 col-form-label">Type of Sponsorship<span class="text-danger">*</span></label> 
											<div class="col-lg-4" id="divtypefinance1">
													<select class ="form-control selectpicker" title="Please Choose" data-live-search="true" id="kdtaja" name="kdtaja">
													</select>
													<!-- <input type="text" class="form-control" id="kdtaja1" name="kdtaja1"/> -->
											</div>																						
										<label id="house" class="col-lg-2 col-form-label">HouseHold Income<span class="text-danger">*</span></label> 
											<div class="col-lg-3" id="divtypefinance2">
													<input type="text" class="form-control" id="income" name="income"/>
													<span class="form-text text-muted">Amount in Ringgit Malaysia (RM)</span>
											</div>																				
										<label id="upload"class="col-lg-4 col-form-label">Upload Document<span class="text-danger">*</span>
											<div class="col-lg-6 custom-file" id ="divtypefinance3">
												<input type="file" class="custom-file-input" id="fileGuarantee" name="fileGuarantee" />
												<label class="custom-file-label" for="fileGuarantee">Choose file</label>
											</div>
											<span class="form-text text-muted">Supporting Document for International Student Only</span>										
									</div>

									<div class="row">
										<div class="col">
											<button class="btn btn-primary saveNextBtn3 pull-right m-1" id="btnstep4sn" type="button" data-inline="true" data-action="save-next">Save & Next</button>
											<button class="btn btn-primary saveBtn3 pull-right m-1" id="btnstep4sv" type="button" data-inline="true" data-action="save">Save</button>
										</div>
									</div>
									<!--  -->
									</div>
									</div>
						</div>

						<div class="panel panel-primary setup-content" id="step-5">

								<div class="panel-heading"><h3 class="panel-title">Acknowledgement</h3></div>
                                                                                               
									<div class="panel-body form-horizontal m-10">
									<div class="mb-3">

									<!--  -->
									<h3 class="font-size-h6 mb-5">Disclaimer</h3>
									<!-- <div class="separator separator-dashed my-6"></div> -->

									<div class="form-group row">
										<label class="col-lg-12 col-form-label">(1) Approval of Program Changes </label>
									</div>

									<div class="form-group row">
												<div class="col-lg-8">
													<div class="radio-inline">
													<input type="hidden" name="stsacctkr" value="0">
														<label class="radio">
														<input name="stsacctkr" type="radio" value="1"/>
														<span></span>Agree</label>
														<span class="form-text text-muted">Consent for UniSZA to offer an alternative program for specific reasons.</span>

														<label class="radio">
														<input name="stsacctkr" type="radio" value="0"/>
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
																<input type="checkbox" id = "sah" name = "sah" value='0'/>
																<span></span>I certify that all the information given in this online application is correct. The University reserves the right to reject this application or withdraw the offer of admission if any incorrect information given during the application process.</label>
															</div>
														</div>
									</div>

												<div class="row">
													<div class="col">
														<!-- <a href="pascav2/public/summary"><button class="btn btn-primary saveNextBtn4 pull-right m-1" type="button" data-inline="true" data-action="save-next">Summary & Print</button></a> -->
														<button class="btn btn-primary saveBtn4 pull-right m-1" id="btnLastSubmit" type="button" data-inline="true" data-action="save-next">Submit Application</button>
													</div>
												</div>
									<!--  -->

									</div>
									</div>

						</div>					
			</form>

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
			<!--end::Copyright-->
			<!--begin::Nav-->
			<!-- <div class="nav nav-dark">
				<a href="" target="_blank" class="nav-link pl-0 pr-5">About</a>
				<a href="" target="_blank" class="nav-link pl-0 pr-5">Team</a>
				<a href="" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
			</div> -->
			<!--end::Nav-->
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