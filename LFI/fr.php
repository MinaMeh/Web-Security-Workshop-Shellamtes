
<!DOCTYPE html>
<html>
<head>
	<title> Shellmates </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
	<link rel="shortcut icon" href="../img/logo.png" />
</head>
<body>
	<br>
<div class="col-md-1 offset-md-11 ">
	<a href="?lang=ang.php"> <img src="../img/ang.jpg" height="20" width="25">English</a>
</div>

	<div class="col-md-4 offset-md-4" style="margin-top: 90px;">
			<h1 style="text-align: center;">Formulaire d'inscription</h1>
			<hr><br>
		<form id="form" method="post" action="index.php" >
			<div class="form-group">
				<label> Nom d'utilisateur:</label>
				<input id="username" type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label> Mot de passe:</label>
				<input id="password" type="password" name="password"   class="form-control" >
			</div>
			<input type="submit" name="submit" value="Login" class="btn btn-success offset-md-10" >
			
		</form>
		
	</div>
</body>
</html>