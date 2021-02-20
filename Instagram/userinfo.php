<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection sucessfull";
}else{
	echo "connection not sucessfull";
}

mysqli_select_db($con, 'hackerz');

$user = $_POST['user'];
$password = $_POST['password'];

$query = " insert into userinfo (user, password) 
 values ('$user', '$password')";

echo "Your Message Was SENT :)";

mysqli_query($con, $query);

header('location:index.php');

 ?>