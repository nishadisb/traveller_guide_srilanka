<!DOCTYPE html>



<html>
<head>
	<style>
		table,th,td{border-collapse: collapse;border:2px solid blue; }
           
		 
	</style>
	<title></title>
</head>
<body>


<?php
require_once('ums/connection.php');


$id2="SELECT * FROM user";
$result_set=mysqli_query($connection,$id2);
if($result_set)
  {
  	  //echo mysqli_num_rows($result_set)."records found";
    $table='<table>';
    $table.='<tr><th>User Name</th><th>Email</th><th>Password</th><th>Last_Login</th><th>is_Deleted</th></tr>';
    while ($record=mysqli_fetch_assoc($result_set)) {
      $table.='<tr>';
      $table.='<td>'.$record['username'].'</td>';
      $table.='<td>'.$record['email'].'</td>';
      $table.='<td>'.$record['password'].'</td>';
      $table.='<td>'.$record['last_login'].'</td>';
      $table.='<td>'.$record['is_delete'].'</td>'.'</tr>';
    }
    $table.='</table>';

  }
   echo $table;
?>


<?

?> 
</body>
</html>