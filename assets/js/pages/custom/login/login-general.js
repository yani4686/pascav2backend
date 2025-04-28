"use strict";

// Class Definition
var KTLogin = function() {
    var _login;

    var _showForm = function(form) {
        var cls = 'login-' + form + '-on';
        var form = 'kt_login_' + form + '_form';

        _login.removeClass('login-forgot-on');
        _login.removeClass('login-signin-on');
        _login.removeClass('login-signup-on');

        _login.addClass(cls);

        KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
    }

    var _handleSignInForm = function() {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_signin_form'),
			{
				fields: {
					username: {
						validators: {
							notEmpty: {
								message: 'Username is required'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'Password is required'
							}
						}
					}
				},
				plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

		$('#login_submit').click(function (e) {

			var form = document.getElementById('kt_login_signin_form');
			var formData = new FormData(form);
	
			//console.log(formData);
	
			$.ajax({
			type: "POST",
			//url: "http://localhost/pascav2/public/retlogin" ,
			url: "http://localhost/pascav2/public/retloginp051" ,
			data: formData,
					processData: false,  // tell jQuery not to process the data
					contentType: false,   // tell jQuery not to set contentType		
			beforeSend: function() {
						$(".se-pre-con").fadeIn("slow");
					},
				dataType: 'json',
				success: function(data){
						
				$(".se-pre-con").fadeOut("slow");

						// Default values for message
					var msg_header, msg, icon_flag;

				switch (data.success) {
					case 'ko':
						msg_header = "Error";
						msg = "Please try again.";
						icon_flag = 'error';
						break;
					case 'ok':
						msg_header = "Success";
						msg = "You have been successfully login.";
						icon_flag = 'success';
						break;
					default:
						msg_header = "Error";
						msg = "Please try again.";
						icon_flag = 'error';
						break;
				}
	
				// if(data.success=='ok'){
						
				// 	Swal.fire(
				// 	msg_header,
				// 	msg,
				// 	icon_flag 
				// 	).then(function(){
				// 		window.location = "http://localhost/pascav2/public/dashboard";
				// 	});					
				// }
				// else{
				// 	Swal.fire(
				// 	msg_header,
				// 	msg,
				// 	icon_flag 
				// 	).then(function(){
				// 		window.location = "http://localhost/pascav2/public/";
				// 	});							
				// }

				// Show the alert
				Swal.fire(
					msg_header,
					msg,
					icon_flag
				).then(function () {
					if (data.success === 'ok') {
						window.location = "http://localhost/pascav2/public/dashboard";
					}
				});

				}
			
			});

			validation.validate().then(function(status) {
		        if (status == 'Valid') {
                    // Submit form
                    KTUtil.scrollTop();
				} else {
					swal.fire({
						msg_header,
						msg,
						icon_flag
		                // text: "Sorry, looks like there are some errors detected, please try again.",
		                // icon: "error",
		                // buttonsStyling: false,
		                // confirmButtonText: "Ok, got it!",
                        // customClass: {
    					// 	confirmButton: "btn font-weight-bold btn-light-primary"
    					// }
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
	
		});

        // $('#kt_login_signin_submit').on('click', function (e) {
        //     e.preventDefault();

        //     validation.validate().then(function(status) {
		//         if (status == 'Valid') {
        //             swal.fire({
		//                 text: "All is cool! Now you submit this form",
		//                 icon: "success",
		//                 buttonsStyling: false,
		//                 confirmButtonText: "Ok, got it!",
        //                 customClass: {
    	// 					confirmButton: "btn font-weight-bold btn-light-primary"
    	// 				}
		//             }).then(function() {
		// 				KTUtil.scrollTop();
		// 			});
		// 		} else {
		// 			swal.fire({
		//                 text: "Sorry, looks like there are some errors detected, please try again.",
		//                 icon: "error",
		//                 buttonsStyling: false,
		//                 confirmButtonText: "Ok, got it!",
        //                 customClass: {
    	// 					confirmButton: "btn font-weight-bold btn-light-primary"
    	// 				}
		//             }).then(function() {
		// 				KTUtil.scrollTop();
		// 			});
		// 		}
		//     });
        // });

        // Handle forgot button
        $('#kt_login_forgot').on('click', function (e) {
            e.preventDefault();
            _showForm('forgot');
        });

        // Handle signup
        $('#kt_login_signup').on('click', function (e) {
            e.preventDefault();
            _showForm('signup');
        });
    }

    var _handleSignUpForm = function(e) {
        var validation;
		validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_signup_form'),
			{
				fields: {
					usr: {
						validators: {
							notEmpty: {
								message: 'Username is required'
							}
						}
					},
					email: {
                        validators: {
							notEmpty: {
								message: 'Email address is required'
							},
                            emailAddress: {
								message: 'The value is not a valid email address'
							}
						}
					},
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            }
                        }
                    },
                    cpassword: {/* belum semak lg jika password x sama x keluar error */
                        validators: {
                            notEmpty: {
                                message: 'The password confirmation is required'
                            },
                            identical: {
                                compare: function() {
                                    return querySelector('[name="password"]').value;
                                },
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    },
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);
		

		$('#kt_login_signup_submit').on('click', function (e) {
            e.preventDefault();
	
				var form = document.getElementById('kt_login_signup_form');
				var formData = new FormData(form);
		
				//console.log(formData);
		
				$.ajax({
				type: "POST",
				//url: "http://localhost/pascav2/public/regnewlogin" ,
				 url: "http://localhost/pascav2/public/regnewloginp051" ,
				data: formData,
						processData: false,  // tell jQuery not to process the data
						contentType: false,   // tell jQuery not to set contentType		
				beforeSend: function() {
							$(".se-pre-con").fadeIn("slow");
						},
					dataType: 'json',
					success: function(data){
							
					$(".se-pre-con").fadeOut("slow");

					// Check if the data is null or empty
					if (!data || Object.keys(data).length === 0 || !data.success) {
						Swal.fire(
							'Error',
							'No response from server. Please try again later.',
							'error'
						);
						return; // Stop further execution if data is invalid or empty
					}

					// Default values for message
					var msg_header, msg, icon_flag;
		
					// Switch based on response
            switch (data.success) {
                case 'ko':
                    msg_header = "Error";
                    msg = "Please try again.";
                    icon_flag = 'error';
                    break;
                case 'successemail':
                    msg_header = "Registration successful!";
                    msg = "Check your email to verify your account..";
                    icon_flag = 'success';
                    break;
                case 'failedemail':
                    msg_header = "Error";
                    msg = "Failed to send verification email.";
                    icon_flag = 'error';
                    break;
                case 'ok':
                    msg_header = "Success";
                    msg = "Record has been submitted.";
                    icon_flag = 'success';
                    break;
				case 'exist':
					msg_header = "Error";
					msg = "This email is already used.";  // Use the message sent from the backend
					icon_flag = 'error';
					break;
                default:
                    msg_header = "Ralat";
                    msg = "Please try again.";
                    icon_flag = 'error';
                    break;
            }
		
					 // Show the alert
					 Swal.fire(
						msg_header,
						msg,
						icon_flag
					).then(function () {
						if (data.success === 'ok' || data.success === 'successemail') {
							window.location = "http://localhost/pascav2/public/";
						}
					});

					},
					error: function (xhr, status, error) {
						$(".se-pre-con").fadeOut("slow");
						Swal.fire(
							'Error',
							'There was an issue with the request. Please try again.',
							'error'
						);
					}
				
				});

				validation.validate().then(function(status) {
					if (status == 'Valid') {
						// Submit form
						KTUtil.scrollTop();
					} else {
						swal.fire({
							msg_header,
							msg,
							icon_flag
							// text: "Sorry, looks like there are some errors detected, please try again.",
							// icon: "error",
							// buttonsStyling: false,
							// confirmButtonText: "Ok, got it!",
							// customClass: {
							// 	confirmButton: "btn font-weight-bold btn-light-primary"
							// }
						}).then(function() {
							KTUtil.scrollTop();
						});
					}
				});
        });
        // Handle cancel button
        $('#kt_login_signup_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('signin');
        });
    }

    var _handleForgotForm = function(e) {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_forgot_form'),
			{
				fields: {
					email: {
						validators: {
							notEmpty: {
								message: 'Email address is required'
							},
                            emailAddress: {
								message: 'The value is not a valid email address'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        // Handle submit button
        $('#kt_login_forgot_submit').on('click', function (e) {
            e.preventDefault();

			var form = document.getElementById('kt_login_forgot_form');
			var formData = new FormData(form);

			$.ajax({
				type: "POST",
				//url: "http://localhost/pascav2/public/forgotpwd" ,
				url: "http://localhost/pascav2/public/forgotpwdp051" ,
				data: formData,
						processData: false,  // tell jQuery not to process the data
						contentType: false,   // tell jQuery not to set contentType		
				beforeSend: function() {
							$(".se-pre-con").fadeIn("slow");
						},
					dataType: 'json',
					success: function(data){
							
					$(".se-pre-con").fadeOut("slow");

					// Check if the data is null or empty
					if (!data || Object.keys(data).length === 0 || !data.success) {
						Swal.fire(
							'Error',
							'No response from server. Please try again later.',
							'error'
						);
						return; // Stop further execution if data is invalid or empty
					}

					// Default values for message
					var msg_header, msg, icon_flag;
		
					// Switch based on response
            switch (data.success) {
                case 'ko':
                    msg_header = "Error";
                    msg = "Please try again.";
                    icon_flag = 'error';
                    break;
                case 'successemail':
                    msg_header = "Record Emel Found!";
                    msg = "Check your email to verify your account..";
                    icon_flag = 'success';
                    break;
                case 'failedemail':
                    msg_header = "Error";
                    msg = "Failed to send verification email.";
                    icon_flag = 'error';
                    break;
                case 'ok':
                    msg_header = "Success";
                    msg = "Record has been submitted.";
                    icon_flag = 'success';
                    break;
				case 'email_empty':
					msg_header = "Error";
					msg = "This emel  is not registered in system";  // Use the message sent from the backend
					icon_flag = 'error';
					break;
                default:
                    msg_header = "Error";
                    msg = "Please try again.";
                    icon_flag = 'error';
                    break;
            }
		
					 // Show the alert
					 Swal.fire(
						msg_header,
						msg,
						icon_flag
					).then(function () {
						if (data.success === 'ok' || data.success === 'successemail') {
							window.location = "http://localhost/pascav2/public/";
						}
					});

					},
					// error: function (xhr, status, error) {
					// 	$(".se-pre-con").fadeOut("slow");
					// 	Swal.fire(
					// 		'Error',
					// 		'There was an issue with the request. Please try again.',
					// 		'error'
					// 	);
					// }
				
				});

            validation.validate().then(function(status) {
		        if (status == 'Valid') {
                    // Submit form
                    KTUtil.scrollTop();
				} else {
					swal.fire({
		                text: "Sorry, looks like there are some errors detected, please try again.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Ok, got it!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });

        // Handle cancel button
        $('#kt_login_forgot_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('signin');
        });
    }

    // Public Functions
    return {
        // public functions
        init: function() {
            _login = $('#kt_login');

            _handleSignInForm();
            _handleSignUpForm();
            _handleForgotForm();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});
