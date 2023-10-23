<?php
    require_once("conn.php");
    $login=$_POST['login'];
    $password=$_POST['pass'];
    $mc=md5($password);
    $req="select* from users where  login='$login' and password='$mc'";
    $el=$connexion->query($req);
    if($re=$el->fetch_assoc()){
        session_start();
        $_SESSION['niveau']=$re['niveau'];
        header("location:afficheEleve.php");
    }
    

else{
    header("location:index.html");
}

?>