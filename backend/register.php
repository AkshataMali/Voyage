<?php 
include_once "../connection.php";

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM register_data WHERE id = '$username'";
$result = $con->query($sql);
if($result->num_rows > 0){
    echo "Username already exists";
} else {
        $sql = "INSERT INTO register_data (id, password) VALUES ('$username', '$password')";
        $con->query($sql);
        header("Location: ../signup.php");
}
?>