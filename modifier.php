<?php
/*
require_once("verifier1.php");
require_once("verifier2.php");*/
/*$serveur='127.0.0.1';
$utilisateur='root';
$mdp='';
$bd='bb_sco';
$connexion = new mysqli( $serveur,$utilisateur,$mdp,$bd);*/
require_once("conn.php");
/*
$conn=mysql_connect("localhost","root","" )or die(mysql_error());
mysql_select_db("stage",$conn)or die(mysql_error());*/

$id=$_POST['id'];

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$nomphoto=$_FILES['photo'] ['name'];
$file_tmp_name=$_FILES['photo'] ['tmp_name'];
move_uploaded_file($file_tmp_name,"./image/$nomphoto");
$sql_u="update eleve set nom='$nom',prenom='$prenom', email='$email', photo='$nomphoto' where id=$id ";
$sql=$connexion->query($sql_u);
	header("location:afficheEleve.php");

?>