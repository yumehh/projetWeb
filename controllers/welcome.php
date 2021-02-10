<?php 

    $title = "Bienvenue";
    ob_start();
    require "../views/welcome.php";
    $content = ob_get_clean();
    require "../views/includes/template.php";

?>