<?php 

    $title = "Artistes";
    $content = "Ajouts de l'artiste";
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
        <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Numéro de l'Artiste</th>
      <th scope="col">Détail Artistes</th>
      <th scope="col">Genre</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($afficherArtistes as $artiste): ?>
    <tr>
        <td><?= $artiste['idArtiste']?></td>
        <td><a href= "/<?= REQ_TYPE ?>/<?= REQ_TYPE_ID ?>/<?=$artiste['nomArtiste']?>/<?=$artiste['idArtiste']?>"> <?=$artiste['nomArtiste']?> </a></td>
        <td><?= $artiste['nomGenre'] ?></td>
        <td><a href="/<?= REQ_TYPE ?>/modifierArtistes/<?=$artiste['idArtiste'] ?>/<?=$artiste['nomArtiste']?>"> Modifier </a> </td>
        <td> <a href="/<?= REQ_TYPE ?>/supprimerArtistes/<?=$artiste['idArtiste'] ?>/<?=$artiste['nomArtiste']?>">Supprimer </a></td>
    </tr>   
    <?php endforeach ?>
  </tbody>
</table>
    
    </body>
</html>