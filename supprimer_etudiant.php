<?php
require 'connexion_bdd.php';
$getid = $_GET['id'];
$req = "DELETE FROM etudiants WHERE  id = $getid";
mysqli_query($connexion, $req);

header('Location: afficher_etudiants.php');
