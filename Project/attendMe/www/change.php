<?php
include_once '../www/dbP.php';
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	form{
			max-width:1200px;
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
	</style>
</head>
<center><body style = "background-color:lightsalmon;">
	<div class="panel panel-heading">
	<div class="panel panel-body">
		<form action=" ">
			<table class="table table-striped">
				<tr><th>#</th><th>MeetingID</th><th>StudentID</th><th>Student_Attendance</th><th>Professor_Attendance</th><th>Date</th><th>Time</th><th>Meeting_room</th></tr>
				<?php
					$query5=mysql_query("select a.Student_Attendance,a.Professor_Attendance,a.MeetingID,m.Date,m.Time,m.Meeting_room, m.RegisteredStudentID  from attendance a, meeting m,course c WHERE '".$password."'=c.Professor_ProfessorID and a.MeetingID=m.MeetingID and c.CourseID=m.CourseID and '".$cname1['CourseName']."'=c.CourseName ");
					$count1=0;
					while($row1=mysql_fetch_array($query5)){
						$count1++;
						?>
						<tr>
						<td> <?php echo $count1;?> </td>
						<td><?php echo $row1['MeetingID']; ?></td>
						<td><?php echo $row1['RegisteredStudentID']; ?></td>
						<td><?php echo $row1['Student_Attendance']; ?></td>
						<td><?php echo $row1['Professor_Attendance']; ?></td>
						<td><?php echo $row1['Date']; ?></td>
						<td><?php echo $row1['Time']; ?></td>
						<td><?php echo $row1['Meeting_room']; ?></td>
						
						


					</tr>
					<?php
					}

				?>
			</table>
			
						


		</form>
	</div></div>
	<div class="panel panel-heading">
	<div class="panel panel-body">
		<form method="POST" action="">
			<table class="table table-striped">
				<tr><th>MeetingID</th><th>Attendance_Status</th></tr>
				
						
						<td><input type="text" name="mid"> </td>
						<td><input type="text" name="attend"></td>
						<td><input type="submit" name="change" value="change"> </td>
						<td><div><button><center><a href="Pfinal.php">update</a></center></button></div></td>
						<td><div><button><center><a href="courseAttendP.php">back</a></center></button></div></td>

						
						
						


					</tr>

					
			</table>

		</form>

	</div></div>


</body></center>
</html>

<?php
if (isset($_POST['change'])){
	
	
	
	$mid=$_POST['mid'];
	$password = $_SESSION['Professor_ProfessorID'];
	$atch=$_POST['attend'];

	if($mid ==''){
		echo "<center>"."<p style='color:lemonChiffon;font-weight:bold;letter-spacing: 1px;font-size:20px;'>".'Enter MeetingID'."</p>"."</center>";
	}
	
	else{ $m=mysql_query("UPDATE attendance SET Professor_Attendance='$atch' where MeetingID=$mid");
				 }
	


	}



?>