<?php

require_once("conn.php");
if(isset($_SESSION['niveau'])==1){
    header("location:afficheEleve");
}
else{
header("location:index.html");
}
exit;
?>