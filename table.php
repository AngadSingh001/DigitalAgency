<?php

$server="localhost";
$user="root";
$pw="";
$dbname="wpfinal";
$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo "could not connect";
else{
	$sql1="CREATE TABLE final(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(20) NOT NULL, 
        eid VARCHAR(20) NOT NULL,
        pass VARCHAR(20))";
    if (mysqli_query($conn,$sql1))
		echo "TABLE created successfully";

	else 
		echo "TABLE not created successfully";

}
mysqli_close($conn);


?>	
