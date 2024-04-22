<?php

$user = "root";
$pass = "";
$db = "voyage";
$con = new mysqli("localhost", $user, $pass, $db);
if($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}
?>