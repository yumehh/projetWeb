<?php 

    if(isset($_SESSION['id']) and isset($_SESSION['pseudo'])){

        echo 'Bonjour ' . $_SESSION['pseudo'];
    }

    echo "welcome de auth";

?>