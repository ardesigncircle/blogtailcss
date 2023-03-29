<?php

include "../koneksi.php";
session_start();
 
$email = mysqli_real_escape_string($conn,$_POST['usern']);
$password = mysqli_real_escape_string($conn,md5($_POST['passw']));
 
 

$login = mysqli_query($conn,"select * from users where usern='$email' and passw='$password'");

$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 

	if($data['roles']=="1"){
	    session_start();
		$_SESSION['usern'] = $email;
		$_SESSION['role'] = "admin";

		header("location:../create");
 

	}else{
 
		header("location:../login");
	}	
}else{
	header("location:../login");
}
 
?>