<?php 
    include("connection.php");

    if($_POST['save'])
    {
        $Name = $_POST['Name'];

    $query="INSERT INTO login ( Name)
    values('$Name')";
$data=mysqli_query($conn,$query);
if($data)
{
    header('location:../start.html');
}
else
{
    echo "please check your code";
}
    }
 ?>