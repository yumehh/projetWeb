<?php 
    $title = "Panel ADMIN";
    $content = "Panel ADMIN";
?>

<!DOCTYPE html>

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
        <?php include 'includes/menu_admin.php' ?>

        <br /><br />

    </body>
</html>