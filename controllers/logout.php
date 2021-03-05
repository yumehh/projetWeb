<?php
session_unset();
session_destroy();
$_SESSION['message'] = "Vous avez été déconnecté";
header("Location: /");
?>