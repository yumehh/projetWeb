<?php
session_start();
// Constante permettant de récupérer le chemin complet de la racine du projet afin de garantir la portabilité.
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
//require ROOT.'controllers/welcome.php';
//require ROOT.'controllers/login.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');
$segments = array_filter(explode('/', $uri));
// Structure URL: http://monprojet.be/{REQ_TYPE}/{REQ_TYPE_ID}/{REQ_ACTION}
// Exemple d'url: http://monprojet.be/user/admin/edit
define('REQ_TYPE', $segments[0] ??  'welcome');
define('REQ_TYPE_ID', $segments[1] ?? 'login');
define('REQ_ACTION', $segments[2] ?? Null);

$file = ROOT.'controllers/'.REQ_TYPE.'.php';
if(file_exists($file)){
    require $file;

}
else {
    require ROOT.'controllers/404.php';
}
