<?
session_start(); 
include_once '../www/db.php';
$result= mysql_query("SELECT c.CourseName FROM course c,register_student_for_course r WHERE '".$password."'= r.StudentID and r.CourseID=c.CourseID") ;
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	a{
			width:49%
			padding:15px;
			margin-top: 30px;
			border:none;
			color:lightsalmon;
			font-size:20px;
			font-weight:bold;
			letter-spacing:1px;
			cursor:pointer;
		}
	</style>
</head>
<center><body style = "background-color:lightsalmon;">
	<center><h1><p style='color:lemonChiffon;font-weight:bold;letter-spacing: 1px;'> You are registered for </p></h1> </center>
	
		<?php 
		
			while (($cname= mysql_fetch_assoc($result))){
				echo '<li>'.'<button>'.'<a href="courseAttend.php">'.$cname['CourseName'].'</a>'.'</button>'.'</li>';

			}	
			?>

			<br><div><button><center><a href="Student.php">back</a></center></button></div>
</body></center>
</html>
