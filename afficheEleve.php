



<?php
//require_once("verifier1.php");
//require_once("verifier2.php");

$serveur='127.0.0.1';
$utilisateur='root';
$mdp='';
$bd='bb_sco';
$connexion = new mysqli( $serveur,$utilisateur,$mdp,$bd);
$sql='SELECT* FROM eleve';
$re= $connexion->query($sql);
?>

<html>
  <head>
    <link rel="stylesheet" href="s.css">
    
    </head>
    <body>
        <table border="1" width="80%">
            <tr>
                <th>id</th><th>nom</th><th>prenom</th><th>email</th><th>photo</th>
            </tr>

            <?php  while($el=$re->fetch_assoc()) {?>
                <tr>
                  <td><?php echo($el['id']) ?></td>
                
                    <td><?php echo($el['nom']) ?></td>
                
                    <td><?php echo($el['prenom']) ?></td>
                
                    <td><?php echo($el['email']) ?></td>
                
                    <td><img src="image/<?php echo($el['photo']) ?>" alt=""></td>
                 

                   
                      <td><a href="Editer.php?id=<?php echo($el['id']) ?>">Editer</a></td>
                      <td><a href="Suprimer.php?id=<?php echo($el['id']) ?>">Suprimer</a></td>
                      
                </tr> 
                <?php } ?>
        </table>
        <a href="saisie.html">saisie</a>
    </body>
</html>