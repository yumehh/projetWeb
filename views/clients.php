<?php
$title="Bienvenue";
$content="Bienvenue sur votre page";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$title?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="text/javascript" href="../../bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="../../bootstrap-5.1.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/style.css">
    </head>
    <body>

        <h1><?=$content?></h1>
        
        <?php echo "Bonjour " . $_SESSION['pseudo'] ?>
        <br /><br />
        
        <?= include 'includes/menu_client.php' ?>  
    </body>
</html>