<?php
require 'connexion_bdd.php';

$nom = $_POST['nom'];
$email = $_POST['email'];
$nom_photo = $_FILES['photo']['name'];
$nom_photo_temporaire = $_FILES['photo']['tmp_name'];
move_uploaded_file($nom_photo_temporaire, "images/$nom_photo");

$req = "INSERT INTO etudiants(nom,email,photo) VALUES('$nom','$email','$nom_photo')";
mysqli_query($connexion, $req);

header('Location: afficher_etudiants.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout des etudiants</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>Nom</td>
            <td><?= $nom ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $email ?></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td> <img src="images/<?= $nom_photo  ?>" alt=""> </td>
        </tr>
    </table>
</body>

</html>