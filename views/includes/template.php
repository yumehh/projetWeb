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
    
    
        <h3>Menu de navigation</h3>
        <nav>
            <li><a href='views/welcome.php'>Page d'accueil</a></li>
            <li><a href='inscription.php'>Inscription</a></li>
            <li><a href='login.php'>Login</a></li>
            <li><a href='liste_artiste.php'>Artistes</a></li>
        </nav>
        
        <h1><?php echo $content ?></h1>

        <script src="" async defer></script>
    </body>
</html>