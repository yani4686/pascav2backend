'use strict';

$(window).on('load', function() {
    //   // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");  
      });

$(document).ready(function () {

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

    // Navigate between steps

   // method 2
   $(".save").click(function () {

    var curStep = $(this).closest(".setup-content");
    var curStepBtn = curStep.attr("id");

   // alert(curStepBtn);

    var formData = new FormData();

    // Append all other input fields
    curStep.find("input[type='text'],input[type='url'],select,textarea,input[type='date']").each(function () {
        formData.append(this.name, $(this).val());
    });

    // Append file inputs
    curStep.find("input[type='file']").each(function () {
        if (this.files.length > 0) {
            for (let i = 0; i < this.files.length; i++) {
                formData.append(this.name, this.files[i]);
               // console.log(files[i].name);
            }
        }
    });

    // Send the form data
    $.ajax({
        url: "http://localhost/pascav2/public/insstep1",
        type: 'POST',
        data: formData,
        processData: false, // Prevent jQuery from converting the FormData into a string
        contentType: false, // Let the browser set the correct Content-Type
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
                var msg = "Record have been successfully saved.";
                var icon_flag = 'success';
                // case 'error':
                // var msg_header = "error";
                // var msg = "Please fill in required value.";
                // var icon_flag = 'error';
                break;
                default:
                var msg_header = "Error";
                var msg = "Please try again.";
                var icon_flag = 'error';	
            }
              
              if(data=='ok'){
              
                  Swal.fire(
                    msg_header,
                    msg,
                    icon_flag 
                  ).then(function(){
                          window.location = "http://localhost/pascav2/public/apply";
                  });					
              }
              else{
                  Swal.fire(
                    msg_header,
                    msg,
                    icon_flag     
                  ).then(function(){
                    window.location = "http://localhost/pascav2/public/apply";
                });						
              }
          },
        error: function (error) {
            console.error('Error:', error);
        }
    });
});
//step2
$(".save1").click(function () {

    var curStep = $(this).closest(".setup-content");
    var curStepBtn = curStep.attr("id");

   // alert(curStepBtn);

    var formData = new FormData();

    // Append all other input fields
    curStep.find("input[type='text'],input[type='url'],select,textarea,input[type='date']").each(function () {
        formData.append(this.name, $(this).val());
    });

    // Append file inputs
    curStep.find("input[type='file']").each(function () {
        if (this.files.length > 0) {
            for (let i = 0; i < this.files.length; i++) {
                formData.append(this.name, this.files[i]);
                //console.log(files[i].name);
            }
        }
    });

    // Send the form data
    $.ajax({
        url: "http://localhost/pascav2/public/insstep2",
        type: 'POST',
        data: formData,
        processData: false, // Prevent jQuery from converting the FormData into a string
        contentType: false, // Let the browser set the correct Content-Type
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
                var msg = "Record have been successfully saved.";
                var icon_flag = 'success';
                // case 'error':
                // var msg_header = "error";
                // var msg = "Please fill in required value.";
                // var icon_flag = 'error';
                break;
                default:
                var msg_header = "Error";
                var msg = "Please try again.";
                var icon_flag = 'error';	
            }
              
              if(data=='ok'){
              
                  Swal.fire(
                    msg_header,
                    msg,
                    icon_flag 
                  ).then(function(){
                          window.location = "http://localhost/pascav2/public/apply";
                  });					
              }
              else{
                  Swal.fire(
                    msg_header,
                    msg,
                    icon_flag     
                  ).then(function(){
                    window.location = "http://localhost/pascav2/public/apply";
                });						
              }
          },
        error: function (error) {
            console.error('Error:', error);
        }
    });
});
//step3
$(".save2").click(function () {

    var curStep = $(this).closest(".setup-content");
    var curStepBtn = curStep.attr("id");

   // alert(curStepBtn);

    var formData = new FormData();

    // Append all other input fields
    curStep.find("input[type='text'],input[type='url'],select,textarea,input[type='date']").each(function () {
        formData.append(this.name, $(this).val());
    });

    // Append file inputs
    curStep.find("input[type='file']").each(function () {
        if (this.files.length > 0) {
            for (let i = 0; i < this.files.length; i++) {
                formData.append(this.name, this.files[i]);
                //console.log(files[i].name);
            }
        }
    });

    // Send the form data
    $.ajax({
        url: "http://localhost/pascav2/public/insstep3",
        type: 'POST',
        data: formData,
        processData: false, // Prevent jQuery from converting the FormData into a string
        contentType: false, // Let the browser set the correct Content-Type
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
                var msg = "Record have been successfully saved.";
                var icon_flag = 'success';
                // case 'error':
                // var msg_header = "error";
                // var msg = "Please fill in required value.";
                // var icon_flag = 'error';
                break;
                default:
                var msg_header = "Error";
                var msg = "Please try again.";
                var icon_flag = 'error';	
            }
              
              if(data=='ok'){
              
                  Swal.fire(
                    msg_header,
                    msg,
                    icon_flag 
                  ).then(function(){
                          window.location = "http://localhost/pascav2/public/apply";
                  });					
              }
              else{
                  Swal.fire(
                    msg_header,
                    msg,
                    icon_flag     
                  ).then(function(){
                    window.location = "http://localhost/pascav2/public/apply";
                });						
              }
          },
        error: function (error) {
            console.error('Error:', error);
        }
    });
});

//step4
$(".save3").click(function () {

    var curStep = $(this).closest(".setup-content");
    var curStepBtn = curStep.attr("id");

   // alert(curStepBtn);

    var formData = new FormData();

    // Append all other input fields
    curStep.find("input[type='text'],input[type='url'],select,textarea,input[type='date']").each(function () {
        formData.append(this.name, $(this).val());
    });

    // Append file inputs
    curStep.find("input[type='file']").each(function () {
        if (this.files.length > 0) {
            for (let i = 0; i < this.files.length; i++) {
                formData.append(this.name, this.files[i]);
                //console.log(files[i].name);
            }
        }
    });

    // Send the form data
    $.ajax({
        url: "http://localhost/pascav2/public/insstep4",
        type: 'POST',
        data: formData,
        processData: false, // Prevent jQuery from converting the FormData into a string
        contentType: false, // Let the browser set the correct Content-Type
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
                var msg = "Record have been successfully saved.";
                var icon_flag = 'success';
                // case 'error':
                // var msg_header = "error";
                // var msg = "Please fill in required value.";
                // var icon_flag = 'error';
                break;
                default:
                var msg_header = "Error";
                var msg = "Please try again.";
                var icon_flag = 'error';	
            }
              
              if(data=='ok'){
              
                  Swal.fire(
                    msg_header,
                    msg,
                    icon_flag 
                  ).then(function(){
                          window.location = "http://localhost/pascav2/public/apply";
                  });					
              }
              else{
                  Swal.fire(
                    msg_header,
                    msg,
                    icon_flag     
                  ).then(function(){
                    window.location = "http://localhost/pascav2/public/apply";
                });						
              }
          },
        error: function (error) {
            console.error('Error:', error);
        }
    });
});

//step5
$(".save4").click(function () {

    var curStep = $(this).closest(".setup-content");
    var curStepBtn = curStep.attr("id");

   // alert(curStepBtn);

    var formData = new FormData();

    // Append all other input fields
    // curStep.find("input[type='text'],input[type='radio'],input[type='checkbox']").each(function () {
    //     formData.append(this.name, $(this).val());
    // });

    var curInputs = curStep.find("input[type='text'],input[type='radio'],input[type='checkbox']").serialize();
    // alert(curInputs);
    // Append file inputs
    curStep.find("input[type='file']").each(function () {
        if (this.files.length > 0) {
            for (let i = 0; i < this.files.length; i++) {
                formData.append(this.name, this.files[i]);
                //console.log(files[i].name);
            }
        }
    });

    // Send the form data
    $.ajax({
        url: "http://localhost/pascav2/public/insstep5",
        type: 'POST',
        data: curInputs,
        contentType: 'application/x-www-form-urlencoded',
        processData: false, // Prevent jQuery from converting the FormData into a string
      //  contentType: false, // Let the browser set the correct Content-Type
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
                var msg = "Record have been successfully saved.";
                var icon_flag = 'success';
                // case 'error':
                // var msg_header = "error";
                // var msg = "Please fill in required value.";
                // var icon_flag = 'error';
                break;
                default:
                var msg_header = "Error";
                var msg = "Please try again.";
                var icon_flag = 'error';	
            }
              
              if(data=='ok'){
              
                  Swal.fire(
                    msg_header,
                    msg,
                    icon_flag 
                  ).then(function(){
                          window.location = "http://localhost/pascav2/public/apply";
                  });					
              }
              else{
                  Swal.fire(
                    msg_header,
                    msg,
                    icon_flag     
                  ).then(function(){
                    window.location = "http://localhost/pascav2/public/apply";
                });						
              }
          },
        error: function (error) {
            console.error('Error:', error);
        }
    });
});

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

//print pdf using window print
$(".printPageIcon").click(function () {

    var curStep = $(this).closest(".setup-content");
    var curStepBtn = curStep.attr("id");

   // alert(curStepBtn);

    // Clone the content of the current step
    var contentToPrint = curStep.clone();

    // Create a new window or iframe for printing
    var printWindow = window.open('', '', 'width=1000, height=600');

    if(curStepBtn === 'step-6'){

        // Append the cloned content to the new window
    printWindow.document.write('<html><head><title>Print</title>');
    printWindow.document.write('<style>body{font-family: Arial, sans-serif;}</style>');  // Optional CSS styling
    printWindow.document.write('</head><body>');
    printWindow.document.write(contentToPrint.html());
    printWindow.document.write('</body></html>');

    // Wait for the content to load, then print it
    printWindow.document.close();  // Close the document to finish writing
    printWindow.print();  // Trigger the print dialog
    printWindow.close();  // Close the print window after printing

    }else{
        alert("error");
    }

});

//link page dr dashboard
// On click of the dashboard link
// $(".step-link").click(function () {
//     // Get the target step ID
//    // var targetStep = $(this).data("target-step");

//     //alert(targetStep);
// });
//upd add info after accept offer
$(".updaddinfo").click(function () {

 alert("update & belum ada backend");
 
});

//upd reject offer
$('#updreject').click(function() {
    alert('Rejec clicked & belum ada backend');
  });

$(".printPdfsurat").click(function () {

alert("print & belum ada backend");

});

});

 