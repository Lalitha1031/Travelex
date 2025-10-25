<?php
include'connection.php';
$r=$_POST["re"];
$n=$_POST["na"];
$p=$_POST["pl"];
/*$tb="create table review(id int(10)UNSIGNED AUTO_INCREMENT PRIMARY KEY,review varchar(100),name varchar(100),place varchar(100))";
$t=mysqli_query($td,$tb);
if($t)
{
	echo"created";
}
else
{
	echo"not created".mysqli_error($td);
}*/
$tb="insert into review(review,name,place)values('".$r."','".$n."','".$p."')";
$t=mysqli_query($td,$tb);
if($t)
{
	echo"";
}
else
{
	echo"not inserted".mysqli_error($td);
}
header("location:animated.html");
?>