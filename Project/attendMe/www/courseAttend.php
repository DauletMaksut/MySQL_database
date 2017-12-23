<? include_once '../www/db.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<center><body style = "background-color:lightsalmon;">
	<h1 style="color:lemonChiffon;">Attendance of the course <?php echo $cname['CourseName'] ?></h1>
	<center> <a href="meeting.php"> <button style="color:lemonChiffon;font-size:200%;text-align:center;border:1px solid lemonChiffon;border-radius: 30px;background-color: lightsalmon">I attend </button></a>
	<a href="SLAttendance.php"><button style="color:lemonChiffon;font-size:200%;align:center;border:1px solid lemonChiffon;border-radius: 30px;background-color: lightsalmon">Look for attendance</button></a>

	<a href="studentLogin.php"><button style="color:lemonChiffon;font-size:200%;align:center;border:1px solid lemonChiffon;border-radius: 30px;background-color: lightsalmon">Back</button></a></center>


</body></center>
</html>