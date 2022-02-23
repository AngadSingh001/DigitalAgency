<?php

$server="localhost";
$user="root";
$pw="";
$dbname="wpfinal";
$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo "could not connect";
else{
	$sql1="CREATE TABLE final2(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(20) NOT NULL, 
        mail VARCHAR(20) NOT NULL,
        num VARCHAR(20) NOT NULL,
        loc VARCHAR(20) NOT NULL,
        area VARCHAR(20))";
    if (mysqli_query($conn,$sql1))
		echo "TABLE created successfully";

	else 
		echo "TABLE not created successfully";

}
mysqli_close($conn);


?>	
