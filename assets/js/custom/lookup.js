$(document).ready(function () {
    /*kod negara */
  $.ajax({
    url: 'http://localhost/pascav2/public/getkodnegara', // Replace with your server endpoint
    method: 'GET',
    dataType: 'json', // Expect JSON response
    success: function (response) {
        // Check if the response contains data
        if (response && response.length > 0) {
            // Iterate through the data
            response.forEach(function (item) {
                // Append each item as an option
                $('#kdnegara').append(
                    $('<option>', {
                        value: item.c028kod, // Use 'id' from response
                        text: item.c028keterangan, // Use 'name' from response
                    })
                );
                //negara warganegara
                $('#warganeg').append(
                  $('<option>', {
                      value: item.c028kod, // Use 'id' from response
                      text: item.c028keterangan, // Use 'name' from response
                  })
              );
              //negara warganegara home
              $('#kdnegarahome').append(
                $('<option>', {
                    value: item.c028kod, // Use 'id' from response
                    text: item.c028keterangan, // Use 'name' from response
                })
            );
            //negara award uni
            $('#highunicountry').append(
                $('<option>', {
                    value: item.c028kod, // Use 'id' from response
                    text: item.c028keterangan, // Use 'name' from response
                })
            );

            //award masterphd country
             $('#masterphdcountry').append(
                $('<option>', {
                    value: item.c028kod, // Use 'id' from response
                    text: item.c028keterangan, // Use 'name' from response
                })
            );

            });

            // Refresh the selectpicker to update UI
            $('#kdnegara').selectpicker('refresh');
            $('#warganeg').selectpicker('refresh');
            $('#kdnegarahome').selectpicker('refresh');
            $('#highunicountry').selectpicker('refresh');
            $('#masterphdcountry').selectpicker('refresh');

        } else {
           // alert('No data found');
            console.log("fail ret ajax negara");
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching data:', error);
    },
});
// /*kod negeri */
$.ajax({
  url: 'http://localhost/pascav2/public/getkodnegeri', // Replace with your server endpoint
  method: 'GET',
  dataType: 'json', // Expect JSON response
  success: function (response) {
      // Check if the response contains data
      if (response && response.length > 0) {
          // Iterate through the data
          response.forEach(function (item) {
              // Append each item as an option
              $('#kdnegeri').append(
                  $('<option>', {
                      value: item.a090knegeri, // Use 'id' from response
                      text: item.a090negeri, // Use 'name' from response
                  })
              );
                 // negeri home
                 $('#kdnegerihome').append(
                  $('<option>', {
                      value: item.a090knegeri, // Use 'id' from response
                      text: item.a090negeri, // Use 'name' from response
                  })
              );
          });

          // Refresh the selectpicker to update UI
          $('#kdnegeri').selectpicker('refresh');
          $('#kdnegerihome').selectpicker('refresh');

      } else {
        //  alert('No data found');
          console.log("fail ret ajax negeri");
      }
  },
  error: function (xhr, status, error) {
      console.error('Error fetching data:', error);
  },
});
// /*kod kecacatan */
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
//   /* kod penaja */
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
  
    
//   // kod dun
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
//     // kod sek
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
// /*kodprogram*/ 
// $.ajax({
//     type: "GET",
//     url: "http://localhost/pascav2/public/getkodprogram",
//     success: function(data) {
//         var json_data = data;
//         var select = $("#kdprg").empty(); // Clear existing options

//         $.each(json_data, function(key, cat) {
//             var option = "<option value='" + cat.p020kprog + "' data-subtext='" + cat.a019bi + "'>" 
//                 + cat.p020namaprogbi + " - " + cat.z054bnecdetail + 
//                 "</option>";

//             if (cat.hasOwnProperty("a019bi")) {
//                 var group = cat.a019bi;
//                 var optgroup = select.find("optgroup[label='" + group + "']");
//                 if (optgroup.length === 0) {
//                     select.append("<optgroup label='" + group + "'></optgroup>");
//                     optgroup = select.find("optgroup[label='" + group + "']");
//                 }
//                 optgroup.append(option);
//             } else {
//                 select.append(option);
//             }
//         });

//         // Enable live search
//         $('#kdprg').attr("data-live-search", "true");

//         // Retrieve existing value (if any)
//         let existingValue = $('#kdprg').data("selected-value"); // Make sure to set this data attribute before AJAX call

//         // Refresh selectpicker and set value if exists
//         $('#kdprg').selectpicker('destroy').selectpicker();

//         if (existingValue) {
//             $('#kdprg').val(existingValue).selectpicker('refresh'); // Set selected value
//         }
//     },
//     error: function(xhr, status, error) {
//         console.error("Error fetching data: " + error);
//     }
// });


});