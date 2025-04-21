'use strict';

$(document).ready(function () {

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
       var tkhstatus   =  result.p001tkhstatus ;
       var almttetap1  = result.p001alamatt1;
       var postcodet    = result.p001poskodt;
       var negeri      =  result.p001knegeri ;
       var negerittp   = result.p001knegerit
       var negara       = result.p001alamatneg;
       var negaratetap  = result.p001alamatnegt;
       var nosurat      = result.p001nosrttawar;
       var val_oku      = result.p001kcacat;
       var kdprogram    = result.p001kprog;
       var negAwarding  = result.p001knegaracgpa;  
       var negAwarding2 = result.p001knegaracgpa2;
       var tmptlahir    = result.p001knlahir;  
       var race         = result.p001kkaum;
       var gender       = result.p001kjantina;
       var religion     = result.p001kagama;
       var maritalst    = result.p001kkahwin;
       var dun          = result.p001kdun;
     
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

       $('#labeldob').text(dob);
       $('#labelnama').text(nama);
       $('#labelemel').text(email);
       $('#labelic').text(nokppass);
       $('#labelnosurat').text(nosurat);
       $('#tkhstatus').text(tkhstatus);
       $('#mobilenoupd').val(nohp);
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

});