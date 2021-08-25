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
        
        <table>
        <caption>Liste des artistes </caption>
            <thead>
                <tr>
                    <th> Détail Artistes </th>
                    <!-- <th> Artistes </th> -->
                    <th> Genre </th>
                </tr>
		    </thead>
                
            <?php foreach($afficherArtistes as $artiste): ?>

                <tr>
                    <td><a href= "/<?= REQ_TYPE ?>/<?= REQ_TYPE_ID ?>/<?=$artiste['nomArtiste']?>"> <?=$artiste['nomArtiste']?> </a></td>
                    <td><?= $artiste['nomGenre'] ?></td>
                </tr>
                    
            <?php endforeach ?>   

    </table>  

        <script src="" async defer></script>
    </body>
</html>