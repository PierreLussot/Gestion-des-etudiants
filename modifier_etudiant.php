<?php
require 'connexion_bdd.php';
require 'verification_session.php';
require 'verification_session_2.php';
$getid = $_GET['id'];

$nom = $_POST['nom'];
$email = $_POST['email'];
$nom_photo = $_FILES['photo']['name'];
$nom_photo_temporaire = $_FILES['photo']['tmp_name'];
move_uploaded_file($nom_photo_temporaire, "images/$nom_photo");

$req = "UPDATE etudiants SET nom ='$nom',email='$email',photo='$nom_photo' WHERE id = $getid";
mysqli_query($connexion, $req);

header("Location: afficher_etudiants.php");
