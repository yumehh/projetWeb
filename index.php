<?php
session_start();
// Constante permettant de récupérer le chemin complet de la racine du projet afin de garantir la portabilité.
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
require ROOT.'controllers/welcome.php';
//require ROOT.'models/users.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');
$segments = array_filter(explode('/', $uri));
// Structure URL: http://monprojet.be/{REQ_TYPE}/{REQ_TYPE_ID}/{REQ_ACTION}
// Exemple d'url: http://monprojet.be/user/admin/edit
define('REQ_TYPE', $segments[0] ?? 'welcome');
define('REQ_TYPE_ID', $segments[1] ?? 'controllers');
define('REQ_ACTION', $segments[2] ?? 'index');

$file = ROOT.'controllers/'.REQ_TYPE.'.php';
if(file_exists($file)){
    require $file;
    # new \Projet\Controller\User();
    $controller = '\Projet\Controllers\\'.ucfirst(REQ_TYPE);
    $controller = new $controller();
    $method = REQ_ACTION;
    if (method_exists($controller, $method)){
        $controller->$method(REQ_TYPE_ID);
    } else {
        # Call 404
    }
}
else {
    require ROOT.'controllers/404.php';
}
