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
        <link rel="stylesheet" href="">
    </head>
    <body>

        <h1><?=$content?></h1>
        
        <?php echo "Bonjour " . $_SESSION['pseudo'] ?>
        <br /><br />
        <?= include 'includes/menu_client.php' ?>  

        <script src="" async defer></script>
    </body>
</html>