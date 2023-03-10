<?php
require 'connexion_bdd.php';
require 'verification_session.php';
require 'verification_session_2.php';
$getid = $_GET['id'];
$req = "DELETE FROM etudiants WHERE  id = $getid";
mysqli_query($connexion, $req);

header('Location: afficher_etudiants.php');

