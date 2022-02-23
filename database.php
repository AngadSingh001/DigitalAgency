<?php

$server="localhost";
$user="root";
$pw="";
$conn=mysqli_connect($server,$user,$pw);
if(!$conn)
echo "could not connect";
else{
echo "connection successful";
	$sql1="CREATE DATABASE wpfinal";
	if (mysqli_query($conn,$sql1))
		echo "Datbase created successfully";

	else 
		echo "Datbase not created successfully";


}
mysqli_close($conn);


?>