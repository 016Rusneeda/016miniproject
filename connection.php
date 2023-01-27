<?php
$host = "localhost";
$username = "root";
$password ="";
$dbname = "miniproject016";

$conn = new mysqli($host,$username,$password,$dbname);

if ($conn->connect_errno){
    die("Connection failed:" . $conn->connect_errno);
}


?>