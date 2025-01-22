'use strict';

$(document).ready(function () {

    function executeSubmitFrm(action){

        if(action =='SubmitConfirm'){

            Swal.fire({
            //   title: 'Anda pasti untuk hantar maklumat ini sekarang?',
              // text: "Aduan anda akan dimajukan kepada pihak Urusetia Helpdesk JPPF untuk perhatian & tindakan selanjutnya.",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya, saya pasti'
            }).then((result) => {
              if (result.isConfirmed) {
              var form = document.getElementById('kt_login_signin_form');
              var formData = new FormData(form);
        
              $.ajax({
                type: "POST",
                url: "http://localhost/pascav2/retlogin/" ,
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
                      var msg_header = "Ralat";
                      var msg = "Sila cuba semula.";
                      var icon_flag = 'error';
                      break;						
                      case 'ok':
                      var msg_header = "Berjaya";
                      var msg = "Rekod telah dihantar.";
                      var icon_flag = 'success';
                      break;
                      default:
                      var msg_header = "Ralat";
                      var msg = "Sila cuba semula.";
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
                      )						
                    }
                  }
                
              });
        
            }
        
            })
        
          //   evt.stopImmediatePropagation(); // to prevent more than once submission
            // 			return false;				
            // 		});
          }

    }

});