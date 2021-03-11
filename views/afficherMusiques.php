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

        <table>
            <caption>Liste des musiques</caption>
                <thead>
                    <th>Numéro de musique</th>
                    <th>Titre</th>
                    <th>Prix</th>
                </thead>

                <?php foreach($afficherMusics as $music): ?>
                    <tr>
                        <td><?= $music['idMusique']?></td>
                        <td><?= $music['titre']?></td>
                        <td><?= $music['prix'] ?> </td>
                        <td><a href="/<?= REQ_TYPE ?>/modifierMusics/<?=$music['idMusique'] ?>"> Modifier </a> </td>
                        <td> <a href="/<?= REQ_TYPE ?>/supprimerMusics/<?=$music['idMusique'] ?>">Supprimer </a></td>
                    </tr>
                <?php endforeach ?>

        </table>
        
        <script src="" async defer></script>
    </body>
</html>