<?php 
	session_start();
	header('location:login.php');
	$con = mysqli_connect('localhost','root');
	if($con){
		echo "connection successful";
	}else{
		echo "connection failed";
	}

	mysqli_select_db($con, 'q&aforum');
	$username = $_POST['username'];
	$password = $_POST['password'];

	$q = "select * from signin where username ='$username' && password='$password'";

	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

	if($num == 1){
		echo "already registered";
	}
	else{
		$qy = "insert into signin(username , password) values ('$username', '$password')";
		mysqli_query($con , $qy);
	}

 ?>	

