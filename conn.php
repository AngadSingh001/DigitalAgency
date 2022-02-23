<?php

$server="localhost";
$user="root";
$pw="";
$dbname="wpfinal";
$fname=$_POST["fname"];
$eid=$_POST["eid"];
$pass=$_POST["pass"];


$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo "could not connect";
else{
	$sql1="SELECT * FROM final Where fname='$fname'";

		$res=mysqli_query($conn,$sql1);
		if (mysqli_num_rows($res)>0){
			echo "Record valid<br>You have been Signed In<br>";
			echo '<a href="Wp final pro(2.0).html">Click here to go to Home Page.</a>';
			}
		
		else{
			$sql="INSERT INTO final(fname,eid,pass) VALUES('$fname','$eid','$pass')";
if (mysqli_multi_query($conn,$sql)){
		echo "Value RECORD inserted successfully<br>You have been Signed In<br>";
		echo '<a href="Wp final pro(2.0).html">Click here to go to Home Page.</a>';
	}

	else 
		echo "Value RECORD not inserted successfully";
		}
		}
		header("location:Wp final pro(2.0).html");
	mysqli_close($conn);
?>
