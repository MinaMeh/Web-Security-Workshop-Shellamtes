
<!DOCTYPE html>
<html>
<head>
	<title> Shellmates </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
	<link rel="shortcut icon" href="../img/logo.png" />
</head>
<body>
<div class="col-md-6 offset-md-1" >
	<h1 style="text-align: center;"> Forum</h1>
			<hr><br>

	<?php
		$connection=mysqli_connect("localhost","root","","workshop");
		if (!empty($_POST['titre'])&& !empty($_POST['message'])){
			$titre = $_POST['titre'];
			$message = $_POST['message'];
			$query = "INSERT INTO messages  (`id`, `titre`, `message`) VALUES (NULL, '$titre', '$message')"; 
			$reponse = mysqli_query($connection,$query);
		}
		$query = "SELECT * from messages"; 
		$reponse = mysqli_query($connection,$query); 
		while($resultat = mysqli_fetch_assoc($reponse)) { 
			echo "<h5>".$resultat['titre']." </h5> ".$resultat['message']."<hr>";
		 }
		 setcookie("user","user");
		 setcookie("password","1234");

	?>
</div>
	<div class="col-md-6 offset-md-1" >
		<h3> Ajouter un message:</h3>

		<form id="form" method="post" action="index.php" >
			<div class="form-group">
				<label> Titre</label>
				<input id="titre"  name="titre" class="form-control">
			</div>
			<div class="form-group">
				<label> Message</label>
				<textarea id="message"  name="message"   class="form-control" ></textarea>
			</div>			
			<input type="submit" name="submit" value="Login" class="btn btn-success offset-md-10" >
		</form>
			
	</div>
</body>
</html>