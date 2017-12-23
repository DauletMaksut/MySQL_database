<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
</head>
<body style = "background-color:lightsalmon;">
	
	
	<h1 style="color:lemonChiffon;text-align:center;">Hello<br> Today is 
		<?php
		$date=date_create(null,timezone_open("Asia/Almaty"));
		echo date_format($date,"Y-m-d H:i:s");
		?>
	<br>I follow the attendance</h1>
	<center> <a href="Student.php"> <button style="color:lemonChiffon;font-size:200%;text-align:center;border:1px solid lemonChiffon;border-radius: 30px;background-color: lightsalmon">Student </button></a>
	<a href="Professor.php"><button style="color:lemonChiffon;font-size:200%;align:center;border:1px solid lemonChiffon;border-radius: 30px;background-color: lightsalmon">Professor</button></a></center>
</body>
</html>