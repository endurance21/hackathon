<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username)||!password($password))
{$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "register";

$conn = new mysqli($host,$dbUsername,$dbPassword ,$dbname );
if('connect Error('.mysqli_connect_errorno().')'
.mysqli_connect_error());
}
else{ 
$sql = "INSERT INTO student(username,password)
values ('$username','$password')";
if($conn->query($sql)){
	echo "New record is inserted successfully";
}}
else{
	echo "Error: ".$sql ."<br>".$conn->error;
}
$conn->close();
}
}



?>