<?php
$host = "localhost"
$user_name = "root";
$password = "";
$database = "phpcms";
$port = 3306;

// Create Connection
$conn = mysqli_connect($host, $user_name, $password, $database, $port);

if(!conn){
    die("connection failed:".mysqli_connect_error());
}
else
{
    die("connected");
}


?>