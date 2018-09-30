<?php

require_once("../connect1.php");
$conn = getConnection();


$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

$result = mysqli_query($conn, "select * from users where username = '$username' and password = '$password'")
            or die("failed to query database ".mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['username']==$username && $row['password']==$password) {
    header('location: homepage.html');
} else {
    header('location: login11.html' );
}

?>