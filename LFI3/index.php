
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
		$language="lang";
		$list=array('fr','ang');
		 if (isset($_GET['lang'])) 
		 {
		 	if (in_array($_GET['lang'], $list)) {
		 		 $language=$_GET['lang'];
		  }
		}			
		 include ("$language.php");		  	
  	?>
</body>
</html>