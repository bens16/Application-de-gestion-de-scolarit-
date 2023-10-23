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
$id=$_GET['id'];
$sql="SELECT * FROM eleve where id=$id";
$req= $connexion->query($sql);
/*$id=$_GET['id'];
$sql_u='select * from eleve where id=$id';
$re= $connexion->query($sql_u);*/
$el=$req->fetch_assoc();
?>

<html >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="s.css">
    </head>
    <body>
           
        <form  method="POST" action="modifier.php" enctype="multipart/form-data">
        <table>
        <tr>
                <td>id:</td>
                <td><input type="text" name="id" VALUE="<?php echo($el['id'])?>" readonly="true"></td>
        </tr>
            <tr>
                <td>nom:</td>
                <td><input type="text" name="nom" VALUE="<?php echo($el['nom'])?>"></td>
            </tr>
            <tr>
                <td>prenom:</td>
                <td><input type="text" name="prenom" VALUE="<?php echo($el['prenom'])?>"></td>
            </tr>
            <tr>
                <td>email:</td>
                <td><input type="text" name="email" VALUE="<?php echo($el['email'])?>"></td>
            </tr>
            <tr>
                <td>photo:</td>
               
                <td>
                <img src="image/<?php echo($el['photo'])?>" alt="">
                    <input type="file" name="photo">
                </td>
                
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" VALUE="enregistrer"></td>
            </tr>
            </table>
        </form>
        
        </body>
    </head>
</html>
<?php


?>
