<?php

require_once("connect1.php");
$conn = getConnection();
//var_dump($conn);
//die();

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $_POST['user'], $_POST['pass']);
$stmt->execute();
$stmt->close();


header('location: login/login11.html');
?>