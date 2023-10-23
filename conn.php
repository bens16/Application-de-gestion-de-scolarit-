<?php
$serveur='127.0.0.1';
$utilisateur='root';
$mdp='';
$bd='bb_sco';
$connexion = new mysqli( $serveur,$utilisateur,$mdp,$bd) or die(mysql_error());
?>