<?
session_start(); 
include_once '../www/dbP.php';
$result1= mysql_query("SELECT c.CourseName FROM course c WHERE '".$password."'= c.Professor_ProfessorID") ;
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
	<center><h1><p style='color:lemonChiffon;font-weight:bold;letter-spacing: 1px;'> List of your courses </p></h1> </center>
	
		<?php 
		
			while (($cname1= mysql_fetch_assoc($result1))){
				echo '<li>'.'<button>'.'<a href="courseAttendP.php">'.$cname1['CourseName'].'</a>'.'</button>'.'</li>';

			}	
			?>

			<br><div><button><center><a href="Professor.php">back</a></center></button></div>
</body></center>
</html>
