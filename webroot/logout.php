<?php
session_start();
unset($_SESSION["is_admin"]);

header("Location: result.php");
exit();
?>