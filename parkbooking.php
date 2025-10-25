<?php
include 'connection.php';
$un=$_POST["fname"];//username
$e=$_POST["em"];//email
$p=$_POST["pack"];//selection of place or package
$per=$_POST["people"];//no.ofpeople
$d=$_POST["daty"];//dateandday
$pay=$_POST["paa"];//payment
$cn=$_POST["no"];//cardno
$cna=$_POST["cardn"];//cardname
$exps=$_POST["ex"];//expmonthoryear
$c=$_POST["cvv"]; //cvv
/*$td1="create table parkbooking(id int(3)UNSIGNED AUTO_INCREMENT PRIMARY KEY,username varchar(100),
email varchar(100),place_package varchar(50),number_of_person int(10),date_day date,payment varchar(10),
cardno int(10),cardname varchar(50),exp_month_year date,cvv int(10))";
$check=mysqli_query($td,$td1);
if($check)
{
	echo"created table";
}
else
{
	echo"not created".mysqli_error($td);
}*/
$in="insert into parkbooking(username,email,place_package,number_of_person,date_day,payment,cardno,
cardname,exp_month_year,cvv)values('".$un."','".$e."','".$p."','".$per."','".$d."','".$pay."','".$cn."',
'".$cna."','".$exps."','".$c."')";
$check=mysqli_query($td,$in);
if($check)
{
	echo"inserted";
}
else
{
	echo"not inserted".myqli_error($td);
}
header('location:animated.html');
?>