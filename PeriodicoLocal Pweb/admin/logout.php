<?php
session_start();
$_SESSION["admin"]=false;
unset($_SESSION["admin"]);
header("location: index.php");
?>