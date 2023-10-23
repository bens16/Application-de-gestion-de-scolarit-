<?php
 require_once("conn.php");
session_start();

if(!(isset($_SESSION['niveau'])));
header("location:index.html");

exit;


?>