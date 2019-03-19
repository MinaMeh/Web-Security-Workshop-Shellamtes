

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
	if (isset($_GET['name'])) {
		$name=$_GET['name'];
		$msg= "$name is not found";
	}
?>
	<div class="col-md-4 offset-md-3" style="margin-top: 80px;">
			<h1 style="text-align: center;"> My wiki </h1>
			<hr><br>
		<form id="form" method="get" action="index.php" >
			<div class="form-group">
				<input id="name" type="text" name="name" class="form-control">
			</div>
			<input type="submit" name="submit" value="Search" class="btn btn-success offset-md-10" >
			<?php if ($msg) echo ($msg) ?>
		</form>
		
	</div>
	
</body>
</html>