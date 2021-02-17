<?php
session_unset();
session_destroy();
header("Location: ". '/projet/controllers/welcome.php');
?>