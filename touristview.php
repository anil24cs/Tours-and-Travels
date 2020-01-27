<?php
$connect=mysqli_connect('127.0.0.1','root','','myjourney');
$sql = "select * from tourist order by 1 desc";
$res = mysqli_query($connect,$sql);
echo "<h2> BOOKED TRAVEL:</h2><br>";

echo "<table border='3'>
<tr>
<th>Tourist_id</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
</tr>";

while($row = mysqli_fetch_array($res))
{
	echo "<tr>";
echo "<td>" . $row['Tourist_id'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Mobile'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
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
,url(myimages/ss.jpg)no-repeat;
background-size:cover;
}
</style>
</body>
</html>