<?php

$server="localhost";
$user="root";
$pw="";
$dbname="wpfinal";
$name=$_POST["name"];
$mail=$_POST["mail"];
$num=$_POST["num"];
$loc=$_POST["loc"];
$area=$_POST["area"];

$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo "could not connect";
else{
	$sql1="SELECT * FROM final2 Where name='$name'";

		$res=mysqli_query($conn,$sql1);
		if (mysqli_num_rows($res)>0){
			echo "Value already Recorded <br>";
			echo '<a href="Wp final pro(5.0).html">Click here to get back to the Page.</a>';
			}
		
		else{
			$sql="INSERT INTO final2(name,mail,num,loc,area) VALUES('$name','$mail','$num','$loc','$area')";
if (mysqli_multi_query($conn,$sql))
{
		echo "Value RECORD inserted successfully<br>";
		echo '<a href="Wp final pro(5.0).html">Click here to get back to the Page.</a>';
}

	else 
		echo "Value RECORD not inserted successfully";
		}
		}
		header("location:Wp final pro(5.0).html");
	mysqli_close($conn);
?>