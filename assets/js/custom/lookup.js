$(document).ready(function () {
    // Fetch and populate 'kod negeri'
    $.ajax({
        url: 'http://localhost/pascav2/public/getkodnegeri', // Replace with your server endpoint
        method: 'GET',
        dataType: 'json', // Expect JSON response
        success: function (response) {
            let $select1 = $('#kdnegeri');
            let $select2 = $('#kdnegerihome');
            let $select3 = $('#birthplace');

            $select1.empty(); // Clear existing options
            $select2.empty();
            $select3.empty();

            if (response && response.length > 0) {
                response.forEach(function (item) {
                    let option = $('<option>', {
                        value: item.a090knegeri,
                        text: item.a090negeri
                    });

                    $select1.append(option);
                    $select2.append(option.clone()); // Clone option for kdnegerihome
                    $select3.append(option.clone()); // Clone option for kdnegerihome
                });

                // Refresh the selectpicker to update UI
                $select1.selectpicker('refresh');
                $select2.selectpicker('refresh');
                $select3.selectpicker('refresh');
            } else {
                console.log("fail ret ajax negeri");
            }
        },
        error: function (xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });

    // Fetch and populate 'kod negara'
    function loadCountries(selectedCountry = "M01", targetSelectors = ['#kdnegara', '#kdnegarahome']) { // Default to Malaysia
       // console.log("Loading countries..."); // Debugging
        $.ajax({
            url: 'http://localhost/pascav2/public/getkodnegara',
            method: 'GET',
            dataType: 'json',
            success: function (response) {
               // console.log("Country Response:", response); // Debugging
                if (response && response.length > 0) {
                    let countryOptions = '';
                    response.forEach(function (item) {
                        if (selectedCountry === "M01" && item.c028keterangan === "MALAYSIA") {
                            countryOptions += `<option value="${item.c028kod}" selected>${item.c028keterangan}</option>`;
                        } 
                        // Add all countries for foreign selections
                        else if (selectedCountry !== "M01") {
                            countryOptions += `<option value="${item.c028kod}">${item.c028keterangan}</option>`;
                        }
                    });

                    $(targetSelectors.join(', '))
                    .empty()
                    .append(countryOptions)
                    .selectpicker('refresh');

                     //   console.log("Countries loaded successfully"); // Debugging
                } else {
                    console.log("fail ret ajax negara");
                }
            },
            error: function (xhr, status, error) {
                console.error('Error fetching data:', error);
            }
        });
    }

    loadCountries();
    loadCountries("X99", ['#warganeg','#highunicountry', '#masterphdcountry']);

    // Event listener: Check if selected negeri is '71', then remove Malaysia from countries
    $('#kdnegeri').change(function () {
        let selectedState = $(this).val();
        
        if (selectedState === '71') {
            // Foreign state → show all countries
            loadCountries("", ['#kdnegara']);
        } else {
            // Local state → only Malaysia
            loadCountries("M01", ['#kdnegara']);
        }
    });
    
    $('#kdnegerihome').change(function () {
        let selectedState = $(this).val();
        
        if (selectedState === '71') {
            loadCountries("", ['#kdnegarahome']);
        } else {
            loadCountries("M01", ['#kdnegarahome']);
        }
    });

    /*kod negara *///
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
// /*kod negeri */
// $.ajax({
//   url: 'http://localhost/pascav2/public/getkodnegeri', // Replace with your server endpoint
//   method: 'GET',
//   dataType: 'json', // Expect JSON response
//   success: function (response) {
//     let $select1 = $('#kdnegeri');
//         $select1.empty(); // Clear existing options
//     let $select2 = $('#kdnegerihome');
//         $select2.empty(); // Clear existing options
//       // Check if the response contains data
//       if (response && response.length > 0) {
//           // Iterate through the data
//           response.forEach(function (item) {
//               // Append each item as an option
//               $select1.append(
//                   $('<option>', {
//                       value: item.a090knegeri, 
//                       text: item.a090negeri, 
//                   })
//               );
//                  // negeri home
//                  $select2.append(
//                   $('<option>', {
//                       value: item.a090knegeri, 
//                       text: item.a090negeri, 
//                   })
//               );
//           });

//           // Refresh the selectpicker to update UI
//           $select1.selectpicker('refresh');
//           $select2.selectpicker('refresh');

//       } else {
//         //  alert('No data found');
//           console.log("fail ret ajax negeri");
//       }
//   },
//   error: function (xhr, status, error) {
//       console.error('Error fetching data:', error);
//   },
// });
// /*kod kecacatan */
$.ajax({
    url: 'http://localhost/pascav2/public/getkodkecacatan', // Replace with your server endpoint
    method: 'GET',
    dataType: 'json', // Expect JSON response
    success: function (response) {
        let $select = $('#stsoku');
        $select.empty(); // Clear existing options
        // Check if the response contains data
        if (response && response.length > 0) {            
            response.forEach(function (item) {
                // Append each item as an option
                $select.append(
                    $('<option>', {
                        value: item.z013akod, // Use 'id' from response
                        text: item.z013abi, // Use 'name' from response
                    })
                );
            });
            
            $select.selectpicker('refresh'); 
            // setTimeout(() => { 
            //     $select.selectpicker('refresh'); 
            // }, 1000);
  
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
                  $('#kdtaja,#tajaan').append(
                      $('<option>', {
                          value: tajaCode,
                          text: tajaktrg, 
                      })
                  );
              });
    
            //  $('#kdtaja').selectpicker('val', response[0].a010kpenaja);
              $('#kdtaja,#tajaan').selectpicker('refresh');

              // Show/hide dlltaja based on selected value
            $('#kdtaja,#tajaan').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
                var selectedValue = $(this).val();
                if (selectedValue === "26") {
                    $('#dlltaja,#dlltaja1').show();
                } else {
                    $('#dlltaja,#dlltaja1').hide();
                }
            });

            // Initially hide the dlltaja input
            $('#dlltaja,#dlltaja1').hide();
    
          } else {
             // alert('No data found');
          }
      },
      error: function (xhr, status, error) {
          console.error('Error fetching data:', error);
      },
    });

//   /* kod layak masuk */
$.ajax({
    url: 'http://localhost/pascav2/public/getkodlayak',
    method: 'GET',
    dataType: 'json',
    success: function (response) {
        if (response && response.length > 0) {
            response.forEach(function (item) {
                var layakCode = String(item.z038kodmohes).trim();//samakan type data
                var layakktrg = item.z038kelayakan;
                $('#lykmsk').append(
                    $('<option>', {
                        value: layakCode,
                        text: layakktrg, 
                    })
                );
            });
  
          //  $('#kdtaja').selectpicker('val', response[0].a010kpenaja);
            $('#lykmsk').selectpicker('refresh');
  
        } else {
           // alert('No data found');
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching data:', error);
    },
  });
  
//   /* kod income */
$.ajax({
    url: 'http://localhost/pascav2/public/getkodincome',
    method: 'GET',
    dataType: 'json',
    success: function (response) {
        if (response && response.length > 0) {
            response.forEach(function (item) {
                var incomeCode = String(item.z039kodmohes).trim();//samakan type data
                var incomektrg = item.z039pendapatan;
                $('#incomekd').append(
                    $('<option>', {
                        value: incomeCode,
                        text: incomektrg, 
                    })
                );
            });
  
          //  $('#kdtaja').selectpicker('val', response[0].a010kpenaja);
            $('#incomekd').selectpicker('refresh');
  
        } else {
           // alert('No data found');
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching data:', error);
    },
  });
    
//   // kod dun
var parlimenMap = {}; // Store DUN-to-Parlimen mapping

$.ajax({
    url: 'http://localhost/pascav2/public/getkoddun',
    method: 'GET',
    dataType: 'json',
    success: function (response) {
        if (response && response.length > 0) {
            var select = $('#dun').empty().append('<option value="">Select DUN</option>'); // Clear existing options
            
            response.forEach(function (item) {
                var dunCode = item.z041kod;   // DUN code
                var dunDesc = item.z041dun;   // DUN code
                var parlimen = item.z041parlimen; // Parliament name

                // Store DUN-to-Parlimen mapping
                parlimenMap[dunCode] = parlimen;

                // Append options to the dropdown
                select.append(
                    $('<option>', {
                        value: dunCode,
                        text: dunDesc // Display DUN code in dropdown
                    })
                );
            });

            // Refresh selectpicker
            $('#dun').selectpicker('refresh');
        } else {
            console.log("Failed to retrieve DUN data");
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching data:', error);
    }
});

// 🔹 Handle DUN selection change
$('#dun').on('change', function () {
    var selectedDun = $(this).val();
    var selectedParlimen = parlimenMap[selectedDun] || 'N/A'; // Get parlimen or default 'N/A'

    $('#labeladdparlimen').text(selectedParlimen); // Display in span
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
//kod bangsa
$.ajax({
    url: 'http://localhost/pascav2/public/getkodbangsa', // Replace with your server endpoint
    method: 'GET',
    dataType: 'json', // Expect JSON response
    success: function (response) {
        // Check if the response contains data
        if (response && response.length > 0) {
            // Iterate through the data
            response.forEach(function (item) {
                var raceCode = item.z018kodbgsa;     
                var racektrg = item.z018bgsa;
                // Append each item as an option
                $('#race').append(
                    $('<option>', {
                        value: raceCode, // Use 'id' from response
                        text: racektrg, // Use 'name' from response
                    })
                );
            });
  
            // Refresh the selectpicker to update UI
            $('#race').selectpicker('refresh');
  
        } else {
            alert('No data found');
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching data:', error);
    },
  });
  //kod religion
$.ajax({
    url: 'http://localhost/pascav2/public/getkodreligion', // Replace with your server endpoint
    method: 'GET',
    dataType: 'json', // Expect JSON response
    success: function (response) {
        // Check if the response contains data
        if (response && response.length > 0) {
            // Iterate through the data
            response.forEach(function (item) {
                var religionCode = item.z016kodmohes;     
                var religionktrg = item.z016nmagamabi;
                // Append each item as an option
                $('#religion').append(
                    $('<option>', {
                        value: religionCode, // Use 'id' from response
                        text: religionktrg, // Use 'name' from response
                    })
                );
            });
  
            // Refresh the selectpicker to update UI
            $('#religion').selectpicker('refresh');
  
        } else {
            alert('No data found');
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching data:', error);
    },
  });
   //kod status khawin
$.ajax({
    url: 'http://localhost/pascav2/public/getkodstakhawin', // Replace with your server endpoint
    method: 'GET',
    dataType: 'json', // Expect JSON response
    success: function (response) {
        // Check if the response contains data
        if (response && response.length > 0) {
            // Iterate through the data
            response.forEach(function (item) {
                var staKhawinCode = item.z017kodmohes;     
                var staKhawinktrg = item.z017statuskhwinbi;
                // Append each item as an option
                $('#marital').append(
                    $('<option>', {
                        value: staKhawinCode, // Use 'id' from response
                        text: staKhawinktrg, // Use 'name' from response
                    })
                );
            });
  
            // Refresh the selectpicker to update UI
            $('#marital').selectpicker('refresh');
  
        } else {
            alert('No data found');
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching data:', error);
    },
  });
     //kod gred spm bibm
$.ajax({
    url: 'http://localhost/pascav2/public/getgredspmbibm', // Replace with your server endpoint
    method: 'GET',
    dataType: 'json', // Expect JSON response
    success: function (response) {
        // Check if the response contains data
        if (response && response.length > 0) {
            // Iterate through the data
            response.forEach(function (item) {
                var gredCode = item.a003agredsubj;     
                var gredktrg = item.a003aktrgpjg;
                // Append each item as an option
                $('#bispm,#bmspm').append(
                    $('<option>', {
                        value: gredCode, // Use 'id' from response
                        text: gredktrg, // Use 'name' from response
                    })
                );
            });
  
            // Refresh the selectpicker to update UI
            $('#bispm,#bmspm').selectpicker('refresh');
  
        } else {
            alert('No data found');
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching data:', error);
    },
  });
  //kod race
// $.ajax({
//     url: 'http://localhost/pascav2/public/getkodrace', // Replace with your server endpoint
//     method: 'GET',
//     dataType: 'json', // Expect JSON response
//     success: function (response) {
//         // Check if the response contains data
//         if (response && response.length > 0) {
//             // Iterate through the data
//             response.forEach(function (item) {
//                 var raceCode = item.z018kodbgsa;     
//                 var racektrg = item.z018bgsa;
//                 // Append each item as an option
//                 $('#race').append(
//                     $('<option>', {
//                         value: raceCode, // Use 'id' from response
//                         text: racektrg, // Use 'name' from response
//                     })
//                 );
//             });
  
//             // Refresh the selectpicker to update UI
//             $('#race').selectpicker('refresh');
  
//         } else {
//             alert('No data found');
//         }
//     },
//     error: function (xhr, status, error) {
//         console.error('Error fetching data:', error);
//     },
//   });
//kod faculty
$.ajax({
    url: 'http://localhost/pascav2/public/getfaculty', // Replace with your server endpoint
    method: 'GET',
    dataType: 'json', // Expect JSON response
    success: function (response) {
        // Check if the response contains data
        if (response && response.length > 0) {
            // Iterate through the data
            response.forEach(function (item) {
                var facCode = item.a019kbhg;     
                var facktrg = item.a019bi;
                // Append each item as an option
                $('#fac').append(
                    $('<option>', {
                        value: facCode, // Use 'id' from response
                        text: facktrg, // Use 'name' from response
                    })
                );
            });
  
            // Refresh the selectpicker to update UI
            $('#fac').selectpicker('refresh');
  
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
//         var select = $("#kdprg").empty(); // Empty the select before adding new options
    
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
//     },
//     error: function(xhr, status, error) {
//         console.error("Error fetching data: " + error);
//     }
// });

});