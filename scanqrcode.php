
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <script src="https://unpkg.com/html5-qrcode"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jsQR.js"></script>
<style>
            :root {
  --background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f);

 
}
  .button:hover {
  background-color: #2EE59D;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
 
}      
       .button {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 10px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
margin-bottom: 10px;
  }  
    body{
        margin: 0px;
        padding: 0px;
          align-items: center;
  display: flex;
  justify-content: center;
  height: 100%;
  width: 100%;
         background: var(--background-gradient);
    }    
    .loginform{
       background-color: white;
       width:300px;
padding-top: 20px;
       
        border-radius: 20px;
        box-shadow: 20px 20px black;
        font-family: "segoe ui";
        color: 525252;
        padding-bottom: 20px;
    }
  
  
    button {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 10px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
margin-bottom: 10px;
  }
    button:hover {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 10px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
margin-bottom: 10px;
        background-color: aqua;
  }
           .camera-container{
            
            width: 50%;
       
            margin-right: auto;
            margin-left: auto;
            border-radius: 25px;
            margin-top: 30px;
            background-color: white;
            
            height:482;
        }
        video{
            border-radius: 25px;
            width: 100%;
        }
        .fa-camera{
           font-size:48px;
            color:darkred; 
            margin: 1rem;
            background-color: white;
            padding: 1rem;
            border-radius: 50%;
            
            
        }
                .fa-camera:hover{
           font-size:48px;
            color:indianred; 
                    cursor: pointer;
            margin: 1rem;
            background-color: white;
            padding: 1rem;
            border-radius: 50%;
            
            
        }
        body{
            
            font-family: 'Open Sans', sans-serif;
        }
        h3{
            
                color: white;
    font-size: 30px;
    line-height: 0.1;
    letter-spacing: 0.045em;
    font-weight: 100;
}
        
    </style>    
</head>
<body onload="init();">
    <div class="loginform">
    <div class="camera-container">

<video id="video" width="100%"   autoplay></video>
        <a href="https://localhost/srmcanteen/scanqrcode.php/?psd=srivat2001&userid=srivat@2001&id=q4wvneWCbE2D79ziR1qdWejpplustUiiFWMIbgSWPZQx6CCnz7leftslashgVzI5HgrxlwEwEFOtxqb8WmXUs4wdt4skdyFXzn63bpluseLplusb2GBCy5UQvOYequPskBrz9crUZ8oqOZYoy">Test</a>
    </div>
   <i  class="fa fa-camera" style=""></i>
    </div>
</body>
<script >

  const constraints = {
  video: {

    facingMode: "environment"
  },
};
  
   navigator.mediaDevices.enumerateDevices()
.then(function(devices) {
  devices.forEach(function(device) {
    console.log(device.kind + ": " + device.label +
                " id = " + device.deviceId);
  });
})
.catch(function(err) {
  console.log(err.name + ": " + err.message);
});
    let camera_button = document.getElementsByClassName("fa fa-camera")[0];
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
camera_button.addEventListener('click', async function() {
   	let stream = await navigator.mediaDevices.getUserMedia(constraints);
	video.srcObject = stream;
    
});
     /*
             window.addEventListener("DOMContentLoaded", function() {
    const constraints = {
 "video": {
   "facingMode": 
      { "ideal": "environment" }
  }
};

const stream = navigator.mediaDevices.getUserMedia(constraints);
 var video = document.getElementById('video');
video.srcObject = stream;
video.play();
    });



<button onclick="start()">Start!</button>
<button onclick="snap()">Snap!</button><div id="div"></div>
<video id="video" width="160" height="120" autoplay></video>
<canvas id="preview" width="160" height="120"></canvas>
        <canvas id="canvas" width="100" height="100"></canvas>
            <div>
        <video width="100" height="100" id="vid"></video>
      </div>
      <br />
  <input type="file" accept="image/*;capture=camera">
      <button id="but" autoplay>
        Open WebCam
      </button>
      
      
      
     document.addEventListener("DOMContentLoaded", () => {
        var but = document.getElementById("but");
        var video = document.getElementById("vid");
        var mediaDevices = navigator.mediaDevices;
        vid.muted = true;
        but.addEventListener("click", () => {
  
          // Accessing the user camera and video.
          mediaDevices
            .getUserMedia({
              video: true,
              audio: true,
            })
            
            
            
            .then((stream) => {
  
              // Changing the source of video to current stream.
              video.srcObject = stream;
              video.addEventListener("loadedmetadata", () => {
                video.play();
              });
            })
            .catch(alert);
        });
      });
    
    
   

    
		// Put event listeners into place
		window.addEventListener("DOMContentLoaded", function() {
			// Grab elements, create settings, etc.
            var canvas = document.getElementById('canvas');
            var context = canvas.getContext('2d');
            var video = document.getElementById('video');
            var mediaConfig =  { video: true };
            var errBack = function(e) {
            	console.log('An error has occurred!', e)
            };

			// Put video listeners into place
            if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia(mediaConfig).then(function(stream) {
					//video.src = window.URL.createObjectURL(stream);
					video.srcObject = stream;
                    video.play();
                });
            }

     
            else if(navigator.getUserMedia) { // Standard
				navigator.getUserMedia(mediaConfig, function(stream) {
					video.src = stream;
					video.play();
				}, errBack);
			} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
				navigator.webkitGetUserMedia(mediaConfig, function(stream){
					video.src = window.webkitURL.createObjectURL(stream);
					video.play();
				}, errBack);
			} else if(navigator.mozGetUserMedia) { // Mozilla-prefixed
				navigator.mozGetUserMedia(mediaConfig, function(stream){
					video.src = window.URL.createObjectURL(stream);
					video.play();
				}, errBack);
			}

			// Trigger photo take
			document.getElementById('snap').addEventListener('click', function() {
				context.drawImage(video, 0, 0, 640, 480);
			});
		}, false);

	
var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        //video.src = window.URL.createObjectURL(stream);
        video.srcObject = stream;
        video.play();
    });
}

var canvas = document.createElement("canvas");
canvas.width = 640;
canvas.height = 480;

var snap = () => {
  canvas.getContext('2d').drawImage(video, 0, 0, 640, 480);
  preview.getContext('2d').drawImage(canvas, 0, 0, 160, 120);
}
var intervalId = window.setInterval(function(){
   canvas.getContext('2d').drawImage(video, 0, 0, 640, 480);
  preview.getContext('2d').drawImage(canvas, 0, 0, 160, 120);
 //   console.log(canvas.toDataURL('image/jpeg', 1.0));
    var URI =canvas.toDataURL('image/jpeg', 1.0);
convertURIToImageData(URI).then(function(imageData) {
 console.log(imageData);
 const code = jsQR(imageData.data, imageData.width, imageData.height);

if (code) {
  console.log("Found QR code", code.data);
}
});
}, 10);
var log = msg => div.innerHTML += "<br>" + msg;
function convertURIToImageData(URI) {
 return new Promise(function(resolve, reject) {
 if (URI == null) return reject();
 var canvas = document.createElement('canvas'),
 context = canvas.getContext('2d'),
 image = new Image();
 image.addEventListener('load', function() {
 canvas.width = image.width;
 canvas.height = image.height;
 context.drawImage(image, 0, 0, canvas.width, canvas.height);
 resolve(context.getImageData(0, 0, canvas.width, canvas.height));
 }, false);
 image.src = URI;
 });
}
*/ 
</script>
    
    
    
    
</html>