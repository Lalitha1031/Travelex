<?php
include 'connection.php';
$id=$_GET["id"];
$tv="select * from users where id='".$id."'";
$check=mysqli_query($td,$tv);
while($r=mysqli_fetch_array($check))
{
$u=$r["username"];
$e=$r["email"];
$p=$r["password"];
/*echo $u;
echo $p;
echo $e;*/
}
?>
<html>
<body>
<form action="<?php $_SERVER["PHP_SELF"]; ?> " method="POST">
<table border="10">
<tr>
<td>username</td>
<td><input type="text" name="us" value="<?php echo $u; ?>"></td>
</tr>
<tr>
<td>email</td>
<td><input type="email" name="ep" value="<?php echo $e; ?>"></td>
</tr>
<tr>
<td>password</td>
<td><input type="text" name="pe" value="<?php echo $p; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
include 'connection.php';
$un=$_POST["us"];
$em=$_POST["ep"];
$ps=$_POST["pe"];
$ad="update users set username='".$un."',email='".$em."',password='".$ps."' where id='".$id."'";
$hey=mysqli_query($td,$ad);
if($hey)
{
echo "updat";
}
else
{
echo"not updated";
}

?>