<?php 

    $title = $detailArtiste['nomArtiste'];
    $content = "Présentation de l'artiste";
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
                
                <th>Liste de musiques </th>
                <?php foreach($artistMusics as $artistMusic): ?>
                    
                    <tr>
                        <td><?=$artistMusic['titre'] ?> : <?=$artistMusic['prix'] ?> euros</td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>

    </body>
</html>