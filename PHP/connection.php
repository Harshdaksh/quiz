<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="quiz";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "Connection is Ok";
}
else
{
	echo "Connection is Fail";
}

 ?>