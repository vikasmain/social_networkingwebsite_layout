<?php
include("includes/connection.php");
if(isset($_POST['sign_up'])){
	 $name=mysqli_real_escape_string($con,$_POST['u_name']);//mysqli_real_escape_string is used for protecting from sql injections.
	 $pass=mysqli_real_escape_string($con,$_POST['u_pass']);
	 $email=mysqli_real_escape_string($con,$_POST['u_email']);
	$country=mysqli_real_escape_string($con,$_POST['u_country']);
	$birthday=mysqli_real_escape_string($con,$_POST['u_birthday']);
	$gender=mysqli_real_escape_string($con,$_POST['u_gender']);
$status="unverified";
$posts="no";
$ver_code=mt_rand();//mt_rand() generates a random code.


if(strlen($pass)<8)
{
	echo "<script>alert('password should be minimum 8 characters')</script>";
	exit();//so that function(alert()) will not go further.
}
$check_email="select * from users where user_email='$email'";
$run_email=mysqli_query($con,$check_email);
$check=mysqli_num_rows($run_email);
if($check==1){
	
	echo "<script>alert('Email already exists please try another')</script>";
	exit();
}

$insert="insert into users(user_name,user_pass,user_email,user_country,user_gender,user_birthday,user_image,user_reg_date,status,vercode,post) values('$name','$pass','$email','$country','$gender','$birthday','default.jpg',NOW(),'$status','$ver_code','$posts')";
$query=mysqli_query($con,$insert);
if($query){
	
	echo "<h3 style='width:400px;'>Hi $name congratulations registration is almost complete please check your email for verification</h3>";
}
else{
	
	echo "registration failed try again";
}
}
?>