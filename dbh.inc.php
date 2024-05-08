<?php

$host="localhost";
$user="root";
$pass="";
$db="db_userauth";
$conn= new mysqli($host,$user,$pass,$db);
if($conn->connect_error)
{
    echo "Failed to Connect to Database!".$conn->connect_error;
}
?>