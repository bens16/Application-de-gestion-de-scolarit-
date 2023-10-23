<?php
/*
require_once("verifier1.php");
require_once("verifier2.php");*/
/*$serveur='127.0.0.1';
$utilisateur='root';
$mdp='';
$bd='bb_sco';
$connexion = new mysqli( $serveur,$utilisateur,$mdp,$bd);
*/
require_once("conn.php");
$code=$_GET['id'];
$sql="DELETE FROM eleve where (id=$code)";
$req= $connexion->query($sql);
header("location:afficheEleve.php");
?>
