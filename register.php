<?php
require_once("connect.php");
$conn = getConnection();
//var_dump($conn);
//die();
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");

$username = $_POST['user'];
$password = $_POST['pass'];
$stmt->bindParam(':username',$username);
$stmt->bindParam(':password', $password);
$stmt->execute();

header('location : login11.html');
?>
