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
				<tr><th>#</th><th>MeetingID</th><th>Student_Attendance</th><th>Professor_Attendance</th><th>Date</th><th>Time</th><th>Meeting_room</th></tr>
				<?php
					$query=mysql_query("select a.Student_Attendance,a.Professor_Attendance,a.MeetingID,m.Date,m.Time,m.Meeting_room  from attendance a, meeting m,course c WHERE '".$password."'=m.RegisteredStudentID and a.MeetingID=m.MeetingID and '".$cname['CourseName']."'=c.CourseName and c.CourseID=m.CourseID ");
					$count=0;
					while($row=mysql_fetch_array($query)){
						$count++;
						?>
						<tr>
						<td> <?php echo $count;?> </td>
						<td><?php echo $row['MeetingID']; ?></td>
						<td><?php echo $row['Student_Attendance']; ?></td>
						<td><?php echo $row['Professor_Attendance']; ?></td>
						<td><?php echo $row['Date']; ?></td>
						<td><?php echo $row['Time']; ?></td>
						<td><?php echo $row['Meeting_room']; ?></td>
						
						


					</tr>
					<?php
					}

				?>
			</table>
			<div><button><center><a href="courseAttend.php">back</a></center></button></div>
		</form>
	</div></div>

</body></center>
</html>