<?php 

    $title = "Bienvenue";
    ob_start();
    require ROOT."views/welcome.php";
    $content = ob_get_clean();
    require ROOT."views/includes/template.php";

?>