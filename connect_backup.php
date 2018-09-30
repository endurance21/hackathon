<?php
$servername = "localhost:3306";
$username = "root";
$password ="";
$dbname ="study";


function getConnection(){
    global $servername, $username, $password, $dbname;
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        return $conn;
    }
    catch(PDOException $e)
    {
        die("Error: ".$e->getMessage());
    }
}