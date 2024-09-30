<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fatch database</title>
	<style type="text/css">
		body
		{
			background-color:black;

			color: white;
		}
		table
		{
			background-color: red;

		}
		th,td
		{
			padding: 7px;
		}
        th
        {
            font-weight:bold;
            font-family:Arial;
        }
	</style>
</head>
<body>

</body>
</html>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM login";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);



	
if($total!=0)
{
	
?>
<h2 style="text-align: center;">User Name</h2>
<center>
<table border="1px" style="border-collapse: collapse;border-color: white; text-align:center;" width="85%">
	<tr style="text-align: center; ">
		<th>S_No.</th>
		<th>Name</th>

	</tr>

	<?php
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
		<td>".$result['S_No.']."</td>
		<td>".$result['Name']."</td>
	</tr>
	";
	
	}
}	

else
{
	echo"No record found";
}

  ?>
  </table>
</center>
</html>
