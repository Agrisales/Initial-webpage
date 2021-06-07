<?php

session_start();


$con = mysqli_connect('localhost', 'root','123456');

mysqli_select_db($con, 'userregistration');

$email = $_POST['email'];
$pass = $_POST['password'];

$s =" select * from usertable where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysql_num_rows($result);

if($sum == 1){
	echo "email Already Taken";
}else{
	$reg =" insert into usertable(email, password)" values ('$emai' , '$pass')";
	mysqli_query($con, $reg);
	echo"Registration Successful";
?>