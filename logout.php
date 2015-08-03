<?php
session_start();
unset($_SESSION["id"],$_SESSION["user"]);
header("Location:login.php")

?>