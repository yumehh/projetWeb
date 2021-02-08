<?php 

    include 'connexion_db.php';
/*
    $req = $pdo->prepare('INSERT INTO utilisateurs(login, motDePasse, email) values ($_POST[login], $_POST[mdp], $_POST[email])');
    $req->execute(array('login' => $_POST['login'],
                        'motDePasse' => $_POST['mdp'],
                        'email' => $_POST['email']));
*/

echo '<br />';
echo 'connexion ajout';

/*
$pseudo = $_POST['login'];
$pw = $_POST['mdp'];
$mail = $_POST['email'];

$sql = 'INSERT INTO utilisateurs(pseudo, motDePasse, email) values("'.$pseudo.'", "'.$pw.'", "'.$mail.'")';
*/


$req = $pdo->prepare('INSERT INTO utilisateurs(pseudo, pwUser, email, date_inscription) VALUES (?, ?, ?, CURDATE())');

if(isset($_POST['pseudo']) and isset($_POST['mdp']) and isset($_POST['email'])){

    $pass_hash = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    $req->execute(array($_POST['pseudo'], $pass_hash, $_POST['email']));

}

?>