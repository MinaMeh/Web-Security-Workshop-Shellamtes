

<!DOCTYPE html>
<html>
<head>
	<title> Shellmates </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
	<link rel="shortcut icon" href="../img/logo.png" />


</head>
<body>
	
<?php
//phpinfo();
$msg="";
$connection=mysqli_connect("localhost","root","","workshop");
if (!empty($_POST['username'])&& !empty($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query="SELECT * FROM `users` WHERE `username`=? AND `password`=?";
		$stmnt=mysqli_prepare($connection,$query);
		mysqli_stmt_bind_param($stmnt,'ss',$username,$password);
		mysqli_stmt_execute($stmnt);
		$result=mysqli_stmt_get_result($stmnt);
		$row=mysqli_fetch_assoc($result);
	if ($row){
		$_SESSION['id']=$row['id'];
		$msg="<div class='alert alert-success' >Welcome!  ". $row['username']."</div>";
	}
	else{
		$msg="<div  class='alert alert-danger'>Check your username and password</div>";
	}
}
?>


	<div class="col-md-4 offset-md-4" style="margin-top: 150px;">
			<h1 style="text-align: center;"> Login Form</h1>
			<hr><br>
		<form id="form" method="post" action="index.php" >
			<div class="form-group">
				<label> Username</label>
				<input id="username" type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label> Password</label>
				<input id="password" type="password" name="password"   class="form-control" >
			</div>
			<?php if ($msg) echo ($msg) ?>
			<input type="submit" name="submit" value="Login" class="btn btn-success offset-md-10" >
		
		</form>
		
	</div>
	
</body>
</html>