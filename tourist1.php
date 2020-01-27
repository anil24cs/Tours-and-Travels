<?php
$conn
=mysqli_connect('127.0.0.1','root','','myjourney');
$flag=0;
$Tourist_id=isset($_POST['Tourist_id']) ? $_POST['Tourist_id']: 'xyz';

$Name
=isset($_POST['Name']) ? $_POST['Name']: 'xyz';

$Mobile=isset($_POST['Mobile']) ? $_POST['Mobile']: 'xyz';

$Email=isset($_POST['Email']) ? $_POST['Email']: 'xyz';

$query="insert into tourist(Tourist_id,Name,Mobile,Email) values('$Tourist_id','$Name','$Mobile','$Email')";
if((mysqli_query($conn,$query)))
{
	$flag=1;
}
else
{
	$flag=0;
	echo"<script type'text/javascript'>alert('tourist not added')</script>";
}
?>

<?php
if($flag==1)
	{
		echo"<script type'text/javascript'>alert('user added sucessfully')</script>";
		
	}
	?>