<?php 
session_start();
unset($_SESSION['sesi']);
unset($_SESSION['id_user']);
session_destroy();
header("location:login.php");
?>