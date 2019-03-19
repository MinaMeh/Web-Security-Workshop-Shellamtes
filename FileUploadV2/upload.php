

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
	<h1 class="center">Galerie Photos</h1>
	<form method="post" action="upload.php" enctype="multipart/form-data">
		<div class="form-group">
			upload a photo: <br>
			<input type="file" name="fileToUpload"> <br>
			<input type="submit" class="btn btn-primary" name="submit" value="upload" style="margin-top: 10px"> 

		</div>			
	</form>	

		<?php
			$msg="";
			$types=array('image/jpg','image/jpeg','image/png');
			$connection=mysqli_connect("localhost","root","","workshop");
			if (isset($_POST['submit'])){
				$dir="images/";
				$file=	$dir . basename($_FILES['fileToUpload']['name']);
				if(in_array($_FILES['fileToUpload']['type'],$types)){
					if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $file)) {
						echo "<div class='alert alert-success'>File was successfully uploaded</div>";
						$query="INSERT INTO `imagesv2` (`id`,`path`) VALUES (NULL,'$file')";
						$result=mysqli_query($connection,$query);	
					} 
					else {
					echo "<div class='alert alert-danger'>File uploading failed</div>";
					}
				}
				else{
					echo "<div class='alert alert-danger'>Invalid file </div>";
				}
			}
		?>
		<hr>
		<a href="index.php"> See photos</a>

	</div>
	
</body>
</html>