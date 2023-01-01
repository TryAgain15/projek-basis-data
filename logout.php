<?php
session_start();
unset($_SESSION['sesi']);
unset($_SESSION['username']);
session_destroy();
header("Location:logadmin.php");
?>
