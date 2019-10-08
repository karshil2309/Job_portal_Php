	<?php

	 $servername = "localhost";
	 $username = "root";
	 $password = "";
	 $dbname = "admin_master";

	  // Create connection
	  $conn = new mysqli($servername, $username, $password, $dbname);

	  //check connection

	  if ($conn->connect_error)
	  	{
	  	# code...
	  	die("Connection Failed....".$conn->connect_error);
	  }

?>
