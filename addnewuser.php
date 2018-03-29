<?php

include 'db_connection.php';

$conn = OpenCon();

//echo "Connected Successfully";

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "jiggu123";
 $db = "codepie";
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$db);

	$newuser =$_POST['usernameinput'];
	$newpwd =$_POST['passwordinput'];

	echo $newuser;

$sql="INSERT INTO 'user' ('username','password') VALUES ($newuser,$newpwd)";
$query=mysqli_query($con,$sql);
if($query)
	echo 'Data inserted';



//	$insert = mysqli_query($conn, "INSERT INTO user ('username', 'password') VALUES('".$newuser."','".$newpwd."');");

	/*if ($insert) {
		header("LOCATION: /Codepie/index.php?status=reg_success");
	}*/
	echo "Register chances";
//CloseCon($conn);
?>