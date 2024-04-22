<?php

include_once "../connection.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT password FROM register_data WHERE id = '$username'";
$result = $con->query($sql);
if($result->num_rows == 1){
    if($result->fetch_assoc()['password'] == $password){
        session_start();
        $_SESSION['auth'] = true;
        header("Location: ../ticket.php");
    } else header("Location: ../signup.php");
} else{
    header("Location: ../signup.php");
}
?>