<?php
include 'connection.php';
$id=$_GET["id"];
$del="delete from users where id='".$id."'";
$check=mysqli_query($td,$del);
if($check)
{
echo "deleted";
}
else
{
echo"not deleted".mysqli_error($td);
}
header("location:loginview.php");
?>