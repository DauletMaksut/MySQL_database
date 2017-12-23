<?php
	$connection=mysql_connect("localhost","root","1234"); 
	$db=mysql_select_db("attendme",$connection);
	if(!$connection || !$db){
		exit(mysql_error());
	}
	session_start();
	$email = $_SESSION['email'];
	$password = $_SESSION['ProfessorID'];
	$query3=mysql_query("SELECT * FROM professor WHERE email='$email' ");
	$query4=mysql_fetch_array($query3);
	$result1= mysql_query("SELECT c.CourseName FROM course c WHERE '".$password."'= c.Professor_ProfessorID") ;
	$cname1= mysql_fetch_assoc($result1);
	
	
	?>