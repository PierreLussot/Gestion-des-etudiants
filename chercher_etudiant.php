<?php
require 'connexion_bdd.php';
$mc = null;
if (isset($_POST['motCle'])) {
    $mc = $_POST['motCle'];
}
$req = "SELECT * FROM etudiants WHERE nom LIKE '%$mc%'";
$rs =  mysqli_query($connexion, $req);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des etudiants</title>
    <link rel="style.css" href="">
</head>

<body>
    <form method="POST" action="chercher_etudiant.php">

        Mot clé : <input type="text" name="motCle">
        <input type="submit" value="Cherhcer">
    </form>

    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Photo</th>
            <th></th>
            <th></th>


        </tr>

        <?php while ($et = mysqli_fetch_assoc($rs)) :

        ?>
            <tr>
                <td><?= $et['nom'] ?></td>
                <td><?= $et['email'] ?></td>
                <td> <img src="images/<?= $et['photo'] ?>" alt=""> </td>
                <td> <a href="supprimer_etudiant.php?id=<?= $et['id'] ?>">Supprimer</a> </td>
                <td> <a href="edit_etudiant.php?id=<?= $et['id'] ?>">Editer</a> </td>

            </tr>
        <?php endwhile ?>


    </table>
</body>

</html>