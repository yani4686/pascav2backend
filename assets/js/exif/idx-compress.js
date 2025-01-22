'use strict'

const compress = new Compress()
const myCanvas = document.getElementById('myCanvas')
const details = document.getElementById('details')

const aduan_img = document.getElementById('aduan_img')

if(aduan_img){

aduan_img.addEventListener('change', (evt) => {

  const files = [...evt.target.files]
  compress.compress(files, {
    size: 2, // the max size in MB, defaults to 2MB
    quality: 0.75, // the quality of the image, max is 1,
    maxWidth: 1920, // the max width of the details image, defaults to 1920px
    maxHeight: 1920, // the max height of the details image, defaults to 1920px
    resize: true // defaults to true, set false if you do not want to resize the image width and height
  }).then((images) => {
    //console.log(images)
    const img = images[0]
    // returns an array of compressed images
    myCanvas.src = `${img.prefix}${img.data}`
    //console.log(img)

    const { endSizeInMb, initialSizeInMb, iterations, sizeReducedInPercent, elapsedTimeInSeconds, alt } = img

    details.innerHTML = `<b>Start Size:</b> ${initialSizeInMb} MB <br/><b>End Size:</b> ${endSizeInMb} MB <br/><b>Compression Cycles:</b> ${iterations} <br/><b>Size Reduced:</b> ${sizeReducedInPercent} % <br/><b>File Name:</b> ${alt}`
  })
}, false)

}

