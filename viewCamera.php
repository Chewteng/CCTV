<?php require_once 'header.php'; ?>
<?php 
	require_once("db_connect.php");
    $CameraID = $_GET['CameraID'];
    $query = " select * from camera where cid='".$CameraID."'";
    $result = mysqli_query($connect,$query);

	if($result->num_rows == 1) {
		while($row=mysqli_fetch_assoc($result))
		{
			$CameraID = $row['cid'];
			$Address = $row['IPaddress'];
			$Place = $row['place'];
			$Message = $row['message'];
		}
	}
	else{		
		echo "<script type='text/javascript'>alert('Camera ID doesnot exists');
			window.location='editCamera.php';
			</script>";			
	}
 
?>

<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="style.css" type="text/css">
    </head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
		
		<video width="320" height="240" autoplay controls>
    <source src="%StreamURL%" type="video/mp4">
    <object width="320" height="240" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.5.swf">
        <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.5.swf" /> 
        <param name="flashvars" value='config={"clip": {"url": "%StreamURL%", "autoPlay":true, "autoBuffering":true}}' /> 
        <p><a href="%StreamURL%">view with external app</a></p> 
    </object>
</video>
			
			
			
			
				<video width="320" height="240" controls autoplay>
  <source src="" type="video/mp4">
  Sorry, your browser doesn't support the video element.
</video>
<audio controls>
  <source src="horse.mp3" type="audio/mpeg">
  Sorry, your browser does not support the audio element.
</audio>
				
				
				
			</div><!-- /col-md-4 -->
		</div><!-- /row -->
	</div><!-- container -->
</body>
</html>