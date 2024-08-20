<?php
session_start();
require_once 'db.php';
// Je vérifie si j'ai bien une session membre
var_dump($_SESSION['membre']);
if(!empty($_SESSION['membre']))
{
    $req = $dbh->query('SELECT * FROM membres WHERE ID = '.intval($_SESSION['membre']));  //intval pour sécuriser
    // Je vérifie si une ligne est retourné
    if($req->rowCount() == 1){
        $membre = $req->fetch();  //on récupère les fichiers de la base de données en fichiers php
        echo '<pre>';
        print_r($membre);
        echo '</pre>';
        echo '<a href="deconnexion.php">Se deconnecter</a>'; // le lien pour se deconnecter
    }else{
        echo 'membre introuvable';
        //header('location:https://www.google.fr');
    }
}
else
{
    echo 'accès interdit';
}
?>