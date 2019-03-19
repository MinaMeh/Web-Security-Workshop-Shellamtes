
<!DOCTYPE html>
<html>
<head>
	<title> Shellmates  </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
	<link rel="shortcut icon" href="../img/logo.png" />


</head>
<body>
	<?php
		 if (isset($_GET['lang'])) 
		 {
		 	 $language=$_GET['lang'];
		  }
		else {
			$language="lang";
		} 
		 include ("$language.php");		  	
  	?>
</body>
</html>