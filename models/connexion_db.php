<?php 

$bdd = 'projetweb';
$user = 'root';
$pass = '';

try{
    $pdo = new PDO('mysql:host=localhost;dbname='.$bdd, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo '</br>';
        echo 'connexion réussie';

}catch(PDOException $e){
    echo 'Erreur : ' .$e->getMessage();
}

?>
