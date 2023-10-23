<?php
/*
$serveur='127.0.0.1';
$utilisateur='root';
$mdp='';
$bd='bb_sco';
$connexion = new mysqli( $serveur,$utilisateur,$mdp,$bd);
*/
require_once("conn.php");
$mc="null";
if(isset($_POST['motcle']))
{
    $mc=$_POST['motcle'];

}


$sql="SELECT* FROM eleve where nom like '%$mc%'";
$re= $connexion->query($sql);
?>

<html>
    <link rel="stylesheet" href="s.css">
    <body>
        <form action="chercherEleve.php" method="POST">

        mot cle: <input type="text" name="motcle">
        <input type="submit" VALUE="chercher">
        </form>
        <table border="1" width="80%">
            <tr>
                <th>id</th><th>nom</th><th>prenom</th><th>email</th><th>photo</th><th>Editer</th><th>Suprimer</th>
            </tr>

            <?php  while($el=$re->fetch_assoc()) {?>
                <tr>
                    <td><?php echo($el['id']) ?></td>
                
                    <td><?php echo($el['nom']) ?></td>
                
                    <td><?php echo($el['prenom']) ?></td>
                
                    <td><?php echo($el['email']) ?></td>
                
                    <td><img src="image/<?php echo($el['photo']) ?>" alt=""></td>
                    <td>  <a href="Editer.php?id=<?php echo($el['id']) ?>">Editer</a></td>
                    <td> <a href="Suprimer.php?id=<?php echo($el['id']) ?>">Suprimer</a></td>
                </tr> 
                <?php } ?>
        </table>
    </body>
</html>