<?php

//$connection=mysqli_connect(dbserver,dbuser,dbpass,dbname);
$connection=mysqli_connect('localhost','root','','usersdb');
 if($connection)
 {
 	//echo "db connected\n";
 }

 else{
 	echo "db is not connected".mysqli_connect_error();
 }
?>