<?php
session_start();
unset($_SESSION["role"], $_SESSION["id_user"]);
header("location: index.php");
?>