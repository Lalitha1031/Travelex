<html>
<body>
<center><table border="10"></center>
<tr>
<td>id</td>
<td>username</td>
<td>email</td>
<td>password</td>
<td>update</td>
<td>delete</td>
</tr>
<?php
include'connection.php';
$ts="select * from users";
$check=mysqli_query($td,$ts);
if(mysqli_num_rows($check)>0)
{
while($rows=mysqli_fetch_assoc($check))
{
echo "<tr><td>".$rows["id"]."</td>";
echo "<td>".$rows["username"]."</td>";
echo "<td>".$rows["email"]."</td>";
echo "<td>".$rows["password"]."</td>";
echo "<td><a href='update.php?id=".$rows['id']."'>update</a></td>";
echo"<td><a href='delete.php?id=".$rows['id']."'>delete</a></td></tr>";
}
}
else
{
echo"no values";
}
?>
</table>
</body>
</html>