var input = document.querySelector('#photo');     //Triggering
		input.addEventListener('change',apercu);         // Function
function apercu(){                    // 
var fileobject = this.files[0];        // Reading
var fileReader = new FileReader();     // File
fileReader.readAsDataURL(fileObject);  //
fileReader.onload = function(){
var result = fileReader.result;                //Updating
var img = document.querySelector('#apercu');  // Preview
img.setAttribute('src',result);                //
}
}