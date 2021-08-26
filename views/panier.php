<?php 
    $title = "Panier";
    $content = "Panier";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        
        <h1>PANIER</h1>

        <form method="POST">
        <p><label for="achatMusique">Numéro de la musique :</label> <input type="text" name="achatMusique" id="achatMusique" required></p>
        <p><input type="submit" name="envoyer"></p>
        </form>

        <table>
                <thead>
                    <th>Numéro de musique</th>
                    <th>Artiste</th>
                    <th>Titre</th>
                    <th>Prix</th>
                </thead>

                <?php foreach($getMusic as $music): ?>
                    <tr>
                        <td><?= $music['idMusique']?></td>
                        <td><?= $music['nomArtiste']?></td>
                        <td><?= $music['titre']?></td>
                        <td><?= $music['prix'] ?> euros </td>
 
                    </tr>
                <?php endforeach ?>

                <?php var_dump($_SESSION['panier']) ?>


                

                    <!-- <form method="POST" name="panierVide">  
            <p>
                <label for="choix">Voulez-vous vider le panier ?  </label>
                <input type="radio" name="viderPanierOui" value="oui" ><label for="viderPanierOui" >Oui</label>
                <input type="radio" name="viderPanierNon" value="non" checked="checked"><label for="viderPanierNon">Non</label>
                <input type="submit" value="Choix" onClick="noDelete(formdelete)" >
            </p> -->

        </form>
               
        </table>
    </body>
</html>