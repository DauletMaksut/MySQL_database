<?php
include_once '../www/db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	.table{
			max-width:800px;
			background:lemonChiffon;
			padding:60px;
			color:lightsalmon;
			font-weight:bold;
			letter-spacing: 20px
			
			font-size:30px;



		}
		th{
			
			background:lemonChiffon;
			padding:20px;
			color:lightsalmon;
			font-weight:bold;
			
			
			font-size:20px;

		}
		td{
			background:lemonChiffon;
			padding:20px;
			color:lightsalmon;
			font-weight:bold;
			
			
			font-size:20px;
		}
		input[type=submit]{
			width:15%
			margin-top: 30px;
			border:none;
			color:lightsalmon;
			font-size:20px;
			font-weight:bold;
			letter-spacing:1px;
			cursor:pointer;
		}
		a{
			width:15%
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
	<div class="panel panel-heading">
	<div class="panel panel-body">
		<form method="POST" action="">
			<table class="table table-striped">
				<tr><th>Date</th><th>Time</th><th>Meeting_room</th><th>Attendance_Status</th></tr>
				
						<tr>
						<td><div><?php
									$date=date_create(null,timezone_open("Asia/Almaty"));
									echo $d=date_format($date,"Y-m-d");
									?> </div></td>
						<td><div> <?php
									$date=date_create(null,timezone_open("Asia/Almaty"));
									echo $t=date_format($date,"H:i:s");
									?> </div></td>
						<td><input type="text" name="room"> </td>
						<td><input type="submit" name="attend" value="present"> </td>
						<td><div><button><center><a href="courseAttend.php">back</a></center></button></div></td>

						
						
						


					</tr>

					
			</table>

		</form>

	</div></div>


</body></center>
</html>

<?php
if (isset($_POST['attend'])){
	
	
	$_SESSION['Meeting_room']=$_POST['room'];
	$room=$_POST['room'];
	$password = $_SESSION['StudentID'];

	if($room ==''){
		echo "<center>"."<p style='color:lemonChiffon;font-weight:bold;letter-spacing: 1px;font-size:20px;'>".'Enter room number'."</p>"."</center>";
	}
	
	else{ 
				
					
					$res=mysql_query("SELECT c.CourseID FROM course c,register_student_for_course r WHERE '".$password."'= r.StudentID and r.CourseID=c.CourseID") ;
					$r=mysql_fetch_assoc($res);
					$cid=$r['CourseID'];
					

					$q=mysql_query("insert into meeting(Meeting_room, Date, Time, CourseID, RegisteredStudentID, MeetingID) values( $room,'$d','$t', $cid , $password, null);");
					$qr=mysql_query("select MeetingID from meeting order by MeetingID desc limit 1");
				
					echo "<center>"."<p style='color:lemonChiffon;font-weight:bold;letter-spacing: 1px;font-size:20px;'>"."The data was successfully submitted"."</p>"."</center>";
					$qr1=mysql_fetch_assoc($qr);
					$mid=$qr1['MeetingID'];


					$q1=mysql_query("insert into attendance(Student_Attendance, Professor_Attendance, MeetingID) values('Yes',null, $mid);");


						
						



	 }
	


	}



?>