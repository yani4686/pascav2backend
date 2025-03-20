'use strict';

$(window).on('load', function() {
    //   // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");  
      });

$(document).ready(function () {

//include jump page from dashboard

    // Initially hide all steps
    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide(); // Default hide all steps

    // Handle clicking on step links in the wizard
    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        // Make sure the current item is not disabled
        if (!$item.hasClass('disabled')) {
            // Reset the button states
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            
            // Hide all steps and show the current step
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus(); // Focus the first input of the step
        }
    });

    // Handle Next button click
    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find(""),
            isValid = true;

        // Check for valid inputs
        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        // If valid, move to the next step
        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

//click to step from dashboard without using wizard
//--page apply
$(".setup-content").hide();

    // Get the step parameter from the URL, default to "step-1" if not present
    var targetStep = getParameterByName("step") || "step-1";  
   // console.log("Target Step Before Load: " + targetStep);  // Debugging: Log target step before loading

    // Get the target step element based on the ID
    var stepElement = $("#" + targetStep);
   // console.log("Step Element: ", stepElement);  // Log the jQuery object to check if the step exists

    // Show the corresponding step if it exists
    if (stepElement.length > 0) {
        stepElement.show();
    } else {
        console.log("Error: Target step not found: " + targetStep);  // Debugging: Show error if not found
    }

    // Optionally, update the navigation buttons
    $('div.setup-panel div a').removeClass('btn-success').addClass('btn-default');  // Reset all buttons
    $('div.setup-panel div a[href="#' + targetStep + '"]').addClass('btn-success');  // Activate the current step button

// Handle clicking on dashboard links (e.g., go-to-step-1, go-to-step-2)
//page dashboard
$(".dashboard-link").click(function (e) {
    e.preventDefault();  // Prevent the default link action
    
    // Get the corresponding step ID (e.g., from go-to-step-1 -> step-1)
    var targetStep = $(this).attr("id").replace("go-to-step-", "step-");  
   // console.log("Target Step: " + targetStep);  // Debugging: Log target step
    
    // Redirect to the page with the correct step parameter
    window.location.href = "apply?step=" + targetStep;
});
    // Initially trigger the first step (Optional, you can remove this if you don't need a default step on load)
    $('div.setup-panel div a.btn-success').trigger('click');
   //------

    $('#login_submit').click(function (e) {

        var form = document.getElementById('kt_login_signin_form');
        var formData = new FormData(form);

        //console.log(formData);

        $.ajax({
        type: "POST",
        url: "http://localhost/pascav2/public/retlogin" ,
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

            switch (data.success) {
                case 'ko':
                    var msg_header = "Error";
                    var msg = "Please try again.";
                    var icon_flag = 'error';
                    break;						
                case 'ok':
                    var msg_header = "Success";
                    var msg = "You have been successfully login.";
                    var icon_flag = 'success';
                    break;
                default:
                    var msg_header = "Error";
                    var msg = "Please try again.";
                    var icon_flag = 'error';	
            }

            if(data.success=='ok'){
                    
                Swal.fire(
                msg_header,
                msg,
                icon_flag 
                ).then(function(){
                    window.location = "http://localhost/pascav2/public/dashboard";
                });					
            }
            else{
                Swal.fire(
                msg_header,
                msg,
                icon_flag 
                ).then(function(){
                    window.location = "http://localhost/pascav2/public/";
                });							
            }
            }
        
        });

	});

//check require input in form by steps

    // Navigate between steps

    //method 1 combine 2 button
    //==========================
 // Attach event listeners to buttons
 $('.saveBtn').on('click', function() {
   // saveForm('save', this);  // Just save
    saveForm('save', this, 'http://localhost/pascav2/public/insstep1');
});

$('.saveNextBtn').on('click', function() {
   // saveForm('save-next', this);  // Save + Next
    saveForm('save-next', this, 'http://localhost/pascav2/public/insstep1');
});

$('.saveBtn1').on('click', function() { 
    saveForm('save', this, 'http://localhost/pascav2/public/insstep2'); 
});

$('.saveNextBtn1').on('click', function() { 
    saveForm('save-next', this, 'http://localhost/pascav2/public/insstep2'); 
});

$('.saveBtn2').on('click', function() { 
    saveForm('save', this, 'http://localhost/pascav2/public/insstep3'); 
});

$('.saveNextBtn2').on('click', function() { 
    saveForm('save-next', this, 'http://localhost/pascav2/public/insstep3'); 
});

$('.saveBtn3').on('click', function() { 
    saveForm('save', this, 'http://localhost/pascav2/public/insstep4'); 
});

$('.saveNextBtn3').on('click', function() { 
    saveForm('save-next', this, 'http://localhost/pascav2/public/insstep4'); 
});

$('.saveBtn4').on('click', function() { 
    saveForm('save-next', this, 'http://localhost/pascav2/public/insstep5'); 
});

// $('.saveNextBtn4').on('click', function() { 
//     saveForm('save-next', this, 'http://localhost/pascav2/public/insstep5'); 
// });



function saveForm(actionType, button, url) {  // Accept button & URL as parameter

    var curStep = $(button).closest(".setup-content");
    var curStepBtn = curStep.attr("id");

    // Validate required fields
    var curInputs = curStep.find("input[required], select[required], textarea[required]");
    var isValid = true;
    
    // Remove previous error classes
    curStep.find(".form-group").removeClass("has-error");

    curInputs.each(function () {
        var val = $(this).val();
        // Log for debugging (optional)
        console.log("Validating field:", $(this).attr("name"), "Value:", val);
        if (val === null || val.trim() === "") {
            isValid = false;
            $(this).closest(".form-group").addClass("has-error");
        }
    });
    
    if (!isValid) {
        // Show an error alert and stop execution if validation fails.
        Swal.fire("Error", "Please fill in all required fields.", "error");
        return; // Prevents AJAX call and moving to the next step
    }

    var formData = new FormData();

    curStep.find("input[type='text'], input[type='radio']:checked, input[type='checkbox']:checked, select, textarea, input[type='date']").each(function () {
        formData.append(this.name, $(this).val());
    });

    // Collect file inputs
    curStep.find("input[type='file']").each(function() {
        if (this.files.length > 0) {
            for (let i = 0; i < this.files.length; i++) {
                formData.append(this.name, this.files[i]);
            }
        }
    });

    $.ajax({
        url: url,  // Dynamic URL based on step
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        beforeSend: function() {
            $(".se-pre-con").fadeIn("slow");
        },
        dataType: 'json',
        success: function(data) {
            $(".se-pre-con").fadeOut("slow");

            let msg_header, msg, icon_flag;

            switch (data.success) {
                case 'ko':
                    msg_header = "Error";
                    msg = "Please try again.";
                    icon_flag = 'error';
                    break;
                case 'ok':
                    msg_header = "Success";
                    msg = "Record has been successfully saved.";
                    icon_flag = 'success';
                    break;
                default:
                    msg_header = "Error";
                    msg = "Please try again.";
                    icon_flag = 'error';
            }

            Swal.fire(msg_header, msg, icon_flag).then(function() {
                if (data.success === 'ok') {
                    if (actionType === 'save-next') {
                        moveToNextStep(curStep);
                    } 
                    
                    else {
                        window.location = "http://localhost/pascav2/public/apply";
                    }

                } else {
                    window.location = "http://localhost/pascav2/public/apply";
                }
            });
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
}

function moveToNextStep(curStep) {
    var curStepId = curStep.attr("id");
    var nextStepWizard = $('div.setup-panel div a[href="#' + curStepId + '"]')
        .parent().next().children("a");

    if (nextStepWizard.length > 0) {
        nextStepWizard.removeAttr('disabled').trigger('click');
    }
}



    //==========================

   // method 2
//    $(".save").click(function () {

//     var curStep = $(this).closest(".setup-content");
//     var curStepBtn = curStep.attr("id");

//     var formData = new FormData();

//     // Append all other input fields
//     curStep.find("input[type='text'],input[type='url'],select,textarea,input[type='date']").each(function () {
//         formData.append(this.name, $(this).val());
//     });

//     // Append file inputs
//     curStep.find("input[type='file']").each(function () {
//         if (this.files.length > 0) {
//             for (let i = 0; i < this.files.length; i++) {
//                 formData.append(this.name, this.files[i]);
//                // console.log(files[i].name);
//             }
//         }
//     });

//     // Send the form data
//     $.ajax({
//         url: "http://localhost/pascav2/public/insstep1",
//         type: 'POST',
//         data: formData,
//         processData: false, // Prevent jQuery from converting the FormData into a string
//         contentType: false, // Let the browser set the correct Content-Type
//         beforeSend: function() {
//             $(".se-pre-con").fadeIn("slow");
//           },	
//           dataType: 'json',				
//           success: function(data){
              
//               $(".se-pre-con").fadeOut("slow");
              
//               switch (data.success) {
//                 case 'ko':
//                 var msg_header = "Error";
//                 var msg = "Please try again.";
//                 var icon_flag = 'error';
//                 break;						
//                 case 'ok':
//                 var msg_header = "Success";
//                 var msg = "Record have been successfully saved.";
//                 var icon_flag = 'success';
//                 break;
//                 default:
//                 var msg_header = "Error";
//                 var msg = "Please try again.";
//                 var icon_flag = 'error';	
//             }
              
//               if(data=='ok'){
              
//                   Swal.fire(
//                     msg_header,
//                     msg,
//                     icon_flag 
//                   ).then(function(){
//                           window.location = "http://localhost/pascav2/public/apply";
//                   });					
//               }
//               else{
//                   Swal.fire(
//                     msg_header,
//                     msg,
//                     icon_flag     
//                   ).then(function(){
//                     window.location = "http://localhost/pascav2/public/apply";
//                 });						
//               }
//           },
//         error: function (error) {
//             console.error('Error:', error);
//         }
//     });
// });
//step2
// $(".save1").click(function () {

//     var curStep = $(this).closest(".setup-content");
//     var curStepBtn = curStep.attr("id");

//     var formData = new FormData();

//     // Append all other input fields
//     curStep.find("input[type='text'],input[type='url'],select,textarea,input[type='date']").each(function () {
//         formData.append(this.name, $(this).val());
//     });

//     // Append file inputs
//     curStep.find("input[type='file']").each(function () {
//         if (this.files.length > 0) {
//             for (let i = 0; i < this.files.length; i++) {
//                 formData.append(this.name, this.files[i]);
//                 //console.log(files[i].name);
//             }
//         }
//     });

//     // Send the form data
//     $.ajax({
//         url: "http://localhost/pascav2/public/insstep2",
//         type: 'POST',
//         data: formData,
//         processData: false, // Prevent jQuery from converting the FormData into a string
//         contentType: false, // Let the browser set the correct Content-Type
//         beforeSend: function() {
//             $(".se-pre-con").fadeIn("slow");
//           },	
//           dataType: 'json',				
//           success: function(data){
              
//               $(".se-pre-con").fadeOut("slow");
              
//               switch (data.success) {
//                 case 'ko':
//                 var msg_header = "Error";
//                 var msg = "Please try again.";
//                 var icon_flag = 'error';
//                 break;						
//                 case 'ok':
//                 var msg_header = "Success";
//                 var msg = "Record have been successfully saved.";
//                 var icon_flag = 'success';
//                 break;
//                 default:
//                 var msg_header = "Error";
//                 var msg = "Please try again.";
//                 var icon_flag = 'error';	
//             }
              
//               if(data=='ok'){
              
//                   Swal.fire(
//                     msg_header,
//                     msg,
//                     icon_flag 
//                   ).then(function(){
//                           window.location = "http://localhost/pascav2/public/apply";
//                   });					
//               }
//               else{
//                   Swal.fire(
//                     msg_header,
//                     msg,
//                     icon_flag     
//                   ).then(function(){
//                     window.location = "http://localhost/pascav2/public/apply";
//                 });						
//               }
//           },
//         error: function (error) {
//             console.error('Error:', error);
//         }
//     });
// });
//step3
// $(".save2").click(function () {

//     var curStep = $(this).closest(".setup-content");
//     var curStepBtn = curStep.attr("id");

//    // alert(curStepBtn);

//     var formData = new FormData();

//     // Append all other input fields
//     curStep.find("input[type='text'],input[type='url'],select,textarea,input[type='date']").each(function () {
//         formData.append(this.name, $(this).val());
//     });

//     // Append file inputs
//     curStep.find("input[type='file']").each(function () {
//         if (this.files.length > 0) {
//             for (let i = 0; i < this.files.length; i++) {
//                 formData.append(this.name, this.files[i]);
//                 //console.log(files[i].name);
//             }
//         }
//     });

//     // Send the form data
//     $.ajax({
//         url: "http://localhost/pascav2/public/insstep3",
//         type: 'POST',
//         data: formData,
//         processData: false, // Prevent jQuery from converting the FormData into a string
//         contentType: false, // Let the browser set the correct Content-Type
//         beforeSend: function() {
//             $(".se-pre-con").fadeIn("slow");
//           },	
//           dataType: 'json',				
//           success: function(data){
              
//               $(".se-pre-con").fadeOut("slow");
              
//               switch (data.success) {
//                 case 'ko':
//                 var msg_header = "Error";
//                 var msg = "Please try again.";
//                 var icon_flag = 'error';
//                 break;						
//                 case 'ok':
//                 var msg_header = "Success";
//                 var msg = "Record have been successfully saved.";
//                 var icon_flag = 'success';
//                 // case 'error':
//                 // var msg_header = "error";
//                 // var msg = "Please fill in required value.";
//                 // var icon_flag = 'error';
//                 break;
//                 default:
//                 var msg_header = "Error";
//                 var msg = "Please try again.";
//                 var icon_flag = 'error';	
//             }
              
//               if(data=='ok'){
              
//                   Swal.fire(
//                     msg_header,
//                     msg,
//                     icon_flag 
//                   ).then(function(){
//                           window.location = "http://localhost/pascav2/public/apply";
//                   });					
//               }
//               else{
//                   Swal.fire(
//                     msg_header,
//                     msg,
//                     icon_flag     
//                   ).then(function(){
//                     window.location = "http://localhost/pascav2/public/apply";
//                 });						
//               }
//           },
//         error: function (error) {
//             console.error('Error:', error);
//         }
//     });
// });

//step4
// $(".save3").click(function () {

//     var curStep = $(this).closest(".setup-content");
//     var curStepBtn = curStep.attr("id");

//    // alert(curStepBtn);

//     var formData = new FormData();

//     // Append all other input fields
//     curStep.find("input[type='text'],input[type='url'],select,textarea,input[type='date']").each(function () {
//         formData.append(this.name, $(this).val());
//     });

//     // Append file inputs
//     curStep.find("input[type='file']").each(function () {
//         if (this.files.length > 0) {
//             for (let i = 0; i < this.files.length; i++) {
//                 formData.append(this.name, this.files[i]);
//                 //console.log(files[i].name);
//             }
//         }
//     });

//     // Send the form data
//     $.ajax({
//         url: "http://localhost/pascav2/public/insstep4",
//         type: 'POST',
//         data: formData,
//         processData: false, // Prevent jQuery from converting the FormData into a string
//         contentType: false, // Let the browser set the correct Content-Type
//         beforeSend: function() {
//             $(".se-pre-con").fadeIn("slow");
//           },	
//           dataType: 'json',				
//           success: function(data){
              
//               $(".se-pre-con").fadeOut("slow");
              
//               switch (data.success) {
//                 case 'ko':
//                 var msg_header = "Error";
//                 var msg = "Please try again.";
//                 var icon_flag = 'error';
//                 break;						
//                 case 'ok':
//                 var msg_header = "Success";
//                 var msg = "Record have been successfully saved.";
//                 var icon_flag = 'success';
//                 // case 'error':
//                 // var msg_header = "error";
//                 // var msg = "Please fill in required value.";
//                 // var icon_flag = 'error';
//                 break;
//                 default:
//                 var msg_header = "Error";
//                 var msg = "Please try again.";
//                 var icon_flag = 'error';	
//             }
              
//               if(data=='ok'){
              
//                   Swal.fire(
//                     msg_header,
//                     msg,
//                     icon_flag 
//                   ).then(function(){
//                           window.location = "http://localhost/pascav2/public/apply";
//                   });					
//               }
//               else{
//                   Swal.fire(
//                     msg_header,
//                     msg,
//                     icon_flag     
//                   ).then(function(){
//                     window.location = "http://localhost/pascav2/public/apply";
//                 });						
//               }
//           },
//         error: function (error) {
//             console.error('Error:', error);
//         }
//     });
// });

//step5
// $(".save4").click(function () {

//     var curStep = $(this).closest(".setup-content");
//     var curStepBtn = curStep.attr("id");

//    // alert(curStepBtn);

//     var formData = new FormData();

//     var curInputs = curStep.find("input[type='text'],input[type='radio'],input[type='checkbox']").serialize();
//     // alert(curInputs);
//     // Append file inputs
//     curStep.find("input[type='file']").each(function () {
//         if (this.files.length > 0) {
//             for (let i = 0; i < this.files.length; i++) {
//                 formData.append(this.name, this.files[i]);
//                 //console.log(files[i].name);
//             }
//         }
//     });

//     // Send the form data
//     $.ajax({
//         url: "http://localhost/pascav2/public/insstep5",
//         type: 'POST',
//         data: curInputs,
//         contentType: 'application/x-www-form-urlencoded',
//         processData: false, // Prevent jQuery from converting the FormData into a string
//       //  contentType: false, // Let the browser set the correct Content-Type
//         beforeSend: function() {
//             $(".se-pre-con").fadeIn("slow");
//           },	
//           dataType: 'json',				
//           success: function(data){
              
//               $(".se-pre-con").fadeOut("slow");
              
//               switch (data.success) {
//                 case 'ko':
//                 var msg_header = "Error";
//                 var msg = "Please try again.";
//                 var icon_flag = 'error';
//                 break;						
//                 case 'ok':
//                 var msg_header = "Success";
//                 var msg = "Record have been successfully saved.";
//                 var icon_flag = 'success';
//                 // case 'error':
//                 // var msg_header = "error";
//                 // var msg = "Please fill in required value.";
//                 // var icon_flag = 'error';
//                 break;
//                 default:
//                 var msg_header = "Error";
//                 var msg = "Please try again.";
//                 var icon_flag = 'error';	
//             }
              
//               if(data=='ok'){
              
//                   Swal.fire(
//                     msg_header,
//                     msg,
//                     icon_flag 
//                   ).then(function(){
//                           window.location = "http://localhost/pascav2/public/apply";
//                   });					
//               }
//               else{
//                   Swal.fire(
//                     msg_header,
//                     msg,
//                     icon_flag     
//                   ).then(function(){
//                     window.location = "http://localhost/pascav2/public/apply";
//                 });						
//               }
//           },
//         error: function (error) {
//             console.error('Error:', error);
//         }
//     });
// });

//print pdf summary
$(".printPdf").click(function () {
    var curStep = $(this).closest(".setup-content");
    var curStepBtn = curStep.attr("id");

    var formData = new FormData();

    // Collect form data (e.g., from <span> elements or form fields)
    curStep.find("span[data-name]").each(function () {
        formData.append($(this).data("name"), $(this).text());
    });

    var imageSrc = $("#previewImage1").attr("src");

    // Append the image preview to the formData (Base64 image data)
    formData.append("passport_image", imageSrc);


    if(curStepBtn === 'step-6'){
        // Send the data to the controller for PDF generation
        $.ajax({
            url: 'http://localhost/pascav2/public/generatepdf', // Update to your route
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            xhrFields: {
                responseType: 'blob' // Ensure the response is treated as a binary Blob
            },
            success: function (response, status, xhr) {
                // Create a downloadable link for the PDF response
                // var blob = response; // 'response' is now a Blob
                // var link = document.createElement('a');
                // link.href = URL.createObjectURL(blob);
                // link.download = 'summary.pdf'; // You can customize the file name
                // link.click();

                //view pdf
                // Create a Blob from the response
                var blob = response;               
                // Create an object URL for the Blob
                var blobUrl = URL.createObjectURL(blob);             
                // Open the Blob URL in a new tab
                var newTab = window.open();
                newTab.document.write('<html><body><embed src="' + blobUrl + '" type="application/pdf" width="100%" height="100%"></embed></body></html>');
            },
            error: function (xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    } else {
        alert("error");
    }
});

//upd add info after accept offer
$(".updaddinfo").click(function () {

 $.ajax({
 type: "POST",
 url: "http://localhost/pascav2/public/updaccept" ,
 //data: formData,
         processData: false,  // tell jQuery not to process the data
         contentType: false,   // tell jQuery not to set contentType		
 beforeSend: function() {
             $(".se-pre-con").fadeIn("slow");
         },
     dataType: 'json',
     success: function(data){
             
     $(".se-pre-con").fadeOut("slow");

     switch (data.success) {
         case 'ko':
         var msg_header = "Error";
         var msg = "Please try again.";
         var icon_flag = 'error';
         break;						
         case 'ok':
         var msg_header = "Success";
         var msg = "You have been successfully update.";
         var icon_flag = 'success';
         break;
         default:
         var msg_header = "Error";
         var msg = "Please try again.";
         var icon_flag = 'error';	
     }

     if(data.success=='ok'){
             
         Swal.fire(
         msg_header,
         msg,
         icon_flag 
         ).then(function(){
             window.location = "http://localhost/pascav2/public/accept";
         });					
     }
     else{
         Swal.fire(
         msg_header,
         msg,
         icon_flag 
         ).then(function(){
             window.location = "http://localhost/pascav2/public/dashboard";
         });							
     }
     }
 
 });
 
});

//upd reject offer dr dashboard
$('#updreject').click(function() {
    alert('Rejec clicked & belum ada backend');
  });

//jump to stepwizard from dashboard

// Initially hide all steps
// $(".setup-content").hide();

// // Show Step 1 by default
// $("#step-1").show();

// // When the dashboard link (e.g., "Profile") is clicked, jump to the corresponding step
// $(".dashboard-link").click(function () {
//     // Get the target step from the span id (e.g., go-to-step-1 -> step-1)
//     var targetStep = $(this).attr("id").replace("go-to-step-", "step-");
//     console.log("Target Step: " + targetStep);  // Debugging: Check the targetStep value

//     // Check if the target step exists in the DOM
//     if ($("#" + targetStep).length > 0) {
//         // Hide all steps
//         $(".setup-content").hide();

//         // Show the corresponding step
//         $("#" + targetStep).show();

//         // Reset step wizard button states
//         $(".stepwizard-step a").removeClass("btn-success").addClass("btn-default").prop("disabled", true); // Reset all steps
//         var stepNum = targetStep.split("-")[1]; // Extract step number
//         console.log("stepNum: " + stepNum);
//         $("#click-" + stepNum).removeClass("btn-default").addClass("btn-success").prop("disabled", false); // Activate current step
//     } else {
//         alert("Error: Target step not found - " + targetStep);  // Debugging: Show error if target step doesn't exist
//     }
// });
//########

$(".previewBtnPDF").click(function () {

$.ajax({
    type: "POST",
    url: "http://localhost/pascav2/public/viewsurat" ,    
    });

    //alert("print & belum ada backend");
window.location.href="http://localhost/pascav2/public/generateletter";
$("#previewModal").modal("show");

});

//view pdf dr dashboard
$('#viewpdf').click(function() {
   // alert('belum ada backend');
    window.location.href="http://localhost/pascav2/public/generateletter";
  });

});//end jquery doc function

// Function to get URL parameters
function getParameterByName(name) {
    var url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&]*)|&|$)"),
        results = regex.exec(url);
    return results ? decodeURIComponent(results[2].replace(/\+/g, " ")) : "";
}
 