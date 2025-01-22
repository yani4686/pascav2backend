/**
 * Create a filereader from input selected files
 * Then do a preview by updating an img source
 * Finally check EXIF orientation drawing it into a canvas
 */

function readURL(input,myimg,mycanvas,details) {
	// If file is loaded, create new FileReader
	  if (input.files && input.files[0]) {

		// Create a FileReader
		var reader = new FileReader();
		// Set onloadend function on reader
		reader.onloadend = function (e) {
			
		  // Update an image tag with loaded image source
		  $('#'+myimg).attr('src', e.target.result);
		  // Use EXIF library to handle the loaded image exif orientation
		  EXIF.getData(input.files[0], function() {
			  
			// Fetch image tag
			var img = $('#'+myimg).get(0);
			// Fetch canvas
			var canvas = $('#'+mycanvas).get(0);
			// run orientation on img in canvas
			orientation(img, canvas, input);
			fileSelected(input,myimg,mycanvas,details);
		});
	};
	
	// Trigger reader to read the file input
	reader.readAsDataURL(input.files[0]);
	
  }
}

function fileSelected(input,myimg,mycanvas,details) {

var count = input.files.length;

	  $('#'+details).innerHTML = "";

	  for (var index = 0; index < count; index ++) {
			 var file = input.files[index];

			 var fileSize = 0;

			 if (file.size > 1024 * 1024){

					fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
					
					if(((Math.round(file.size * 100 / (1024 * 1024)) / 100).toString()) > 20){
						 
						$('#'+input.id).val(null);
						
						Swal.fire(
						  "Ralat",
						  "Saiz gambar terlalu besar melebihi 20 MB. Sila muatnaik semula gambar.<br><br>Harap maklum.",
						  "error" 
						)
						
						var canvas = $('#'+mycanvas).get(0);
						var context = canvas.getContext("2d");
						setTimeout(function(){ 	context.setTransform(1, 0, 0, 1, 0, 0); context.clearRect(0, 0, canvas.width, canvas.height); context.restore(); }, 50);

						$('#'+input.id).next('.custom-file-label').html('');					
						$('#'+details).html('');
					
						return false;
					}
			 }
			 else{

					fileSize = (Math.round(file.size * 100 / 1024) / 100).toString() + 'KB';					
			 }
			 
			 if(file.type){

				var validExtensions = ['jpeg', 'jpg'];
				var fileName = file.type;
				var fileNameExt = fileName.substr(fileName.lastIndexOf('/') + 1);
				if ($.inArray(fileNameExt.toLowerCase(), validExtensions) == -1){ 
				
					$('#'+input.id).val(null);

					Swal.fire(
					  "Ralat",
					  "Hanya format gambar jpg/jpeg sahaja dibenarkan untuk dimuatnaik.<br><br>Harap maklum.",
					  "error" 
					)
						
					var canvas = $('#'+mycanvas).get(0);
					var context = canvas.getContext("2d");
					setTimeout(function(){ 	context.setTransform(1, 0, 0, 1, 0, 0); context.clearRect(0, 0, canvas.width, canvas.height); context.restore(); $('#'+myimg).attr('src', ''); }, 500);
						
					$('#'+input.id).next('.custom-file-label').html('');					
					$('#'+details).html('');
					
					return false;
				}	
			 }			 
			 
			 $('#'+details).html('Type: ' + file.type);

			 //$('#'+details).innerHTML += '<p>';
	  }
}
	  
function getOrientation(file, callback) {
    var reader = new FileReader();
    reader.onload = function(e) {

        var view = new DataView(e.target.result);
        if (view.getUint16(0, false) != 0xFFD8)
        {
            return callback(-2);
        }
        var length = view.byteLength, offset = 2;
        while (offset < length) 
        {
            if (view.getUint16(offset+2, false) <= 8) return callback(-1);
            var marker = view.getUint16(offset, false);
            offset += 2;
            if (marker == 0xFFE1) 
            {
                if (view.getUint32(offset += 2, false) != 0x45786966) 
                {
                    return callback(-1);
                }

                var little = view.getUint16(offset += 6, false) == 0x4949;
                offset += view.getUint32(offset + 4, little);
                var tags = view.getUint16(offset, little);
                offset += 2;
                for (var i = 0; i < tags; i++)
                {
                    if (view.getUint16(offset + (i * 12), little) == 0x0112)
                    {
                        return callback(view.getUint16(offset + (i * 12) + 8, little));
                    }
                }
            }
            else if ((marker & 0xFF00) != 0xFF00)
            {
                break;
            }
            else
            { 
                offset += view.getUint16(offset, false);
            }
        }
        return callback(-1);
    };
    reader.readAsArrayBuffer(file);
}

// Function to check orientation of image from EXIF metadatas and draw canvas
function orientation(img, canvas, input) {

	// Set variables
	var ctx = canvas.getContext("2d");
	var exifOrientation = '';
	var width = img.width,
		height = img.height;

	// Check orientation in EXIF metadatas
	
	getOrientation(input.files[0], function(exifOrientation) {
	
	
	// set proper canvas dimensions before transform & export
	if (jQuery.inArray(exifOrientation, [5, 6, 7, 8]) > -1) {
		
		canvas.width = height;
		canvas.height = width;
	} else {
		canvas.width = width;
		canvas.height = height;
	}

	// transform context before drawing image
	switch (exifOrientation) {
		
	  //console.log(exifOrientation);

      case 2:
		console.log('2');
        // Horizontal flip
        ctx.translate(width, 0);
        ctx.scale(-1, 1);
        break;
      case 3:
	  console.log('3');
        // 180° Rotate CCW
        ctx.translate(width, height);
        ctx.rotate(Math.PI);
        break;
      case 4:
	  console.log('4');
        // Vertical flip
        ctx.translate(0, height);
        ctx.scale(1, -1);
        break;
      case 5:
	  console.log('5');
        // Vertical flip + 90° Rotate CW
        ctx.rotate(0.5 * Math.PI);
        ctx.scale(1, -1);
        break;
      case 6:
	  console.log('6');
        // 90° Rotate CW
			var angles = [0 * Math.PI, 0.5 * Math.PI, Math.PI, 1.5 * Math.PI, 2 * Math.PI],
			index = 3;
			var angle = angles[index],
			cw = canvas.width * 0.5,
			ch = canvas.height * 0.5;
			ctx.translate(cw, ch);
			ctx.rotate(angle);
			ctx.translate(-width * 0.5, -height * 0.5);			
        break;
      case 7:
	  console.log('7');
        // Horizontal flip + 90° Rotate CW
        ctx.rotate(0.5 * Math.PI);
        ctx.translate(width, -height);
        ctx.scale(-1, 1);
        break;
      case 8:
	  console.log('8');
        // 90° Rotate CCW
			var angles = [0 * Math.PI, 0.5 * Math.PI, Math.PI, 1.5 * Math.PI],
			index = 1;
			var angle = angles[index],
			cw = canvas.width * 0.5,
			ch = canvas.height * 0.5;
			ctx.translate(cw, ch);
			ctx.rotate(angle);
			ctx.translate(-width * 0.5, -height * 0.5);	
        break;
	}

	// Draw img into canvas
	ctx.drawImage(img, 0, 0, width, height);
	
	});
	
}