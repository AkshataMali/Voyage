<?php
session_start();
$_SESSION['auth'] = false;
header("Location: ./signup.php");
session_destroy();
?>