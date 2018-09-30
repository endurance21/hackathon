<?php
$servername = "localhost:3306";
$username = "root";
$password ="";
$dbname ="study";


function getConnection(){
    global $servername, $username, $password, $dbname;
        $conn = mysqli_connect($servername, $username, $password,$dbname);
        if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
        return $conn;
}