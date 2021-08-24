<?php 

    $title = "Mon Profil";
    $content = "Mes informations";

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
        <title><?=$content?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <table>
        <caption>Mes informations </caption>
            <thead>
                <tr>
                    <th>Pseudo</th>
                    <th> Email </th>
                </tr>
		    </thead>
                

            <tr>
                <td><?= $user['pseudo'] ?></td>
                <td><?= $user['email']?></td>
            </tr>

    </table>  

        <script src="" async defer></script>
    </body>
</html>