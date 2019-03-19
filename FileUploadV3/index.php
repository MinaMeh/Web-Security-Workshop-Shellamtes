

<!DOCTYPE html>
<html>
<head>
	<title> Shellmates </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
	<link rel="shortcut icon" href="../img/logo.png" />


</head>
<body>
<div class="col-md-8 offset-md-1" style="margin-top: 50px">
	<h1> Photos Gallery</h1>
	

		<?php 
			$connection=mysqli_connect("localhost","root","","workshop");
			$query = "SELECT * from images"; 
			$reponse = mysqli_query($connection,$query); 
			while($resultat = mysqli_fetch_assoc($reponse)) 
			{ 
				echo "<a href='".$resultat['path']."'>".$resultat['path']."</a></br>" ;
			 }
		
		
	 ?>
	 <hr>
	 <a href="upload.php"> Upload a file</a>
</div>
</body>
</html>