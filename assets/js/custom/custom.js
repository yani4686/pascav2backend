//hide and display based on mode belajar (research or coursework)
//
$("#hidespc, #hiderse, #hidesv, #hidework").hide();

$('#modest').on('change', function () {
    var val_modest = $(this).val() || ""; // Handle null/undefined

    if (val_modest === '8') {
        $("#hidespc, #hiderse, #hidesv").show();
        $("#hidework").hide();
    } else if (val_modest === '') { // If no selection
        $("#hidespc, #hiderse, #hidesv, #hidework").hide();
    } else {
        $("#hidespc, #hiderse, #hidesv").hide();
        $("#hidework").show();
    }
});

$(document).ready(function () {
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

//hide and display based on mode belajar (research or coursework)
// $('#modest').on('change', function () {
//     if ($(this).val() === '8') {
//         $("#hidespc").show();
//         $("#hiderse").show();
//         $("#hidesv").show();
//         $("#hidework").hide();
//     } else { 
//         $("#hidespc").hide();
//         $("#hiderse").hide();
//         $("#hidesv").hide();
//         $("#hidework").show();
//     }
// });

// $("#hidespc").hide();
// $("#hiderse").hide();
// $("#hidesv").hide();
// $("#hidework").hide();

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
		  html: '<b>Local</b> : Please enter name according to IC. [<a href="pascav2/public/assets/doc/GUIDELINE_PASSPORT.pdf.crdownload" autofocus>Click Here</a>]<br><b>International</b> : Please enter name according to Machine Readable Zone (MRZ) name in the international passport.[<a href="pascav2/public/assets/doc/GUIDELINE_PASSPORT.pdf.crdownload" autofocus>Click Here</a>]',
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
          height: 800,
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

    $('#info-mdl-6_2').click(function (e) {
		
		Swal.fire({
		  title: 'English Language Competency Requirements',
		  html: '<b>English competency equivalence score </b> for admission requirements is as follows in picture above',
		  imageUrl: '../pascav2/assets/images/bi_guildelines.jpg',
		  width: 1000,
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

$.ajax({
   // url: 'http://localhost/pascav2/public/displayprofile',
    url: 'http://localhost/pascav2/public/displayprofilep001',
    method: 'GET',
   dataType: 'json', // Expect JSON response
    success: function (result) {
        var nokppass  =  result.p001nokp;
        var email     =  result.p001email;
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
        var image     =  result.p001upgambar ;
        var namauni   =  result.p001unilama ;
        var highcgpa  =  result.p001cgpa ;
        var masteruni   =  result.p001unilama2 ;
        var cgpamaster  =  result.p001cgpa2 ;
        var penyelia    =  result.p001penyelia ;
        var proposal    =  result.p001tajuk ;
        var passport    =  result.p001uppassport ;
        var uptrans     =  result.p001uptrans ;
        var upproposal  =  result.p001upproposal;
        var upresit     =  result.p001upresit;
        var upbi        =  result.p001upmuet;
        var namaejen    =  result.p001ejenname ;
        var emelejen    =  result.p001ejenemail ;
        var resultbi    =  result.p001muet ;
        var noregbi     = result.p001noreg;
        var tkhexmbi    = result.p001tkhexm;
        var doclaluan   = result.p001uplaluan;
        var docworkexp  = result.p001upworkex;
        var statmohon   = result.p001status;
        var statdesc    = result.statdesc;
        var amounthouse = result.p001amthouse;
        var program     = result.p001kprog;
        var ststerima   = result.p001ststerimatwr;
        var val_oku     = result.p001kcacat;
        var val_laluan  = result.p001laluanmohon;
        var val_bitype  = result.p001katbi;
        var val_taja    = result.p001kpenaja;
       // var akadtgg     = result.descakadttg;
       // var bikat       = result.descbi;
        var kampus      = result.p001kkampus;

        function setSelectValue(selectId, value, retries = 10) {
            value = value ? String(value).trim() : "";
            var $select = $(selectId);
        
            function trySet() {
                var exists = $select.find("option[value='" + value + "']").length > 0;
        
                if (exists) {
                    $select.val(value).trigger('change');
                    $select.selectpicker('refresh');
                } else if (retries > 0) {
                    // Try again after short delay
                    setTimeout(() => {
                        retries--;
                        trySet();
                    }, 200); // Wait 200ms and try again
                } else {
                    // Final fallback: set blank
                    $select.val('').trigger('change');
                    $select.selectpicker('refresh');
                    console.warn(`Value "${value}" not found for ${selectId}`);
                }
            }
        
            trySet();
        }
         //+++++++++++display on label/input++++++++++++++++    
         $('#kppass').val(nokppass);
         $('#email').val(email);
         $('#fullname').val(nama);
         $('#dob').val(dob);
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
         $('#faxnohome').val(faxnot);
         $('#highuni').val(namauni);
         $('#highcgpa').val(highcgpa);
         $('#unimasterphd').val(masteruni);
         $('#cgpamasterphd').val(cgpamaster);
         $('#proresearch').val(proposal);
         $("#prosv").val(penyelia);
         $("#namaejen").val(namaejen);
         $("#emailejen").val(emelejen);
         $("#resultaddbi").val(resultbi);
         $("#registerid").val(noregbi);
         $("#datexm").val(tkhexmbi);
         $("#stat").text(statdesc);
         $("#income").val(amounthouse);
         $("#kampus").val(kampus);
        //+++++++++++++display value pd select dropdown+++++++++++++++++++++++++
        setSelectValue("#wargast", result.p001kwarganegara);
        setSelectValue("#warganeg", result.p001kwarga);
        setSelectValue("#stsoku", result.p001kcacat);
        setSelectValue("#laluan", result.p001laluanmohon);
        setSelectValue("#modest", result.p001kaedah);
        setSelectValue("#typest", result.p001modebelajar);
        setSelectValue("#highedu", result.p001akadtinggi);
        setSelectValue("#highunicountry", result.p001knegaracgpa);
        setSelectValue("#masterphdcountry", result.p001knegaracgpa2);
        setSelectValue("#exp", result.p001bilexp);
        setSelectValue("#bitype", result.p001katbi);
        setSelectValue("#kampus", result.p001kkampus);
        setSelectValue("#kdnegeri", result.p001knegeri);
        setSelectValue("#kdnegara", result.p001alamatneg);
        setSelectValue("#kdnegerihome", result.p001knegerit);
        setSelectValue("#kdnegarahome", result.p001alamatnegt);
        setSelectValue("#kdtaja", result.p001kpenaja);
 
         $("#cpt1 a").attr({
             'href': urldisplaydoclaluan,
             'target': '_blank' // Ensures the link opens in a new tab
         });
 
         $("#cpt2 a").attr({
             'href': urldisplayworkexp,
             'target': '_blank' // Ensures the link opens in a new tab
         });
   
   //  setTimeout(function () {
    //  var profileValue = result.p001kpenaja ? String(result.p001kpenaja).trim() : "";
    //  var exists = $("#kdtaja option[value='" + profileValue + "']").length > 0;
 
    //  if (exists) {
    //      $("#kdtaja").val(profileValue).trigger('change');
    //  } else {
    //      $("#kdtaja").val("").trigger('change'); // Set to empty instead
    //  }
    //  $('#kdtaja').selectpicker('refresh');
 //}, 100);
        //+++++++++++resize selectdropwdown++++++++++
        $('#kdprg').selectpicker({
            container: 'body', // Prevents dropdown from being constrained by parent div
            liveSearch: true, // Enables search
            dropupAuto: false, // Prevents dropdown from opening off-screen
        });
        
        // Recalculate position on resize or scroll
        $(window).on('resize scroll', function () {
            $('.bootstrap-select.open').each(function () {
                $(this).find('.dropdown-menu').css({
                    'max-width': $(this).closest('.bootstrap-select').outerWidth() + 'px'
                });
            });
        });

        //++++++++++++++++lookup kod program+++++++++++++++++++++++++++
 $.ajax({
    type: "GET",
    url: "http://localhost/pascav2/public/getkodprogram",
    success: function(data) {
        var json_data = data;
        var select = $("#kdprg").empty(); 
    
        $.each(json_data, function(key, cat) {
            var option = "<option value='" + cat.p020kprog + "' data-subtext='" + cat.a019bi + "'>" 
                + cat.p020namaprogbi + " - " + cat.z054bnecdetail + 
                "</option>";

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

        // Enable auto-suggestion
        $('#kdprg').attr("data-live-search", "true");

        // Pre-select and refresh selectpicker
        $('#kdprg').selectpicker('destroy').selectpicker();
        $('#kdprg').selectpicker('val', program); 
        $('#kdprg').selectpicker('refresh');
    },
    error: function(xhr, status, error) {
        console.error("Error fetching data: " + error);
    }
});
       
//++++++++++hide n display icon exist upload++++++++++++++++++++++++++++
        if (passport === '' || passport === null){
            $('#iconpass').removeClass().addClass('fas fa-times-circle text-danger mr-5'); 
            $("#docic").hide();
        }else{
            $('#iconpass').removeClass().addClass('fas fa-check-circle text-success');
            $("#docic").show();
        }
        if (uptrans === '' || uptrans === null){
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
        //+++++++++++++change value color button status+++++++++++++++++
        if (statmohon === '' || statmohon === null) {
            $('#stat').removeClass().addClass('label1 label1-info lbl-font');  
        } else if (statmohon === '0') {
            $('#stat').removeClass().addClass('label2 label2-info lbl-font'); 
        }else if (statmohon === '4') {
            $('#stat').removeClass().addClass('label3 label3-info lbl-font'); 
        }

        //+++++++++++++hide button save if status=>0+++++++++++++++++
        if (statmohon === '' || statmohon === null) {
            $('#btnLastSubmit').show();
            $('#btnstep1sn').show();
            $('#btnstep1sv').show();
            $('#btnstep2sn').show();
            $('#btnstep2sv').show();
            $('#btnstep3sn').show();
            $('#btnstep3sv').show();
            $('#btnstep4sn').show();
            $('#btnstep4sv').show();
        }else{
            $('#btnLastSubmit').hide();
            $('#btnstep1sn').hide();
            $('#btnstep1sv').hide();
            $('#btnstep2sn').hide();
            $('#btnstep2sv').hide();
            $('#btnstep3sn').hide();
            $('#btnstep3sv').hide();
            $('#btnstep4sn').hide();
            $('#btnstep4sv').hide();
        }
        //++++++++++++++hide n display div view surat++++++++++++++++++++++
        if(ststerima==='1'){
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
        urldisplayakadtggi = url + uptrans;
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
   
//++++++++++preview doc attch+++++++++++++++++++
// Define modal-related elements
var modal = document.getElementById('myModal1');
var span = document.getElementsByClassName("close1")[0]; // Close button
var iframe = document.getElementById("content1");

// Handle the "View File" link click event to open the modal
document.querySelectorAll('.view-file').forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault();

        var fileType = link.getAttribute('data-file');

        if (fileType === 'passport') {
            fileUrl = urldisplaypass;
        }else if (fileType === 'upakadtgg') {
            fileUrl = urldisplayakadtggi;
        }else if (fileType === 'proposal') {
            fileUrl = urldisplayupproposal;
        }else if (fileType === 'resit') {
            fileUrl = urldisplayresit;
        }else if (fileType === 'eng') {
            fileUrl = urldisplayeng;
        }
    
    // Set the iframe's source to the passport image URL
    //iframe.src = fileUrl;
    // ✅ Force-refresh by appending a timestamp
    iframe.src = fileUrl + "?t=" + new Date().getTime();
    
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

//+++++++++++++++hidendisplay jenis bi+++++++++++++++++++
       if(val_bitype!=''){
         $("#hidediveng").show();
       }
//+++++++++++++++hidendisplay no oku+++++++++++++++++++
       if(val_oku == '12' || val_oku != ''){
        $("#nooku").hide();
        $("#divoku").hide();
       }else{
        $("#nooku").show();
        $("#divoku").show();
       }
//++++++++++++++++++++hidendisplay docup laluan++++++++++++++
if(val_laluan === 'AP' || val_laluan === 'NG'){
    $("#docap").show();
   }else{
    $("#docap").hide();
   }
//++++++++++hidendisplaymode research+++++++++++++
var val_modestget = result.p001kaedah || "";
if (val_modestget === '8') {
    $("#hidespc").show();
    $("#hiderse").show();
    $("#hidesv").show();
    $("#hidework").hide();
} else if (val_modestget === '7'|| val_modestget === '9') {
    $("#hidespc").hide();
    $("#hiderse").hide();
    $("#hidesv").hide();
    $("#hidework").show();
}
else {
    $("#hidespc").hide();
    $("#hiderse").hide();
    $("#hidesv").hide();
    $("#hidework").hide();
}
    //+++++hidendisplayfield agent++++++++++++++++++++++++
    if(namaejen === null ){
        $("#hideag").hide();
    }else{
        $("#hideag").show();
    }
    //+++++++++++hidendisplaytajaan+++++++++++++++++++++++++++
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

  });//ajax displayprofile

  /* Display pd acceptance & summary form */  
  $.ajax({
     url: 'http://localhost/pascav2/public/getinfomohon',
     method: 'GET',
    dataType: 'json', // Expect JSON response
     success: function (result) {
        var nokppass  =  result.p001nokp;//result.p00usrid;
        var email     =  result.p001email;//result.p00emel;
        var nama      =  result.p001nama;
        var dob       =  result.p001tkhlahir;
        var nohp      =  result.p001nohp ;
        var namauni   =  result.p001unilama ;
        var highcgpa  =  result.p001cgpa ;
        var tkhstatus   =  result.p001tkhstatus ;
        var almtsemasa  =  result.almtsemasa ;
        var almttetap   =  result.almttetap;
        var almttetap1  = result.p001alamatt1;
        var postcodet    = result.p001poskodt;
        var negeri      =  result.p001knegeri ;
        var negerittp   = result.p001knegerit
        var resultbi    =  result.p001muet ;
        var noregbi     = result.p001noreg;
        var tkhexmbi    = result.p001tkhexm;
        var amounthouse  = result.p001amthouse;
        var mode         = result.desckaedah;
        var method       = result.descmode;
        var kwarga       = result.desckwarga;
        var negara       = result.p001alamatneg;
        var negaratetap  = result.p001alamatnegt;
        var nosurat      = result.p001nosrttawar;
        var modifynoSurat = nosurat.replace(/_/g, '/');
        var val_oku      = result.p001kcacat;
        var akadtgg      = result.descakadttg;
        var bikat        = result.descbi;
        var kdprogram    = result.p001kprog;
        var negAwarding  = result.p001knegaracgpa;  
        var negAwarding2 = result.p001knegaracgpa2;
        var tmptlahir    = result.p001knlahir;  
        var race         = result.p001kkaum;
        var gender       = result.p001kjantina;
        var religion     = result.p001kagama;
        var maritalst    = result.p001kkahwin;
        var dun          = result.p001kdun;
        var sek          = result.p001sekmen;
        var lykmasuk     = result.p001lykmsk;
        var bispm        = result.p001bispm;
        var bmspm        = result.p001bmspm;
        var pndaptn      = result.p001kdapat;
      
        //ret n display value selectdropdown
        function setSelectValueinfo(selectId, value, retries = 10) {
            value = value ? String(value).trim() : "";
            var $select = $(selectId);
        
            function trySet() {
                var exists = $select.find("option[value='" + value + "']").length > 0;
            
                if (exists) {
                    $select.val(value).trigger('change');
                    $select.selectpicker('refresh');
                } else if (retries > 0) {
                    // Try again after short delay
                    setTimeout(() => {
                        retries--;
                        trySet();
                    }, 200); // Wait 200ms and try again
                } else {
                    // Final fallback: set blank
                    $select.val('').trigger('change');
                    $select.selectpicker('refresh');
                    console.warn(`Value "${value}" not found for ${selectId}`);
                }
            }
        
            trySet();
        }

         //+++++++++++++display value pd select dropdown+++++++++++++++++++++++++
         setSelectValueinfo("#warganegsta", result.p001kwarganegara);
         setSelectValueinfo("#tajaan", result.p001kpenaja);
         setSelectValueinfo("#birthplace", tmptlahir);
         setSelectValueinfo("#race", race);
         setSelectValueinfo("#gender", gender);
         setSelectValueinfo("#religion", religion);
         setSelectValueinfo("#marital", maritalst);
         setSelectValueinfo("#dun", dun);
         setSelectValueinfo("#sek", sek);
         setSelectValueinfo("#lykmsk", lykmasuk);
         setSelectValueinfo("#bispm", bispm);
         setSelectValueinfo("#bmspm", bmspm);
         setSelectValueinfo("#incomekd", pndaptn);

        $('#labeldob').text(dob);
        $('#labelnama').text(nama);
        $('#labelemel').text(email);
        $('#labelic').text(nokppass);
        $('#labelmodest').text(mode);
        $('#methodst').text(method);
        $('#labelnat').text(kwarga);
        $('#labelnosurat').text(modifynoSurat);
        $('#tkhstatus').text(tkhstatus);
        $('#labeladdhp').text(nohp);
        $('#mobilenoupd').val(nohp);
        $('#labelnatstat').text(kwarga);
        $('#labelmodestdy').text(mode);
        $('#labeltypestudy').text(method);
        $('#labeltypestudyhigh').text(akadtgg);
        $('#labelawarduni').text(namauni);
        $('#labelcgpab').text(highcgpa);
        $("#labeladdcurr").text(almtsemasa);
        $("#labeladdtetap").text(almttetap);
        $("#labelbi").text(bikat);
        $("#labelresultbi").text(resultbi);
        $("#labelregbi").text(noregbi);
        $("#labeldatexmbi").text(tkhexmbi);
        $("#labelagentname").text();
        $("#labelagentemail").text();
        $("#labelincome").text(amounthouse);
        $("#postcodehomeadd").val(postcodet);
        $("#labeladdtetap").val(almttetap1);


         //++++++++++++++++lookup kod program+++++++++++++++++++++++++++
 var retprogram = kdprogram;
 $.ajax({
    type: "GET",
    url: "http://localhost/pascav2/public/getkodprogram",
    success: function(data) {
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
            $('#labelkdprogram').text(displayText);
            $('#labelfakulti').text(foundProgram.a019bi);
            $('#labelfaculty').text(foundProgram.a019bi);
        } else {
            $('#labelkdprogrm').text("Program not found: " + retprogram);
        }
    },
    error: function(xhr, status, error) {
        console.error("Error fetching data: " + error);
    }
});

        //+++++++++display on label lookup negara++++++++++++++++
var descnegera = negara;
var descnegarattp = negaratetap
var selectedText2,selectedText3,selectedText4;
$.ajax({
    url: "http://localhost/pascav2/public/getkodnegara", 
    type: "GET",
    dataType: "json",
    success: function (data) {

        let selectedText = ""; // Define before using

        // Loop through the options to find the matching text
        $.each(data, function (index, item) {
            if (item.c028kod == descnegera) { // Use correct property names
                selectedText = item.c028keterangan; // Get the description
            }
            if (item.c028kod == descnegarattp) { // Use correct property names
                selectedText2 = item.c028keterangan; // Get the description
            }
            if (item.c028kod == negAwarding) { // Use correct property names
                selectedText3 = item.c028keterangan; // Get the description
            }
            if (item.c028kod == negAwarding2) { // Use correct property names
                selectedText4 = item.c028keterangan; // Get the description
            }
        });
        // Display the description in #labeldisable
        $("#labeladdcountry").text(selectedText);
        $("#labeladdcountryttp").text(selectedText2);
        $("#labelawardunihigh").text(selectedText3);
        $("#labelawarduni").text(selectedText4);
    },
    error: function (xhr, status, error) {
        console.error("AJAX Error:", error);
    }
});

//+++++++++display on label lookup tajaan++++++++++++++++
var desctaja = result.p001kpenaja;
$.ajax({
    url: "http://localhost/pascav2/public/getkodpenaja", 
    type: "GET",
    dataType: "json",
    success: function (data) {

        let selectedText = ""; // Define before using

        // Loop through the options to find the matching text
        $.each(data, function (index, item) {
            if (String(item.a010kpenaja).trim() === String(desctaja).trim()) { // Ensure proper matching
                selectedText = item.a010penaja; // Get the description
            }
        });

        // Display the description in #labeltaja
        $('#labeltaja').text(selectedText);
    },
    error: function (xhr, status, error) {
        console.error("AJAX Error:", error);
    }
});
//+++++++++display on label lookup negeri++++++++++++++++
var descnegeri = negeri;
var descnegerittp = negerittp;
var selectedText1;
$.ajax({
    url: "http://localhost/pascav2/public/getkodnegeri", 
    type: "GET",
    dataType: "json",
    success: function (data) {

        let selectedText = ""; // Define before using

        // Loop through the options to find the matching text
        $.each(data, function (index, item) {
            if (item.a090knegeri == descnegeri) { // Use correct property names
                selectedText = item.a090negeri; // Get the description
            }
            if (item.a090knegeri == descnegerittp) { // Use correct property names
                selectedText1 = item.a090negeri; // Get the description
            }
        });

        // Display the description in #labeldisable
        $("#labeladdstate").text(selectedText);
        $("#labeladdstatettp").text(selectedText1);
    },
    error: function (xhr, status, error) {
        console.error("AJAX Error:", error);
    }
});
//+++++++++display on label lookup oku++++++++++++++++
var descoku = val_oku || "default_value";
 
$.ajax({
    url: "http://localhost/pascav2/public/getkodkecacatan", 
    type: "GET",
    dataType: "json",
    success: function (data) {
        if (!descoku) {
            console.error("descoku is not initialized properly.");
            return;
        }

        let selectedText = ""; // Define before using

        // Loop through the options to find the matching text
        $.each(data, function (index, item) {
            if (item.z013akod == descoku) { // Use correct property names
                selectedText = item.z013abi; // Get the description
            }
        });

        // Display the description in #labeldisable
        $("#labeldisable").text(selectedText);
    },
    error: function (xhr, status, error) {
        console.error("AJAX Error:", error);
    }
});
     }//respon
});//ajax

//for value no only
$('#mobilenoupd').keyup(function (){
    this.value = this.value.replace(/[^0-9\.]/g,'');
   });

  //print pdf using window print
$(".printPageIcon").click(function () {
    const { jsPDF } = window.jspdf; 
    let doc = new jsPDF("p", "mm", "a4"); // Portrait mode, millimeters, A4 size

    let element = document.getElementById("idFrmSummary"); // Target the specific div

    html2canvas(element, {
        scale: 2, // Increase resolution for better quality
        useCORS: true // Ensure external images load properly
    }).then(canvas => {
        let imgData = canvas.toDataURL("image/png");
        let imgWidth = 210; // A4 width in mm
        let imgHeight = (canvas.height * imgWidth) / canvas.width;

        doc.addImage(imgData, "PNG", 0, 0, imgWidth, imgHeight);
        doc.save("Summary_Application.pdf"); // Save the PDF
    });
});



});