$(document).ready(function () {

//     var navListItems = $('div.setup-panel div a'),
//     allWells = $('.setup-content'),
//     allNextBtn = $('.nextBtn');
//    // alert(allNextBtn);

//     allWells.show();//default hide

//     navListItems.click(function (e) {
//         e.preventDefault();
//         var $target = $($(this).attr('href')),
//             $item = $(this);
	
//         if (!$item.hasClass('disabled')) {
//             navListItems.removeClass('btn-success').addClass('btn-default');
//             $item.addClass('btn-success');
//             allWells.hide();
//             $target.show();
//             $target.find('input:eq(0)').focus();
//         }
	
//     });

//     allNextBtn.click(function () {

//         isValid = true;

//         var curStep = $(this).closest(".setup-content"),
//         curStepBtn = curStep.attr("id"),
//         nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
//         curInputs = curStep.find("input[type='text']"),
//         //curInputs = curStep.find(""),
//         isValid = true;

//       //  alert(curStep);

//         $(".form-group").removeClass("has-error");
//         for (var i = 0; i < curInputs.length; i++) {
//             if (!curInputs[i].validity.valid) {
//                 isValid = false;
//                 $(curInputs[i]).closest(".form-group").addClass("has-error");
//             }
//         }

//         if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');

//     });

//     $('div.setup-panel div a.btn-success').trigger('click');

/*selectdropdown */
    $('#laluan').on('change', function () {

       if($(this).val() === 'AP' || $(this).val() === 'NG'){

             $("#docap").show();
        }
        else{  
            $("#docap").hide();
        }

    });
    $("#docap").hide();

//hide and display col no oku
    $('#stsoku').on('change', function () {
 
         if($(this).val() != 12){
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

    $('#modest').on('change', function () {

    if($(this).val() === '8'){
        $("#hidespc").show();
        $("#hiderse").show();
        $("#hidesv").show();
        $("#hidework").hide();
        }
        else{ 
            $("#hidespc").hide();
            $("#hiderse").hide();
            $("#hidesv").hide();
            $("#hidework").show();
        }
    });
    $("#hidespc").hide();
    $("#hiderse").hide();
     $("#hidesv").hide();
     $("#hidework").hide();
//auto display parlimennt
// $('#dun').on('change', function () {
 
    
//  });
/*accept offer */
    //  $('#stsagree').on('click', function () {
      $("#stsagree").click(function(){

      if($(this).is(':checked')){
          $("#hidebtnoffer").show();
          }
          else{ 
              $("#hidebtnoffer").hide();
          }
      });
      $("#hidebtnoffer").hide();

    /* radiobutton */
    $("input[name$='stsag']").on('click', function () {

        if($(this).val() === 'y'){
            $("#hideag").show();
            }
        else if($(this).val() === 'n'){ 
            $("#hideag").hide();
        }
        else { 
            $("#hideag").hide();
        }
        });
        
        $('[name="stsag"]:checked').trigger('click');

        $("#hideag").hide();

    $("input[name$='stssc']").on('click', function () {
        var radio_value = $(this).val();

        if(radio_value==='') {
            $("#divtypefinance1").hide();
            $("#divtypefinance2").hide();
            $("#divtypefinance3").hide();
            $("#hidetypefinance").hide();
          }
          else if(radio_value==='sch') {
            $("#divtypefinance1").show();
            $("#typesponser").show();
            $("#divtypefinance2").hide();
            $("#house").hide();
            $("#divtypefinance3").hide();
            $("#upload").hide();
            $("#hidetypefinance").show();
          }
          else if(radio_value==='self') {
            $("#divtypefinance1").hide();
            $("#typesponser").hide();
            $("#divtypefinance2").show();
            $("#house").show();
            $("#divtypefinance3").show();
            $("#upload").show();
            $("#hidetypefinance").show();
           }
        });

        $('[name="stssc"]:checked').trigger('click');
         $("#hidetypefinance").hide();

        // status english
        
        $("input[name$='stselp']").on('click', function () {

          var radio_value = $(this).val();

          if(radio_value==''){
            $("#muet").hide();
            $("#adeng").hide();
            $("#hidediveng").hide();
           }
          else if(radio_value=='y'){ 
            $("#muet").show();
            $("#adeng").show();
            $("#hidediveng").show();
          }
          else if(radio_value=='n'){ 
            $("#muet").hide();
            $("#adeng").hide();
            $("#hidediveng").hide();
          }
          
          });
          
          $('[name="stselp"]:checked').trigger('click');
  
          $("#hidediveng").hide();
         // $("#adeng").hide();

         //status warga kt login
         $("input[name$='stswarga']").on('click', function () {

          var radio_value = $(this).val();

          if(radio_value=='1'){
            $("#nokplabel").show();
            $("#nopasslabel").hide();
          
           }
          else if(radio_value=='2'){ 
            $("#nokplabel").hide();
            $("#nopasslabel").show();
          }
          
          });
          
          $('[name="stswarga"]:checked').trigger('click');
          $("#nokplabel").show();
          $("#nopasslabel").hide();

    $('#info-mdl-1').click(function (e) {
		
		Swal.fire({
		  title: 'Passport Photo Guidelines',
		  html: 'Please ensure the uploaded image size must be : <br>Either <b>white/blue</b> background <br>Does not exceed <b>3 MB</b> and <br>Formatted is in <b>jpg/jpeg file format.</b>',
		  imageUrl: 'http://localhost/pascav2/assets/images/100_2.png',
		  width: 600,
		  customClass: 'swal-margin',
		//   imageAlt: 'Custom image',
		})	
		
	});	
    $('#info-mdl-2').click(function (e) {
		
		Swal.fire({
		  title: 'Name Guidelines',
		  html: '<b>Local</b> : Please enter name according to IC. [<a href="../assets/doc/GUIDELINE_PASSPORT.pdf.crdownload" autofocus>Click Here</a>]<br><b>International</b> : Please enter name according to Machine Readable Zone (MRZ) name in the international passport.[<a href="../assets/doc/GUIDELINE_PASSPORT.pdf.crdownload" autofocus>Click Here</a>]',
		//   imageUrl: '../assets/doc/GUIDELINE_PASSPORT.pdf',
		  width: 500,
		  customClass: 'swal-margin',
		//   imageAlt: 'Custom image',
		})	
		
	});	
    $('#info-mdl-3').click(function (e) {
		
		Swal.fire({
		  title: 'Correspondence Address Guidelines',
		  html: '<b>CORRESPONDENCE ADDRESS</b> must be the current address where you currently live. If you declare before that you are currently in Malaysia, you should put your current address in Malaysia.<br><br>If outside Malaysia,then the current address should be your <b>HOME ADDRESS</b> in your country.',
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

    $('#info-mdl-5').click(function (e) {
		
		Swal.fire({
		  title: 'Processing Fee Guidelines',
		  html: '<b>Processing Fee Payment</b>:<br>Local student: RM 25.00<br>International Student: USD 25/ RM60.00<br><br><b>Method of payment</b>:<br>Local Student:<br><b>Beneficiary Bank</b>: Bank Islam Malaysia Berhad (BIMB)<br><b>Beneficiary Account No</b>: 130 170 100 82394<br><b>Beneficiary Name</b>: TETUAN UNIVERSITI SULTAN ZAINAL ABIDIN<br><br>International Student:<br><b>Beneficiary Bank</b>: RHB Bank Berhad<br><b>Beneficiary Account No</b>: 2-63015-0002402-0<br><b>Beneficiary Name</b>: BENDAHARI UNIVERSITI SULTAN ZAINAL ABIDIN<br><b>Swift Code</b>: RHBBMYKL',
		//   imageUrl: 'http://localhost/pascav2/assets/images/100_2.png',
		  width: 800,
		  customClass: 'swal-margin',
		//   imageAlt: 'Custom image',
		})	
		
	});

    $('#info-mdl-6').click(function (e) {
		
		Swal.fire({
		  title: 'Cumulative Grade Point Average Equivalence (CGPA)',
		  html: '<b>Cumulative Grade Point Average Equivalence (CGPA)</b> for admission requirements is as follows in picture above',
		  imageUrl: '../pascav2/assets/images/cgpa_guildelines.jpg',
		  width: 600,
		  customClass: 'swal-margin',
		//   imageAlt: 'Custom image',
		})	
		
	});

    $('#info-mdl-6_1').click(function (e) {
		
		Swal.fire({
		  title: 'Cumulative Grade Point Average Equivalence (CGPA)',
		  html: '<b>Cumulative Grade Point Average Equivalence (CGPA)</b> for admission requirements is as follows in picture above',
		  imageUrl: '../pascav2/assets/images/cgpa_guildelines.jpg',
		  width: 600,
		  customClass: 'swal-margin',
		//   imageAlt: 'Custom image',
		})	
		
	});

  //checkbox same address
  $('#sameAddress').on('change', function () {
    if ($(this).is(':checked')) {
        // Copy value from home address to office address
        $('#homeadd').val($('#corradd').val());
        $('#homeadd1').val($('#corradd1').val());
        $('#posthomeadd').val($('#postcorradd').val());
        $('#bndrhomeadd').val($('#bndrcorradd').val());
        $('#notelhome').val($('#notel').val());
        $('#faxnohome').val($('#faxno').val());
    } else {
        // Clear the office address field when unchecked
        $('#homeadd').val('');
        $('#homeadd1').val('');
        $('#posthomeadd').val('');
        $('#bndrhomeadd').val('');
        $('#notelhome').val('');
        $('#faxnohome').val('');
    }
});

// Optional: Update office address dynamically if home address changes
$('#corradd').on('input', function () {
    if ($('#sameAddress').is(':checked')) {
        $('#homeadd').val($(this).val());
    }
});

$('#corradd1').on('input', function () {
    if ($('#sameAddress').is(':checked')) {
        $('#homeadd1').val($(this).val());
    }
});

$('#postcorradd').on('input', function () {
  if ($('#sameAddress').is(':checked')) {
      $('#posthomeadd').val($(this).val());
  }
});

$('#bndrcorradd').on('input', function () {
    if ($('#sameAddress').is(':checked')) {
        $('#bndrhomeadd').val($(this).val());
    }
  });

  $('#notel').on('input', function () {
    if ($('#sameAddress').is(':checked')) {
        $('#notelhome').val($(this).val());
    }
  });

  $('#faxno').on('input', function () {
    if ($('#sameAddress').is(':checked')) {
        $('#faxnohome').val($(this).val());
    }
  });


  // ret data for lookup kod program
//   var retprogram = $('#labelkdprogrm').text(program);

//   $.ajax({
//     type: "GET",
//     url: "http://localhost/pascav2/public/getkodprogram",
//     data: {},
//     //cache: false, // Disable caching of AJAX responses
//     success: function(data) {
//         var json_data = data;
//         var foundProgram = null;

//           // Search for the matching program code in the returned data
//           $.each(json_data, function(key, cat) {
//             if (cat.p020kprog === retprogram) {
//                 foundProgram = cat;
//             }
//         });

//         if (foundProgram) {
//             // Combine code and description and show it in the label
//             var displayText = foundProgram.p020kprog + " - " + foundProgram.p020namaprogbi + " - " + foundProgram.z054bnecdetail;
//             $('#labelkdprogrm').text(displayText);
//         } else {
//             $('#labelkdprogrm').text("Program not found: " + retprogram);
//         }

//         // Optional: populate the select options as in your original AJAX

//         var select = $("#kdprg").empty(); // Empty the select before adding new options
        
//         $.each(json_data, function(key, cat) {
//             // Create the option element
//             var option = "<option value='" + cat.p020kprog + "'>" + cat.p020namaprogbi + "-" + cat.z054bnecdetail + "</option>";
            
//             // Check if there is a group (a019bi)
//             if (cat.hasOwnProperty("a019bi")) {
//                 var group = cat.a019bi;
                
//                 // Check if the optgroup already exists
//                 var optgroup = select.find("optgroup[label='" + group + "']");
                
//                 // If the optgroup doesn't exist, create it
//                 if (optgroup.length === 0) {
//                     select.append("<optgroup label='" + group + "'></optgroup>");
//                     optgroup = select.find("optgroup[label='" + group + "']"); // Re-find the newly created optgroup
//                 }
                
//                 // Append the option to the appropriate optgroup
//                 optgroup.append(option);

//             } else {
//                 // If there's no group, just append the option directly
//                 select.append(option);
//             }
        
//         });

//          // Refresh the selectpicker to update UI
//          $('#kdprg').selectpicker('refresh');
//     },
//     error: function(xhr, status, error) {
//         console.error("Error fetching data: " + error);
//     }
// });
  /*kod negara */

//   $.ajax({
//     url: 'http://localhost/pascav2/public/getkodnegara', // Replace with your server endpoint
//     method: 'GET',
//     dataType: 'json', // Expect JSON response
//     success: function (response) {
//         // Check if the response contains data
//         if (response && response.length > 0) {
//             // Iterate through the data
//             response.forEach(function (item) {
//                 // Append each item as an option
//                 $('#kdnegara').append(
//                     $('<option>', {
//                         value: item.c028kod, // Use 'id' from response
//                         text: item.c028keterangan, // Use 'name' from response
//                     })
//                 );
//                 //negara warganegara
//                 $('#warganeg').append(
//                   $('<option>', {
//                       value: item.c028kod, // Use 'id' from response
//                       text: item.c028keterangan, // Use 'name' from response
//                   })
//               );
//               //negara warganegara home
//               $('#kdnegarahome').append(
//                 $('<option>', {
//                     value: item.c028kod, // Use 'id' from response
//                     text: item.c028keterangan, // Use 'name' from response
//                 })
//             );
//             //negara award uni
//             $('#highunicountry').append(
//                 $('<option>', {
//                     value: item.c028kod, // Use 'id' from response
//                     text: item.c028keterangan, // Use 'name' from response
//                 })
//             );

//             //award masterphd country
//              $('#masterphdcountry').append(
//                 $('<option>', {
//                     value: item.c028kod, // Use 'id' from response
//                     text: item.c028keterangan, // Use 'name' from response
//                 })
//             );

//             });

            

//             // Refresh the selectpicker to update UI
//             $('#kdnegara').selectpicker('refresh');
//             $('#warganeg').selectpicker('refresh');
//             $('#kdnegarahome').selectpicker('refresh');
//             $('#highunicountry').selectpicker('refresh');
//             $('#masterphdcountry').selectpicker('refresh');

//         } else {
//            // alert('No data found');
//             console.log("fail ret ajax negara");
//         }
//     },
//     error: function (xhr, status, error) {
//         console.error('Error fetching data:', error);
//     },
// });
 
/*kod negeri */
// $.ajax({
//   url: 'http://localhost/pascav2/public/getkodnegeri', // Replace with your server endpoint
//   method: 'GET',
//   dataType: 'json', // Expect JSON response
//   success: function (response) {
//       // Check if the response contains data
//       if (response && response.length > 0) {
//           // Iterate through the data
//           response.forEach(function (item) {
//               // Append each item as an option
//               $('#kdnegeri').append(
//                   $('<option>', {
//                       value: item.a090knegeri, // Use 'id' from response
//                       text: item.a090negeri, // Use 'name' from response
//                   })
//               );
//                  // negeri home
//                  $('#kdnegerihome').append(
//                   $('<option>', {
//                       value: item.a090knegeri, // Use 'id' from response
//                       text: item.a090negeri, // Use 'name' from response
//                   })
//               );
//           });

//           // Refresh the selectpicker to update UI
//           $('#kdnegeri').selectpicker('refresh');
//           $('#kdnegerihome').selectpicker('refresh');

//       } else {
//         //  alert('No data found');
//           console.log("fail ret ajax negeri");
//       }
//   },
//   error: function (xhr, status, error) {
//       console.error('Error fetching data:', error);
//   },
// });

/*kod kecacatan */
$.ajax({
  url: 'http://localhost/pascav2/public/getkodkecacatan', // Replace with your server endpoint
  method: 'GET',
  dataType: 'json', // Expect JSON response
  success: function (response) {
      // Check if the response contains data
      if (response && response.length > 0) {
          // Iterate through the data
          response.forEach(function (item) {
              // Append each item as an option
              $('#stsoku').append(
                  $('<option>', {
                      value: item.z013akod, // Use 'id' from response
                      text: item.z013abi, // Use 'name' from response
                  })
              );
          });

          // Refresh the selectpicker to update UI
          $('#stsoku').selectpicker('refresh');

      } else {
       //   alert('No data found');
          console.log("fail ret ajax oku");
      }
  },
  error: function (xhr, status, error) {
      console.error('Error fetching data:', error);
  },
});
/* kod penaja */
$.ajax({
    url: 'http://localhost/pascav2/public/getkodpenaja',
    method: 'GET',
    dataType: 'json',
    success: function (response) {
        if (response && response.length > 0) {
            response.forEach(function (item) {
                var tajaCode = String(item.a010kpenaja).trim();//samakan type data
                var tajaktrg = item.a010penaja;
                $('#kdtaja').append(
                    $('<option>', {
                        value: tajaCode,
                        text: tajaktrg, 
                    })
                );
            });
  
          //  $('#kdtaja').selectpicker('val', response[0].a010kpenaja);
            $('#kdtaja').selectpicker('refresh');
  
        } else {
           // alert('No data found');
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching data:', error);
    },
  });

  
// kod dun
$.ajax({
    url: 'http://localhost/pascav2/public/getkoddun', // Replace with your server endpoint
    method: 'GET',
    dataType: 'json', // Expect JSON response
    success: function (response) {
       // console.log(response);
        // Check if the response contains data
        if (response && response.length > 0) {
            // Iterate through the data
            response.forEach(function (item) {
                var dunCode = item.z041dun;        // Retrieve the value of 'z041dun'
                var dunktrg = item.z041dun;
               // var parlimen = item.z041parlimen;

               // console.log(dunktrg);
                // Append each item as an option
                $('#dun').append(
                    $('<option>', {
                        value: dunCode, // Use 'id' from response
                        text: dunktrg, // Use 'name' from response
                    })
                );

               // $('#parlimen').val(parlimen);
            });
  
            // Refresh the selectpicker to update UI
            $('#dun').selectpicker('refresh');
  
        } else {
            //alert('No data found');
            console.log("fail ret ajax dun");
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching data:', error);
    },
  });
  // kod sek
$.ajax({
    url: 'http://localhost/pascav2/public/getkodsek', // Replace with your server endpoint
    method: 'GET',
    dataType: 'json', // Expect JSON response
    success: function (response) {
       // console.log(response);
        // Check if the response contains data
        if (response && response.length > 0) {
            // Iterate through the data
            response.forEach(function (item) {
                var sekCode = item.z040kodmohes;        // Retrieve the value of 'z041dun'
                var jenissek = item.z040jnssekolah;
               // var parlimen = item.z041parlimen;

               // console.log(dunktrg);
                // Append each item as an option
                $('#sek').append(
                    $('<option>', {
                        value: sekCode, // Use 'id' from response
                        text: jenissek, // Use 'name' from response
                    })
                );

               // $('#parlimen').val(parlimen);
            });
  
            // Refresh the selectpicker to update UI
            $('#sek').selectpicker('refresh');
  
        } else {
            alert('No data found');
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching data:', error);
    },
  });
/* Display pd header */

$.ajax({
    url: 'http://localhost/pascav2/public/getdata', // Replace with your server endpoint
    method: 'GET',
   dataType: 'json', // Expect JSON response
    success: function (data) {
        // Check if the response contains data
        var usr  =  data.username;
  
        $('#session').text(usr);
    }
  });
/* Display pd header */
  $("#kt_quick_panel_toggle").click(function () {
    
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

/*display image upload */

$('#file1').on('change', function (event) {
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            // Display the uploaded image
            $('#previewImage').attr('src', e.target.result).show();
            $('#imageBox').addClass('has-image');
        };

        reader.readAsDataURL(file);
    }
});
/* Display pd apply form */

// $.ajax({
//     url: 'http://localhost/pascav2/public/getkodpenaja',
//     method: 'GET',
//     dataType: 'json',
//     success: function (response) {
//         if (response && response.length > 0) {
//             response.forEach(function (item) {
//                 var tajaCode = item.a010kpenaja;
//                 var tajaktrg = item.a010penaja;
//                 $('#kdtaja').append($('<option>', {
//                     value: tajaCode,
//                     text: tajaktrg,
//                 }));
//             });

//             $('#kdtaja').selectpicker('refresh');        

$.ajax({
    url: 'http://localhost/pascav2/public/displayprofile', // Replace with your server endpoint
    method: 'GET',
   dataType: 'json', // Expect JSON response
    success: function (result) {
        var nokppass  =  result.p00usrid;
        // var statwarga =  result.ktrgwarga;
        var email     =  result.p00emel;
        var nama      =  result.p001nama;
        var dob       =  result.p001tkhlahir;
        var nooku     =  result.p001nooku;
        var almt1     =  result.p001alamat1;
        var almt2     =  result.p001alamat2;
        var almtt1    =  result.p001alamatt1;
        var almtt2    =  result.p001alamatt2;
        var bandar    =  result.p001bandar ;
        var poskod    =  result.p001poskod ;
        var bandart   =  result.p001bandart ;
        var poskodt   =  result.p001poskodt ;
        var notel     =  result.p001notel ;
        var nohp      =  result.p001nohp ;
        var notelt    =  result.p001notelt ;
        var nohpt     =  result.p001nohpt ;
        var faxno     =  result.p001faxno ;
        var offno     =  result.p001offno ;
        var faxnot    =  result.p001faxnot ;
        var offnot    =  result.p001offnot ;
        var image     =  result.p001upgambar ;
        var namauni   =  result.p001unilama ;
        var highcgpa  =  result.p001cgpa ;
        var masteruni  =  result.p001unilama2 ;
        var cgpamaster =  result.p001cgpa2 ;
        var penyelia =  result.p001penyelia ;
        var proposal =  result.p001tajuk ;
        var passport =  result.p001uppassport ;
        var akadtgg =  result.p001uptrans ;
        var upproposal =  result.p001upproposal;
        var upresit =  result.p001upresit;
        var upbi =  result.p001upmuet;
        var namaejen =  result.p001ejenname ;
        var emelejen =  result.p001ejenemail ;
        var almtsemasa =  result.almtsemasa ;
        var negeri =  result.negeri ;
        var resultbi =  result.p001muet ;
        var noregbi = result.p001noreg;
        var tkhexmbi = result.p001tkhexm;
        var doclaluan = result.p001uplaluan;
        var docworkexp = result.p001upworkex;
        var statmohon = result.p001status;
        var statdesc = result.statdesc;
        var amounthouse = result.p001amthouse;
        var program = result.p001kprog;
        var mode = result.desckaedah;
        var method = result.descmode;
        var kwarga = result.desckwarga;
        var negara = result.p001alamatneg;
        var nosurat = result.p001nosrttawar;
        //display skrin accept
      //  $('#labelkdprogrm').text(program);
        $('#labelmodest').text(mode);
        $('#methodst').text(method);
        $('#labelnat').text(kwarga);
        $('#labelnosurat').text(nosurat);
      //  console.log(nosurat);
      //  $('#labelnat').text(result.negara); 
        //+++++++++++++++++
        $("#labeladdcountry").text(negara);
        //++++++++++++++++
        $.ajax({
            url: 'http://localhost/pascav2/public/getkodnegara', // Replace with your server endpoint
            method: 'GET',
            dataType: 'json', // Expect JSON response
            success: function (response) {
                if (response && response.length > 0) {
                    $('#kdnegara').empty();
                    $('#warganeg').empty();
                    $('#kdnegarahome').empty();
                    $('#highunicountry').empty();
                    $('#masterphdcountry').empty();
        
                    var negaraDescription = 'Not Found'; // Default if no match
        
                    response.forEach(function (item) {
                        var option = $('<option>', {
                            value: item.c028kod,
                            text: item.c028keterangan
                        });
        
                        // Append to all dropdowns
                        $('#kdnegara').append(option.clone());
                        $('#warganeg').append(option.clone());
                        $('#kdnegarahome').append(option.clone());
                        $('#highunicountry').append(option.clone());
                        $('#masterphdcountry').append(option);
        
                        // Lookup country description if it matches negeri (country code)
                        if (item.c028kod === negara) {
                            negaraDescription = item.c028keterangan;
                        }
                    });
        
                    // Set description to label
                    $("#labeladdcountry").text(negaraDescription);

                    // Pre-select the user's negeri//
                    $('#kdnegara').val(negara);  // Pre-select for #kdnegeri
                    $('#warganeg').val(negara);  // Pre-select for #kdnegerihome
                    $('#kdnegarahome').val(negara);  // Pre-select for #kdnegerihome
                    $('#highunicountry').val(negara);  // Pre-select for #kdnegerihome
                    $('#masterphdcountry').val(negara);  // Pre-select for #kdnegerihome
        
                    // Refresh the selectpicker to update UI
                    setTimeout(function () {
                    $('#kdnegara').selectpicker('refresh');
                    $('#warganeg').selectpicker('refresh');
                    $('#kdnegarahome').selectpicker('refresh');
                    $('#highunicountry').selectpicker('refresh');
                    $('#masterphdcountry').selectpicker('refresh');
                    },100)
        
                } else {
                   // console.log("fail ret ajax negara");
                    $("#labeladdcountry").text("Negara not found");
                }
            },
            error: function (xhr, status, error) {
               // console.error('Error fetching data:', error);
                $("#labeladdcountry").text("Error fetching negara data");
            }
        });
        //+++++++++++
        $("#labeladdstate").text(negeri);
        // Step 2 - Second AJAX to get full negeri list
        $.ajax({
            url: 'http://localhost/pascav2/public/getkodnegeri',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response && response.length > 0) {
                    // Clear and prepare the dropdowns
                    $('#kdnegeri').empty();
                    $('#kdnegerihome').empty();

                    // Optional: Add placeholder
                    $('#kdnegeri').append('<option value="">-- Select Negeri --</option>');
                    $('#kdnegerihome').append('<option value="">-- Select Negeri --</option>');

                    // Find and display the description based on negeriCode
                    var negeriDescription = "Not Found";

                    // Loop through response and populate dropdowns
                    response.forEach(function(item) {
                        var option = $('<option>', {
                            value: item.a090knegeri,
                            text: item.a090negeri
                        });

                        $('#kdnegeri').append(option.clone());
                        $('#kdnegerihome').append(option);

                        // Match code and get description
                        if (item.a090knegeri === negeri) {
                            negeriDescription = item.a090negeri;
                        }
                    });

                    // Display found negeri description in the label
                    $("#labeladdstate").text(negeriDescription);

                    // Pre-select the user's negeri//
                    $('#kdnegeri').val(negeri);  // Pre-select for #kdnegeri
                    $('#kdnegerihome').val(negeri);  // Pre-select for #kdnegerihome

                    // Refresh selectpickers
                    $('#kdnegeri').selectpicker('refresh');
                    $('#kdnegerihome').selectpicker('refresh');
                } else {
                   // console.log("No negeri data found.");
                    $("#labeladdstate").text("Negeri not found");
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching negeri data:', error);
            }
        });
        //++++++++++

        //++++++++++
       // $("#labeladdnegara").text(p001alamatneg);
        //+++++++++++

         // ret data for lookup kod program

 //$("#kdprg").val(result.p001kprog);
 var retprogram = program;  // Make sure 'program' is set before this

 //console.log("Start loading programs, pre-selecting:", program);
 
 $.ajax({
     type: "GET",
     url: "http://localhost/pascav2/public/getkodprogram",
     success: function(data) {
     //    console.log("Received program data:", data);
 
         var json_data = data;
         var foundProgram = null;
 
         $.each(json_data, function(key, cat) {
             if (cat.p020kprog === retprogram) {
                 foundProgram = cat;
             }
         });
 
         if (foundProgram) {
             var displayText = foundProgram.p020kprog + " - " + foundProgram.p020namaprogbi + " - " + foundProgram.z054bnecdetail;
             $('#labelkdprogrm').text(displayText);
             $('#labelfakulti').text(foundProgram.a019bi);
         } else {
             $('#labelkdprogrm').text("Program not found: " + retprogram);
         }
 
         var select = $("#kdprg").empty(); // Empty the select before adding new options
 
         $.each(json_data, function(key, cat) {
             var option = "<option value='" + cat.p020kprog + "'>" + cat.p020namaprogbi + "-" + cat.z054bnecdetail + "</option>";
 
             if (cat.hasOwnProperty("a019bi")) {
                 var group = cat.a019bi;
                 var optgroup = select.find("optgroup[label='" + group + "']");
                 if (optgroup.length === 0) {
                     select.append("<optgroup label='" + group + "'></optgroup>");
                     optgroup = select.find("optgroup[label='" + group + "']");
                 }
                 optgroup.append(option);
             } else {
                 select.append(option);
             }
         });
 
         // Pre-select
         $('#kdprg').selectpicker('destroy').selectpicker();
        $('#kdprg').selectpicker('val', program); // This should set it again
        $('#kdprg').selectpicker('refresh');
 
        //  if ($("#kdprg option[value='" + program + "']").length === 0) {
        //      console.warn("Program value not found in dropdown:", program);
        //  }
 
      //   $('#kdprg').selectpicker('refresh');
     },
     error: function(xhr, status, error) {
         console.error("Error fetching data: " + error);
     }
 });

        //++++++++++

        //hide n display icon exist upload
        if (passport === '' || passport === null){
            $('#iconpass').removeClass().addClass('fas fa-times-circle text-danger mr-5'); 
            $("#docic").hide();
        }else{
            $('#iconpass').removeClass().addClass('fas fa-check-circle text-success');
            $("#docic").show();
        }
        if (akadtgg === '' || akadtgg === null){
            $('#iconakad').removeClass().addClass('fas fa-times-circle text-danger mr-5'); 
            $("#docaka").hide();
        }else{
            $('#iconakad').removeClass().addClass('fas fa-check-circle text-success');
            $("#docaka").show();
        }
        if (upproposal === '' || upproposal === null){
            $('#iconpro').removeClass().addClass('fas fa-times-circle text-danger mr-5'); 
            $("#docpro").hide();
        }else{
            $('#iconpro').removeClass().addClass('fas fa-check-circle text-success');
            $("#docpro").show();
        }
        if (upbi === '' || upbi === null){
            $('#iconeng').removeClass().addClass('fas fa-times-circle text-danger mr-5'); 
            $("#doceng").hide();
        }else{
            $('#iconeng').removeClass().addClass('fas fa-check-circle text-success');
            $("#doceng").show();
        }
        if (upresit === '' || upresit === null){
            $('#iconresit').removeClass().addClass('fas fa-times-circle text-danger mr-5'); 
            $("#docfee").hide();
        }else{
            $('#iconresit').removeClass().addClass('fas fa-check-circle text-success');
            $("#docfee").show();
        }
        //############
        //change value color button status
        if (statmohon === '' || statmohon === null) {
            $('#stat').removeClass().addClass('label1 label1-info lbl-font');  
        } else if (statmohon === '0') {
            $('#stat').removeClass().addClass('label2 label2-info lbl-font'); 
        }else if (statmohon === '4') {
            $('#stat').removeClass().addClass('label3 label3-info lbl-font'); 
        }

        //hide n display div view surat
        var ststerima = result.p001ststerimatwr;
     //   console.log(ststerima);

        if(ststerima==='1'){
         //   $("#hidebtnoffer").show();
            $("#infoacceptval").show();
            $("#buttonviewsurat").show();
            $("#hidebuttonupdaccept").hide();
        }else if(ststerima==='0'||ststerima===null){
         //   $("#hidebtnoffer").hide();
            $("#infoacceptval").hide();
            $("#buttonviewsurat").hide();
            $("#hidebuttonupdaccept").show();
        }

        var url = 'http://localhost/pascav2/public/uploads/';

        var urldisplaypic;
        var urldisplaypass;
        var urldisplayakadtggi;
        var urldisplayupproposal;
        var urldisplayresit;
        var urldisplayeng;
        var urldisplaydoclaluan;
        var urldisplayworkexp;

        urldisplaypic = 'http://localhost/pascav2/public/uploads/' + image;
        urldisplaypass = url + passport;
        urldisplayakadtggi = url + akadtgg;
        urldisplayupproposal = url + upproposal;
        urldisplayresit = url + upresit;
        urldisplayeng = url + upbi;
        urldisplaydoclaluan = url + doclaluan;
        urldisplayworkexp = url + docworkexp;

        if (image) {
            $('#previewImage').attr('src', urldisplaypic).show();
            $('#previewImage1').attr('src', urldisplaypic).show();
            $('#image-box').addClass('has-image');
        }else {
            // No image found, reset to default state
            $('#previewImage').attr('src', 'http://localhost/pascav2/assets/media/users/blank.png').hide();
            $('#previewImage1').attr('src', 'http://localhost/pascav2/assets/media/users/blank.png').hide();
            $('#image-box').removeClass('has-image');
        }
        
        $('#kppass').val(nokppass);
        $('#labelic').text(nokppass);
        $('#email').val(email);
        $('#labelemel').text(email);
        $('#fullname').val(nama);
        $('#labelnama').text(nama);
        $('#dob').val(dob);
        $('#labeldob').text(dob);
        $('#no_oku').val(nooku);
        $('#corradd').val(almt1);
        $('#corradd1').val(almt2);
        $('#homeadd').val(almtt1);
        $('#homeadd1').val(almtt2);
        $('#postcorradd').val(poskod);
        $('#bndrcorradd').val(bandar);
        $('#posthomeadd').val(poskodt);
        $('#bndrhomeadd').val(bandart);
        $('#notel').val(notel);
        $('#hpno').val(nohp);
        $('#notelhome').val(notelt);
        $('#hpnohome').val(nohpt);
        $('#faxno').val(faxno);
        $('#offno').val(offno);
        // $('#offnohome').val(faxnot);
        $('#faxnohome').val(faxnot);
        $('#highuni').val(namauni);
        $('#highcgpa').val(highcgpa);
        $('#unimasterphd').val(masteruni);
        $('#cgpamasterphd').val(cgpamaster);
        $('#proresearch').val(proposal);
        $("#prosv").val(penyelia);
        $("#namaejen").val(namaejen);
        $("#emailejen").val(emelejen);
        $("#labeladdcurr").text(almtsemasa);
        $("#resultaddbi").val(resultbi);
        $("#registerid").val(noregbi);
        $("#datexm").val(tkhexmbi);
        $("#stat").text(statdesc);
        $("#income").val(amounthouse);

        $("#cpt1 a").attr({
            'href': urldisplaydoclaluan,
            'target': '_blank' // Ensures the link opens in a new tab
        });

        $("#cpt2 a").attr({
            'href': urldisplayworkexp,
            'target': '_blank' // Ensures the link opens in a new tab
        });

//##################
// Define modal-related elements
var modal = document.getElementById('myModal1');
var span = document.getElementsByClassName("close1")[0]; // Close button
var iframe = document.getElementById("content1");

// Handle the "View File" link click event to open the modal
document.querySelectorAll('.view-file').forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default link behavior

        var fileType = link.getAttribute('data-file');
        //var urldisplaypass = urldisplaypass; // Replace with actual passport URL

        if (fileType === 'passport') {
            fileUrl = urldisplaypass;
        }else if (fileType === 'akadtgg') {
            fileUrl = urldisplayakadtggi;
        }else if (fileType === 'proposal') {
            fileUrl = urldisplayupproposal;
        }else if (fileType === 'resit') {
            fileUrl = urldisplayresit;
        }else if (fileType === 'eng') {
            fileUrl = urldisplayeng;
        }
    
    // Set the iframe's source to the passport image URL
    iframe.src = fileUrl;
    
    // Show the modal
    modal.style.display = "block";
    });
});

// Close the modal when the close button is clicked
// span.onclick = function() {
//     modal.style.display = "none";
// }
if (span && modal) { 
    span.onclick = function() {
        modal.style.display = "none";
    };
}

// Close the modal if the user clicks anywhere outside the modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    
//##################
//display value pd select dropdown
        $("#wargast").val(result.p001kwarganegara);
        $('#labelnatstat').text(result.p001kwarganegara);
        $("#warganeg").val(result.p001kwarga);
        $("#stsoku").val(result.p001kcacat);
        $('#labeldisable').text(result.p001kcacat);
        $("#laluan").val(result.p001laluanmohon);
        $("#kdnegeri").val(result.p001knegeri);
        $("#kdnegerihome").val(result.p001knegerit);
        $("#kdnegara").val(result.p001alamatneg);
        $("#kdnegarahome").val(result.p001alamatnegt);
        $("#modest").val(result.p001kaedah);
        $('#labelmodestdy').text(result.p001kaedah);
        $("#typest").val(result.p001modebelajar);
        $('#labeltypestudy').text(result.p001modebelajar);
        $("#highedu").val(result.p001akadtinggi);
        $("#highunicountry").val(result.p001knegaracgpa);
        $("#masterphdcountry").val(result.p001knegaracgpa2);
        $("#exp").val(result.p001bilexp);
        $("#bitype").val(result.p001katbi);
      
      setTimeout(function () {
        //var profileValue = String(result.p001kpenaja).trim();
        var profileValue = result.p001kpenaja ? String(result.p001kpenaja).trim() : "";
        var exists = $("#kdtaja option[value='" + profileValue + "']").length > 0;

        if (exists) {
            $("#kdtaja").val(profileValue).trigger('change');
        } else {
           // console.warn("Value not found in select options, setting to default");
            $("#kdtaja").val("").trigger('change'); // Set to empty instead
        }
        //$("#kdtaja").val(profileValue).trigger('change');
        $('#kdtaja').selectpicker('refresh');
         }, 100);

        var val_oku = result.p001kcacat;
        var val_modest = result.p001kaedah;
        var val_laluan = result.p001laluanmohon;
        var val_bitype = result.p001katbi;
        var val_taja = result.p001kpenaja;
     // alert(val_taja);

       $('#wargast').selectpicker('refresh');
       $('#warganeg').selectpicker('refresh');
       $('#stsoku').selectpicker('refresh');
       $('#laluan').selectpicker('refresh');
       $('#kdnegeri').selectpicker('refresh');
       $('#kdnegerihome').selectpicker('refresh');
       $('#kdnegara').selectpicker('refresh');
       $('#kdnegarahome').selectpicker('refresh');
       $('#modest').selectpicker('refresh');
       $('#typest').selectpicker('refresh');
       $('#kdprg').selectpicker('refresh');
       $('#highedu').selectpicker('refresh');
       $('#highunicountry').selectpicker('refresh');
       $('#masterphdcountry').selectpicker('refresh');
       $('#exp').selectpicker('refresh');
       $('#kdtaja').selectpicker('refresh');
       $('#bitype').selectpicker('refresh');
       
       if(val_bitype!=''){
         $("#hidediveng").show();
       }
//file no oku
       if(val_oku == '12' || val_oku != ''){
        $("#nooku").hide();
        $("#divoku").hide();
       }else{
        $("#nooku").show();
        $("#divoku").show();
       }
//hide doc laluan
if(val_laluan === 'AP' || val_laluan === 'NG'){
    $("#docap").show();
   }else{
    $("#docap").hide();
   }
//mode research
       if(val_modest == '8'){
        $("#hidespc").show();
        $("#hiderse").show();
        $("#hidesv").show();
        $("#hidework").hide();
        }
        else{ 
            $("#hidespc").hide();
            $("#hiderse").hide();
            $("#hidesv").hide();
            $("#hidework").show();
        }
    //field agent
    if(namaejen === null ){
        $("#hideag").hide();
    }else{
        $("#hideag").show();
    }
    // tajaan
    if (val_taja !== null && val_taja !== '') {
        $("#divtypefinance1").show();
        $("#typesponser").show();
        $("#hidetypefinance").show();
    
        $("#house").hide();
        $("#divtypefinance2").hide();
        $("#upload").hide();
        $("#divtypefinance3").hide();
    } else if (amounthouse !== '' && amounthouse !== null) {
        $("#house").show();
        $("#divtypefinance2").show();
        $("#upload").show();
        $("#divtypefinance3").show();
    
        $("#divtypefinance1").hide();
        $("#typesponser").hide();
        $("#hidetypefinance").show();
    } else {
        $("#divtypefinance1").hide();
        $("#divtypefinance2").hide();
        $("#divtypefinance3").hide();
        $("#hidetypefinance").hide();
    }
        
    }//respon
  });

//========
// }
// },
// error: function (xhr, status, error) {
//     console.error('Error fetching data:', error);
// }
// });




});