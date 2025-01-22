/**
 * Create a filereader from input selected files
 * Then do a preview by updating an img source
 * Finally check EXIF orientation drawing it into a canvas
 */

function readURL(input) {
	// If file is loaded, create new FileReader
	  if (input.files && input.files[0]) {
		  
		// Create a FileReader
		var reader = new FileReader();
		// Set onloadend function on reader
		reader.onloadend = function (e) {
			
		  // Update an image tag with loaded image source
		  $('#myImg').attr('src', e.target.result);
		  // Use EXIF library to handle the loaded image exif orientation
		  EXIF.getData(input.files[0], function() {
			  
			// Fetch image tag
			var img = $("#myImg").get(0);
			// Fetch canvas
			var canvas = $("#myCanvas").get(0);
			// run orientation on img in canvas
			orientation(img, canvas);
			fileSelected();
		});
	};
	
	// Trigger reader to read the file input
	reader.readAsDataURL(input.files[0]);
	
  }
}

function readURLMP(input) {
	// If file is loaded, create new FileReader
	  if (input.files && input.files[0]) {
		  
		// Create a FileReader
		var reader = new FileReader();
		// Set onloadend function on reader
		reader.onloadend = function (e) {
			
		  // Update an image tag with loaded image source
		  $('#myImg_mp').attr('src', e.target.result);
		  // Use EXIF library to handle the loaded image exif orientation
		  EXIF.getData(input.files[0], function() {
			  
			// Fetch image tag
			var img = $("#myImg_mp").get(0);
			// Fetch canvas
			var canvas = $("#myCanvas_mp").get(0);
			// run orientation on img in canvas
			orientationMP(img, canvas);
			fileSelectedMP();
		});
	};
	
	// Trigger reader to read the file input
	reader.readAsDataURL(input.files[0]);
	
  }
}

function fileSelected() {

var count = document.getElementById('aduan_img').files.length;

	  document.getElementById('details').innerHTML = "";

	  for (var index = 0; index < count; index ++)

	  {
			 var file = document.getElementById('aduan_img').files[index];

			 var fileSize = 0;

			 if (file.size > 1024 * 1024){

					fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
					
					if(((Math.round(file.size * 100 / (1024 * 1024)) / 100).toString()) > 5){
						 
						$("#aduan_img").val(null);
						
						Swal.fire(
						  "Ralat",
						  "Saiz gambar melebihi had maksima yang dibenarkan sebanyak 5 MB sahaja. Sila muatnaik semula gambar.<br><br>Harap maklum.",
						  "error" 
						)
						
						var canvas = $("#myCanvas").get(0);
						var context = canvas.getContext("2d");
						setTimeout(function(){ 	context.setTransform(1, 0, 0, 1, 0, 0); context.clearRect(0, 0, canvas.width, canvas.height); context.restore(); }, 50);
						
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
				
					$("#aduan_img").val(null);

					Swal.fire(
					  "Ralat",
					  "Hanya format gambar jpg/jpeg sahaja dibenarkan untuk dimuatnaik.<br><br>Harap maklum.",
					  "error" 
					)
						
					var canvas = $("#myCanvas").get(0);
					var context = canvas.getContext("2d");
					setTimeout(function(){ 	context.setTransform(1, 0, 0, 1, 0, 0); context.clearRect(0, 0, canvas.width, canvas.height); context.restore(); }, 50);
										
					return false;
				}	
			 }			 
			 
			 document.getElementById('details').innerHTML += 'Size: ' + fileSize + '<br>Type: ' + file.type;

			 document.getElementById('details').innerHTML += '<p>';
	  }
}
	
function fileSelectedMP() {

var count = document.getElementById('aduan_img_mp').files.length;

	  document.getElementById('details_mp').innerHTML = "";

	  for (var index = 0; index < count; index ++)

	  {
			 var file = document.getElementById('aduan_img_mp').files[index];

			 var fileSize = 0;

			 if (file.size > 1024 * 1024){

					fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
					
					if(((Math.round(file.size * 100 / (1024 * 1024)) / 100).toString()) > 5){
						 
						$("#aduan_img_mp").val(null);
						
						Swal.fire(
						  "Ralat",
						  "Saiz gambar melebihi had maksima yang dibenarkan sebanyak 5 MB sahaja. Sila muatnaik semula gambar.<br><br>Harap maklum.",
						  "error" 
						)
						
						var canvas = $("#myCanvas_mp").get(0);
						var context = canvas.getContext("2d");
						setTimeout(function(){ 	context.setTransform(1, 0, 0, 1, 0, 0); context.clearRect(0, 0, canvas.width, canvas.height); context.restore(); }, 50);
						
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
				
					$("#aduan_img_mp").val(null);

					Swal.fire(
					  "Ralat",
					  "Hanya format gambar jpg/jpeg sahaja dibenarkan untuk dimuatnaik.<br><br>Harap maklum.",
					  "error" 
					)
						
					var canvas = $("#myCanvas_mp").get(0);
					var context = canvas.getContext("2d");
					setTimeout(function(){ 	context.setTransform(1, 0, 0, 1, 0, 0); context.clearRect(0, 0, canvas.width, canvas.height); context.restore(); }, 50);
										
					return false;
				}	
			 }			 
			 
			 document.getElementById('details_mp').innerHTML += 'Size: ' + fileSize + '<br>Type: ' + file.type;

			 document.getElementById('details_mp').innerHTML += '<p>';
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
function orientation(img, canvas) {

	// Set variables
	var ctx = canvas.getContext("2d");
	var exifOrientation = '';
	var width = img.width,
		height = img.height;

	// Check orientation in EXIF metadatas
	
	var input = document.getElementById('aduan_img');
	
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
		case 2:
			ctx.transform(-1, 0, 0, 1, width, 0);
			break;
		case 3:
			ctx.transform(-1, 0, 0, -1, width, height);
			break;
		case 4:
			ctx.transform(1, 0, 0, -1, 0, height);
			break;
		case 5:
			//ctx.transform(0, 1, 1, 0, 0, 0);
			var angles = [0 * Math.PI, 0.5 * Math.PI, Math.PI, 1.5 * Math.PI],
			index = 0;
			
			var angle = angles[index],
			cw = canvas.width * 0.5,
			ch = canvas.height * 0.5;
			ctx.translate(cw, ch);
			ctx.rotate(angle);
			ctx.translate(-width * 0.5, -height * 0.5);					
			break;
		case 6:
			ctx.transform(0, 1, -1, 0, height, 0);
			break;
		case 7:
			ctx.transform(0, -1, -1, 0, height, width);				
			break;
		case 8:
			ctx.transform(0, -1, 1, 0, 0, width);				
			break;
		default:
			ctx.transform(1, 0, 0, 1, 0, 0);
	}

	// Draw img into canvas
	ctx.drawImage(img, 0, 0, width, height);
	
	});
	
}

function orientationMP(img, canvas) {

	// Set variables
	var ctx = canvas.getContext("2d");
	var exifOrientation = '';
	var width = img.width,
		height = img.height;

	// Check orientation in EXIF metadatas
	
	var input = document.getElementById('aduan_img_mp');
	
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
		case 2:
			ctx.transform(-1, 0, 0, 1, width, 0);
			break;
		case 3:
			ctx.transform(-1, 0, 0, -1, width, height);
			break;
		case 4:
			ctx.transform(1, 0, 0, -1, 0, height);
			break;
		case 5:
			//ctx.transform(0, 1, 1, 0, 0, 0);
			var angles = [0 * Math.PI, 0.5 * Math.PI, Math.PI, 1.5 * Math.PI],
			index = 0;
			
			var angle = angles[index],
			cw = canvas.width * 0.5,
			ch = canvas.height * 0.5;
			ctx.translate(cw, ch);
			ctx.rotate(angle);
			ctx.translate(-width * 0.5, -height * 0.5);					
			break;
		case 6:
			ctx.transform(0, 1, -1, 0, height, 0);
			break;
		case 7:
			ctx.transform(0, -1, -1, 0, height, width);				
			break;
		case 8:
			ctx.transform(0, -1, 1, 0, 0, width);				
			break;
		default:
			ctx.transform(1, 0, 0, 1, 0, 0);
	}

	// Draw img into canvas
	ctx.drawImage(img, 0, 0, width, height);
	
	});
	
}