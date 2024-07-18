<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "private_campus";
$port = "3306"; //3306
$conn = new mysqli($servername, $username, $password, $db_name, $port);
if($conn -> connect_error) {
    die("Connection failed".$conn -> connect_error);
}

echo "";

