<?php
include_once '../www/dbP.php';
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
		<form action="">
			<table class="table table-striped">
				<tr><th>#</th><th>MeetingID</th><th>StudentID</th><th>Student_Attendance</th><th>Professor_Attendance</th><th>Date</th><th>Time</th><th>Meeting_room</th></tr>
				<?php
					$query5=mysql_query("select a.Student_Attendance,a.Professor_Attendance,a.MeetingID,m.Date,m.Time,m.Meeting_room, m.RegisteredStudentID  from attendance a, meeting m,course c WHERE '".$password."'=c.Professor_ProfessorID and a.MeetingID=m.MeetingID and  c.CourseID=m.CourseID ");
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
			<div><button><center><a href="courseAttendP.php">back</a></center></button>
						<button><center><a href="change.php"> Change </a></center></button></div>


		</form>
	</div></div>

</body></center>
</html>