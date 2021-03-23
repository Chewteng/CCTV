<!DOCTYPE html>
<html>
<head>
	<title>Taking Picture</title>
</head>
<style>
	#camera{
		width: 350px;
		height: 350px;
		border: 1px solid black;
	}
</style>
<body>
	<div id="camera"></div><br>
	<button onclick="take_pic()">Take Picture</button>
	<div id="results"></div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
<script>
	//Load all webcam
	Webcam.set({
		width:350,
		height:350,
		image_format:'jpg',
		jpg_quality:90
	})

	Webcam.attach("#camera");
	
	function take_pic(){

		Webcam.snap(function(data_uri){
			//display image in page
		document.getElementById('results').innerHTML =
		'<img src= "'+data_uri+'"/>';

		});
	}
</script>
</html>
