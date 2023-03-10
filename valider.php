<?php
$titre = "Validation";
require 'utilitaire/header.php';
require 'connexion_bdd.php';


$log = $_POST['login'];
$pass = $_POST['mdp'];
$pc = md5($pass);
$req = "SELECT * FROM users WHERE login='$log' AND password='$pc'";
$rs = mysqli_query($connexion, $req);

if ($u = mysqli_fetch_assoc($rs)) {
    session_start();
    $_SESSION['niv'] = $u['niveau'];
    header('Location: afficher_etudiants.php');
} else {
    header('Location: index.php');
}


require 'utilitaire/footer.php';
