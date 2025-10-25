 <?php
include 'connection.php';
 $uname=$_POST["fname"];
 $p=$_POST["pass"];
 $e=$_POST["em"];
/*$test="Create Table users( id int(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,username varchar(20),email varchar(2),password varchar(15))";
$check=mysqli_query($td,$test);
if($check){
echo"created";
}
else{
echo"not created".mysqli_error($td);
}*/
$test="insert into users(username,email,password)values('".$uname."','".$e."','".$p."')";
$check=mysqli_query($td,$test);
if($check)
{
echo"inserted";
}
else
{
echo"not inserted";
}
header("location:loginview.php");
  ?>