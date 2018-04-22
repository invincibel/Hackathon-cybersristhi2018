<!DOCTYPE html>
<html>
    <head>
        <title>
            give your location
        </title>
        <link rel="stylesheet" href="cssfile/location.css">
    </head>
    <body onload="getLocation();">
       
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="emergency" class="avatar">
  </div>

  <div class="container">
<form method="post" action="lan.php">
      <label for="uname"><b>longitude</b></label>
    <input type="text" placeholder="Longitude" name="lon" id="lon" required>

    <label for="psw"><b>Latitude</b></label>
    <input type="text" placeholder="latitude" name="lat" id="lat" required>
        
    <input type="submit" value="submit" name="submit" id="submit">
      </form>
  </div>
<h1>Take a snapshot of the current video stream</h1>
   Click on the Start WebCam button.
     <p>
    <button onclick="startWebcam();">Start WebCam</button>
    <button onclick="stopWebcam();">Stop WebCam</button> 
       <button onclick="snapshot();">Take Snapshot</button> 
    </p>
    <video onclick="snapshot(this);" width=400 height=400 id="video" controls autoplay></video>
  <p>

        Screenshots : <p>
      <canvas  id="myCanvas" width="400" height="350"></canvas>  
        <script>
            var x = document.getElementById("lon");
            var y=   document.getElementById("lat");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.value =  position.coords.latitude ;
    y.value= position.coords.longitude;
}
  navigator.getUserMedia = ( navigator.getUserMedia ||
                             navigator.webkitGetUserMedia ||
                             navigator.mozGetUserMedia ||
                             navigator.msGetUserMedia);

      var video;
      var webcamStream;

      function startWebcam() {
        if (navigator.getUserMedia) {
           navigator.getUserMedia (

              // constraints
              {
                 video: true,
                 audio: false
              },

              // successCallback
              function(localMediaStream) {
                  video = document.querySelector('video');
                 video.src = window.URL.createObjectURL(localMediaStream);
                 webcamStream = localMediaStream;
              },

              // errorCallback
              function(err) {
                 console.log("The following error occured: " + err);
              }
           );
        } else {
           console.log("getUserMedia not supported");
        }  
      }

      function stopWebcam() {
          webcamStream.stop();
      }
      //---------------------
      // TAKE A SNAPSHOT CODE
      //---------------------
      var canvas, ctx;

      function init() {
        // Get the canvas and obtain a context for
        // drawing in it
        canvas = document.getElementById("myCanvas");
        ctx = canvas.getContext('2d');
      }

      function snapshot() {
         // Draws current image from the video element into the canvas
        ctx.drawImage(video, 0,0, canvas.width, canvas.height);
      }
        </script>
    </body>
</html>

      
