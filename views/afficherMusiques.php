<?php 

$title = "Afficher Musiques";
$content = "Afficher les musiques";
//include 'includes/template.php';

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

        <h3>Afficher les musiques </h3>
        
    <table class="table">
        <thead class="thead-dark">
        <tr>
        <th scope="col">Numéro de musique</th>
        <th scope="col">Titre</th>
        <th scope="col">Prix</th>
        <th scope="col">Artiste</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
        </tr>
        </thead>
        <tbody>
                <?php foreach($afficherMusics as $music): ?>
                    <tr>
                        <td><?= $music['idMusique']?></td>
                        <td><?= $music['titre']?></td>
                        <td><?= $music['prix'] ?> </td>
                        <td><?= $music['nomArtiste'] ?> </td>
                        <td><a href="/<?= REQ_TYPE ?>/modifierMusics/<?=$music['idMusique'] ?>"> Modifier </a> </td>
                        <td> <a href="/<?= REQ_TYPE ?>/supprimerMusics/<?=$music['idMusique'] ?>">Supprimer </a></td>
                    </tr>
                <?php endforeach ?>
        </tbody>
    </table>
    </body>
</html>