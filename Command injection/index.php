

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
	$msg="";
	if (isset($_POST['ip'])) {
		$ip=$_POST['ip'];
		$msg= shell_exec ("ping -c 4 $ip");
	}
?>
	<div class="col-md-5 offset-md-3" style="margin-top: 80px;">
			<h1 style="text-align: center;"> Ping Service</h1>
			<hr><br>
		<form id="form" method="post" action="index.php" >
			<div class="form-group">
				<label> Adresse IP</label>
				<input id="ip" type="text" name="ip" class="form-control">
			</div>
			<input type="submit" name="submit" value="Ping" class="btn btn-success offset-md-11" >
			<?php if ($msg) echo ($msg) ?>
		</form>
		
	</div>
	
</body>
</html>