<?php
$connect=mysqli_connect('127.0.0.1','root','','myjourney');
$sql = "select * from booking order by 1 desc";
$res = mysqli_query($connect,$sql);
echo "<h2>Successful Bookings:</h2><br>";


echo "<table border='3'>
<tr>
<th>tourist_id</th>
<th>book_id</th>
<th>pack_id</th>
<th>email</th>
<th>from_date</th>
</tr>";

while($row = mysqli_fetch_array($res))
{
	echo "<tr>";
echo "<td>" . $row['tourist_id'] . "</td>";
echo "<td>" . $row['book_id'] . "</td>";
echo "<td>" . $row['pack_id'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['from_date'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>

<html>
<body>
<style>
body{
font-family:latha;
color:white;
background: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65),rgba(0,0,0,0.38),rgba(0,0,0,0))
,url(myimages/tat1.jpg)no-repeat;
background-size:cover;
}
</style>
</body>
</html>