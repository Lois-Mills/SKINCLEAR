<?php
session_start();

unset($_SESSION['id']);

header("Location: ../LOGIN/login.php");

exit();
?>
