<?php
//require_once("verifier1.php");
//require_once("verifier2.php");
/*$serveur='127.0.0.1';
$utilisateur='root';
$mdp='';
$bd='bb_sco';
$connexion = new mysqli( $serveur,$utilisateur,$mdp,$bd);*/
require_once("conn.php");
/*
$conn=mysql_connect("localhost","root","" )or die(mysql_error());
mysql_select_db("stage",$conn)or die(mysql_error());*/


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$nomphoto=$_FILES['photo'] ['name'];
$file_tmp_name=$_FILES['photo'] ['tmp_name'];
move_uploaded_file($file_tmp_name,"./image/$nomphoto");
$sql_u ="INSERT INTO eleve (nom,prenom, email, photo) VALUES ('$nom','$prenom','$email','$nomphoto')";
	$sql = $connexion->query($sql_u);
	

?>
<html>
    <link rel="stylesheet" href="s.css">
    <body>
        <table border="1">
            
            <tr>
                <td>nom</td>
                <td><?php echo($nom)?></td>
            </tr>
            <tr>
                <td>prenomo</td>
                <td><?php echo($prenom)?></td>
            </tr>
            <tr>
                <td>email</td>
                <td><?php echo($email)?></td>
            </tr>
            <tr>
                <td>photo</td>
                <td><img src="image/<?php echo($nomphoto)?>" ></td>
            </tr>
           
        </table>
        <a href="afficheEleve.php">afficheEleve</a>
    </body>
</html>