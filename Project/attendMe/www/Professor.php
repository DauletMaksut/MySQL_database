<?php
session_start();
?>
<?
if (isset($_POST['login'])){
	$_SESSION['email']=$_POST['email'];
	$_SESSION['ProfessorID']=$_POST['password'];
	include_once '../www/dbP.php';

	$email=$_POST['email'];
	$password=$_POST['password'];

	if($email ==''){
		echo "<center>"."<p style='color:lemonChiffon;font-weight:bold;letter-spacing: 1px;font-size:20px;'>".'Enter e-mail'."</p>"."</center>";
	}

	elseif($password ==''){
		echo "<center>"."<p style='color:lemonChiffon;font-weight:bold;letter-spacing: 1px;font-size:20px;'>".'Enter password'."</center>";;
	}

	elseif ($email != $query4['email']){
		echo "<center>"."<p style='color:lemonChiffon;font-weight:bold;letter-spacing: 1px;font-size:20px;'>"."email is not correct"."</center>";;
	}

	elseif ($password !=$query4['ProfessorID']){
		echo "<center>"."<p style='color:lemonChiffon;font-weight:bold;letter-spacing: 1px;font-size:20px;'>"."password is not correct"."</center>";
	}
	else{  header("Location: profLogin.php");}
	


	}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Professor</title>
	<style >
		.log-in{
			max-width:350px;
			background:lemonChiffon;
			padding:50px;
			color:lightsalmon;
			font-weight:bold;
			letter-spacing: 1px
			margin:auto;
			font-size:20px;


		}
		input[type=text],input[type=password]{
			width:100%;
			padding:10px;
			margin:10px 0;
		}
		input[type=submit], input[type=button]{
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
<body style = "background-color:lightsalmon;">

	
	<center><div class="log-in">
		<form method ="POST" action="";>
			<label for "email">Enter your e-mail</label>
			<input type="text" name="email" placeholder="E-mail">
			<label for "password">Enter your password</label>
			<input type="password" name="password" placeholder="Password">
			<input type="submit" name="login" value="Login">
			<br>
			<br><div><button><center><a href="index.php">back</a></center></button></div>

		</form>
	</div>	</center>
</body>
</html>