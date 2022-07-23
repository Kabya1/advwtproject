<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['gender']);

session_destroy();

header('location:/bca4/AdvWebTech/login.php');

 ?>
