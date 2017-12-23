<?php
	$connection=mysql_connect("localhost","root","1234"); 
	$db=mysql_select_db("attendme",$connection);
	if(!$connection || !$db){
		exit(mysql_error());
	}
	session_start();
	$email = $_SESSION['email'];
	$password = $_SESSION['StudentID'];
	$query1=mysql_query("SELECT * FROM student WHERE email='$email' ");
	$query2=mysql_fetch_array($query1);
	$result= mysql_query("SELECT c.CourseName FROM course c,register_student_for_course r WHERE '".$password."'= r.StudentID and r.CourseID=c.CourseID") ;
	$cname= mysql_fetch_assoc($result);
	$room=$_SESSION['Meeting_room'];
	
	

	





	



	

?>