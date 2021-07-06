<?php 

    $title = "Panel ADMIN";
    $content = "Panel ADMIN";
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
        <title><?php echo $title ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>PAGE ADMIN</h1>
        
        <?php echo "Bonjour " . $_SESSION['pseudo'] ?> 

        <br /><br />

        <a href="/<?= REQ_TYPE ?>/afficherArtistes">Afficher artistes</a><br />
        <a href="/<?= REQ_TYPE ?>/ajoutArtistes">Ajouter artistes</a><br /> 
        <a href="/<?= REQ_TYPE ?>/restaurerArtistes">Restaurer des artistes</a><br />
        <!-- <a href="/<?= REQ_TYPE ?>/ajouterMusiques">Ajouter des musiques</a><br/> -->
        <a href="/<?= REQ_TYPE ?>/afficherMusiques">Afficher les musiques</a><br />
        <a href="/<?= REQ_TYPE ?>/restaurerMusiques">Restaurer les musiques</a><br >

        <a href="">Confirmer - annuler commandes</a><br />
        <a href="">Statistiques des commandes</a><br />
        <a href="/logout">Déconnexion</a>


    </body>
</html>