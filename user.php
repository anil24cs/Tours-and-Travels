<?php
$conn
=mysqli_connect('127.0.0.1','root','','myjourney');
$flag=0;
$Name=isset($_POST['Name']) ? $_POST['Name']: 'xyz';

$phno=isset($_POST['phno']) ? $_POST['phno']: 'xyz';

$Address=isset($_POST['Address']) ? $_POST['Address']: 'xyz';

$query="insert into login(Name,phno,Address) values('$Name','$phno','$Address')";
if((mysqli_query($conn,$query)))
{
	$flag=1;
}
else
{
	$flag=0;
	echo"<script type'text/javascript'>alert('user not added')</script>";
}
?>

<?php
if($flag==1)
	{
		echo"<script type'text/javascript'>alert('user added sucessfully')</script>";
		
	}
	?>
