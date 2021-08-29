<?php 
    $title = "Achat";
    $content = "Achat";
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
        <h1>ACHAT</h1>
        
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Détail Artistes</th>
                <th scope="col">Genre</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($afficherArtistes as $artiste): ?>

            <tr>
                <td><a href= "/<?= REQ_TYPE ?>/<?= REQ_TYPE_ID ?>/<?=$artiste['nomArtiste']?>"> <?=$artiste['nomArtiste']?> </a></td>
                <td><?= $artiste['nomGenre'] ?></td>
            </tr>
                
        <?php endforeach ?>     
    </tbody>
    </table>
    </body>
</html>