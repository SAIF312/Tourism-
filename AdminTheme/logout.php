<?php
session_start();

unset ($_SESSION['ADMIN_LOGIN']);
unset ($_SESSION['Admin_user']);
header('location:../login/login.php');
die();

?>