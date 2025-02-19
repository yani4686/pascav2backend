$(document).ready(function () {
    /* test hide div */
    $('#laluan').on('change', function () {

      //  var valuetest = $(this).val();
       // alert(valuetest);
        
       if($(this).val() === 'AP' || $(this).val() === 'NG'){

           // alert("b");
          // $("input[type=text],input[type=checkbox]").attr('disabled', true);
           // $("#divhide").hide();
             $("#docap").show();
        }
        else{
         //   $("input[type=text],input[type=checkbox]").attr('disabled', false);
        //  $("#divhide").show();
            $("#docap").hide();
         //   alert("a");
        }

    });
    //$("#divhide").hide();
    $("#docap").hide();

    $('#stsoku').on('change', function () {
 
         if($(this).val() === 'y'){
             $("#nooku").show();
             $("#divoku").show();
          }
          else{ 
              $("#nooku").hide();
              $("#divoku").hide();
          }
      });

         $("#nooku").hide();
         $("#divoku").hide();

    $('#info-mdl-1').click(function (e) {
		
		Swal.fire({
		  title: 'Passport Photo Guidelines',
		  html: 'Please ensure the uploaded image size must be : <br>Either <b>white/blue</b> background <br>Does not exceed <b>3 MB</b> and <br>Formatted is in <b>jpg/jpeg file format.</b>',
		  imageUrl: 'http://localhost/pascav2/assets/images/100_2.jpg',
		  width: 600,
		  customClass: 'swal-margin',
		//   imageAlt: 'Custom image',
		})	
		
	});	
    $('#info-mdl-2').click(function (e) {
		
		Swal.fire({
		  title: 'Name Guidelines',
		  html: '<b>Local</b> : Please enter name according to IC. [<a href="./pascav2/assets/doc/GUIDELINE_PASSPORT.pdf.crdownload" autofocus>Click Here</a>]<br><b>International</b> : Please enter name according to Machine Readable Zone (MRZ) name in the international passport.[<a href="../assets/doc/GUIDELINE_PASSPORT.pdf.crdownload" autofocus>Click Here</a>]',
		//   imageUrl: '../assets/doc/GUIDELINE_PASSPORT.pdf',
		  width: 500,
		  customClass: 'swal-margin',
		//   imageAlt: 'Custom image',
		})	
		
	});	
    $('#info-mdl-3').click(function (e) {
		
		Swal.fire({
		  title: 'Correspondence Address Guidelines',
		  html: '<b>CORRESPONDENCE ADDRESS</b> must be the current address where you currently live. If you declare before that you are currently in Malaysia, you should put your current address in Malaysia.<br>If outside Malaysia,then the current address should be your <b>HOME ADDRESS</b> in your country.',
		//   imageUrl: '../assets/images/100_2.jpg',
		  width: 600,
		  customClass: 'swal-margin',
		//   imageAlt: 'Custom image',
		})	
		
	});

    $('#info-mdl-4').click(function (e) {
		
		Swal.fire({
		  title: 'Home Address Guidelines',
		  html: '<b>HOME ADDRESS</b> is address at your home country. For <b>local student</b>,the home address can be the same as the <b>CURRENT ADDRESS</b>',
		//   imageUrl: '../assets/images/100_2.jpg',
		  width: 600,
		  customClass: 'swal-margin',
		//   imageAlt: 'Custom image',
		})	
		
	});

  /* Display pd dashboard */

$.ajax({
  url: 'http://localhost/pascav2/public/getdata', // Replace with your server endpoint
  method: 'GET',
 dataType: 'json', // Expect JSON response
  success: function (data) {
      // Check if the response contains data
      var usr  =  data.username;

      $('#session').text(usr);

      //console.log(usr);
      //alert(usr);
  }
});

$.ajax({
  url: 'http://localhost/pascav2/public/displayprofile', // Replace with your server endpoint
  method: 'GET',
 dataType: 'json', // Expect JSON response
 //header :'"Cache-Control": "no-cache"',
  success: function (result) {
      // Check if the response contains data
      var image     =  result.p001upgambar ;
      var statmohondash = result.p001status;
      var statjanasurat = result.p001ststerimatwr;
      var sttmentapp = 'Your application has been approved';
      var sttmentdisapp = 'Your application has been disapproved';

      var urldisplaypic;
      urldisplaypic = 'http://localhost/pascav2/public/uploads/' + image;

      if (image) {
        $('#previewImage').attr('src', urldisplaypic).show();
        $('#image-boxdashboard').addClass('has-image');
    }else {
        // No image found, reset to default state
        $('#previewImage').attr('src', 'http://localhost/pascav2/assets/media/users/blank.png').hide();
        $('#image-boxdashboard').removeClass('has-image');
    }

    $('.timeline-step').removeClass('active');
    // Apply different classes or styles depending on the status
      if (statmohondash === '' || statmohondash === null) {
        $('#step-application').addClass('active');  // Yellow for active
        $('#step-processing').removeClass('active'); // Reset to gray
        $('#step-result').removeClass('active');     // Reset to gray

        //---hide menu checklist
        $("#program, #sokongan, #tambahan, #pengesahan, #divsumm").show();
        $("#sttmntdraft").show();
        $("#sttmntnew").hide();
        $("#sttmntproccess").hide();
        $("#sttmntapprove").hide();
    } else if (statmohondash === '0'||statmohondash === '4') {
      $('#step-application').addClass('active'); // Reset to gray
      $('#step-processing').addClass('active');    // Yellow for active
      $('#step-result').removeClass('active');     // Reset to gray
      //-----
      //$("#program, #sokongan, #tambahan, #pengesahan").hide();
      $("#program, #sokongan, #tambahan, #pengesahan").removeClass("d-flex").addClass("d-none");
      $("#divsumm").show();

      $("#sttmntdraft").hide();
      $("#sttmntnew").show();
      $("#sttmntproccess").show();
      $("#sttmntapprove").removeClass("d-flex").addClass("d-none");
    } else if (statmohondash === '2') {
      $('#step-application').addClass('active'); // Reset to gray
      $('#step-processing').addClass('active');    // Yellow for active
      $('#step-result').removeClass('active');     // Reset to gray
      //-----
      //$("#program, #sokongan, #tambahan, #pengesahan").hide();
      $("#program, #sokongan, #tambahan, #pengesahan").removeClass("d-flex").addClass("d-none");
      $("#divsumm").show();

      $("#sttmntdraft").hide();
      $("#sttmntnew").hide();
      $("#sttmntproccess").show();
      $("#sttmntapprove").removeClass("d-flex").addClass("d-none");
    }
    else if (statmohondash === '1') {
      $('#step-application').removeClass('active'); // Reset to gray
      $('#step-processing').removeClass('active');  // Reset to gray
      $('#step-result').addClass('active');         // Yellow for active
      //----
      $("#program, #sokongan, #tambahan, #pengesahan").removeClass("d-flex").addClass("d-none");
      $("#divsumm").show();

      $('#approvedstt').text(sttmentapp);  

      $("#sttmntdraft").hide();
      $("#sttmntnew").hide();
      $("#sttmntproccess").hide();
      $("#sttmntapprove").show();
    }
    else if (statmohondash === '3') {
      $('#step-application').removeClass('active'); // Reset to gray
      $('#step-processing').removeClass('active');  // Reset to gray
      $('#step-result').addClass('active');         // Yellow for active
      //----
      $("#program, #sokongan, #tambahan, #pengesahan").removeClass("d-flex").addClass("d-none");
      $("#divsumm").show();

      $('#approvedstt').text(sttmentdisapp);  

      $("#sttmntdraft").hide();
      $("#sttmntnew").hide();
      $("#sttmntproccess").hide();
      $("#sttmntapprove").show();
    }
    //hide display icon print surat
    if (statmohondash === '1' && statjanasurat === '1') {
      $("#sttmntapprove").show();
      $("#viewpdf").show();
      $("#updaccept").hide();
      $("#updreject").hide();
    }
    else if (statmohondash === '1' && statjanasurat === '0') {
      $("#sttmntapprove").show();
      $("#viewpdf").hide();
      $("#updaccept").show();
      $("#updreject").show();
    }else{
      $("#sttmntapprove").show();
      $("#viewpdf").hide();
      $("#updaccept").show();
      $("#updreject").show();
    }

  }
});

$.ajax({
  url: 'http://localhost/pascav2/public/countdisplaydashboard', // Replace with your server endpoint
  method: 'GET',
 dataType: 'json', // Expect JSON response
 //header :'"Cache-Control": "no-cache"',
  success: function (result) {
      // Check if the response contains data
      var step1     =  result.adastep1 ;
      var step2     =  result.adastep2 ;
      var step3     =  result.adastep3 ;
      var statcomp = 'Complete';
      var statincomp = 'Incomplete';

      step1 = step1.trim();
      step2 = step2.trim();
      step3 = step3.trim();
     // console.log("Trimmed step1: ", step1);
     // console.log("Type of step1: ", typeof step3);

     // alert(statcomp);
      if(step1 === '0'){
        $('#go-to-step-1').removeClass().addClass('dashboard-link font-weight-bolder label label-xl label-light-success label-inline px-3 py-1 min-w-45px'); 
        $('#go-to-step-1').text(statcomp); 
      }else if (step1 === '1') {
        $('#go-to-step-1').removeClass().addClass('dashboard-link font-weight-bolder label label-xl label-light-danger label-inline px-3 py-1 min-w-45px ');  
        $('#go-to-step-1').text(statincomp);  
      } 
      
      if(step2 === '0'){ 
        $('#go-to-step-2').removeClass().addClass('dashboard-link font-weight-bolder label label-xl label-light-success label-inline px-3 py-1 min-w-45px'); 
        $('#go-to-step-2').text(statcomp); 
      }else if (step2 === '1') {
        $('#go-to-step-2').removeClass().addClass('dashboard-link font-weight-bolder label label-xl label-light-danger label-inline px-3 py-1 min-w-45px '); 
        $('#go-to-step-2').text(statincomp);
       }
       
      if(step3 === '0'){ 
        $('#go-to-step-3').removeClass().addClass('dashboard-link font-weight-bolder label label-xl label-light-success label-inline px-3 py-1 min-w-45px'); 
        $('#go-to-step-3').text(statcomp); 
      }else if (step3 === '1') {
        $('#go-to-step-3').removeClass().addClass('dashboard-link font-weight-bolder label label-xl label-light-danger label-inline px-3 py-1 min-w-45px '); 
        $('#go-to-step-3').text(statincomp);
      }

      if(step1 === '0' && step2 === '0' && step3 === '0'){ 
        $('#summary').removeClass().addClass('font-weight-bolder label label-xl label-light-success label-inline px-3 py-1 min-w-45px'); 
        $('#summary').text(statcomp); 
      }else if (step1 === '1' || step2 === '1' || step3 === '1') {
        $('#summary').removeClass().addClass('font-weight-bolder label label-xl label-light-danger label-inline px-3 py-1 min-w-45px '); 
        $('#summary').text(statincomp);
      }
    //console.log($("#go-to-step-1").length);
  }
});

$("#kt_quick_panel_toggle").click(function () {
//   alert("Icon clicked!");
// });

  $.ajax({
    type: "POST",
    url: "http://localhost/pascav2/public/logout" ,
    //data : data,
        dataType: 'json',
        success: function(response){
                
        $(".se-pre-con").fadeOut("slow");

        switch (response.status) {
            case '':
            var msg_header = "Error";
            var msg = "Please try again.";
            var icon_flag = 'error';
            break;						
            case 'success':
            var msg_header = "Success";
            var msg = "You have been successfully logout .";
            var icon_flag = 'success';
            break;
            default:
            var msg_header = "Error";
            var msg = "Please try again.";
            var icon_flag = 'error';	
        }

        if(response.status=='success'){
                
            Swal.fire(
            msg_header,
            msg,
            icon_flag 
            ).then(function(){
                window.location = "http://localhost/pascav2/public/";
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

});