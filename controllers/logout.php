<?php
session_unset();
session_destroy();
header("Location: ". '/projet/views/welcome.php');
?>