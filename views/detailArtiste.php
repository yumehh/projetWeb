<?php 

    $title = $detailArtiste['nomArtiste'];
    $content = "Présentation de l'artiste";
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
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

        <table>
            <thead>
                <tr>
                    <th><?= $detailArtiste['nomArtiste'] ?></th>
                </tr>

            </thead>
            <tbody>

                <tr>
                    <td><img src="/img/<?= $detailArtiste['imageArtiste'] ?>" alt=""></td>
                </tr>
                <!-- <?= $detailArtiste['imageArtiste'] ?> -->
                <th>Description de l'artiste</th>
                <tr>
                    <td><?= $detailArtiste['descriptionArtiste'] ?></td>
                </tr>
            
                <table>
                <thead>
                    <th>Numéro de musique</th>
                    <th>Titre</th>
                    <th>Prix</th>
                </thead>

                <?php foreach($musiqueArtiste as $music): ?>
                    <tr>
                        <td><?= $music['idMusique']?></td>
                        <td><?= $music['titre']?></td>
                        <td><?= $music['prix'] ?> </td>
                    </tr>
                <?php endforeach ?>
                
        </table>

            </tbody>
        </table>

        <h4>ajout musiques </h4>
        <form method="POST">

                    <label for="titre">Titre : </label> <input type="text" name="titreMusique" required ><br />
                    <label for="prix">Prix : </label> <input type="text" name="prixMusique" required > <br /><br />
                    <input type="submit" name="envoyer">

                </form>
         </form>
    </body>
</html>