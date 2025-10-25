<?php
$username="localhost";
$servername="root";
$password="";
$db="test";
$td=mysqli_connect($username,$servername,$password,$db);
if($td)
{
echo"";
}
else
{
echo"not connneted";
}