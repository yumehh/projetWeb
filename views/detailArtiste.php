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
                <th>Description de l'artiste</th>
                <tr>
                    <td><?= $detailArtiste['descriptionArtiste'] ?></td>
                </tr>

                <table class="table">
                <thead class="thead-dark">
                    <th scope="col">Numéro de musique</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Prix</th>
                </thead>

                <?php foreach($musiqueArtiste as $music): ?>
                    <tr>
                        <td><?= $music['idMusique']?></td>
                        <td><?= $music['titre']?></td>
                        <td><?= $music['prix'] ?> euros</td>
                    </tr>
                <?php endforeach ?>

                </table>
            </tbody>
        </table>


        <h4>ajout musiques </h4>
        <form method="POST">

                    <label for="titre">Titre : </label> <input type="text" class="form-control" name="titreMusique" required ><br />
                    <label for="prix">Prix : </label> <input type="text" class="form-control" name="prixMusique" required > <br /><br />
                    <button type="submit" class="btn btn-primary">Confirmer</button>
         </form>

    </body>
</html>
