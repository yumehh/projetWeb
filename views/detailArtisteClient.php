<?php 

    $title = $detailArtiste['nomArtiste'];
    $content = "Présentation de l'artiste";
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
                    <th>Titre</th>
                    <th>Prix</th>
                </thead>
                <?php foreach($musiqueArtiste as $music): ?>
                    <tr>
                        <td><?= $music['titre']?></td>
                        <td><?= $music['prix'] ?> </td>
                    </tr>
                <?php endforeach ?>   
        </table>
            </tbody>
        </table>

    </body>
</html>