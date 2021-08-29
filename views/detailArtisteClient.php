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
        <link rel="text/javascript" href="../bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
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
            </tbody>
        </table>

        <br />
    </body>
</html>