<?php
$conn
=mysqli_connect('127.0.0.1','root','','myjourney');
$flag=0;
$tourist_id=isset($_POST['tourist_id']) ? $_POST['tourist_id']: 'xyz';

$book_id=isset($_POST['book_id']) ? $_POST['book_id']: 'xyz';

$pack_id=isset($_POST['pack_id']) ? $_POST['pack_id']: 'xyz';

$email=isset($_POST['email']) ? $_POST['email']: 'xyz';

$from_date=isset($_POST['from_date']) ? $_POST['from_date']: 'xyz';

$query="insert into booking(tourist_id,book_id,pack_id,email,from_date) values ('$tourist_id','$book_id','$pack_id','$email','$from_date')";
if((mysqli_query($conn,$query)))
{
	$flag=1;
}
else
{
	$flag=0;
	echo"<script type'text/javascript'>alert('user not added ')</script>";
}
?>

<?php
if($flag==1)
	{
		echo"<script type'text/javascript'>alert('user added sucessfully')</script>";
		
	}
	?>