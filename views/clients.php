<?php
$title="Bienvenue";
$content="Bienvenue sur votre page";

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
        <title><?=$title?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

        <h1><?=$content?></h1>

        <?php echo "Bonjour " . $_SESSION['pseudo'] ?><br /><br />

        <?= include 'includes/menu_client.php' ?>

        <!-- <?php foreach($afficherClient as $client): ?>
            <td><?= $client['pseudo']?> : <?=$client['email']?></td>
        <?php endforeach ?> -->
        
        <script src="" async defer></script>
    </body>
</html>