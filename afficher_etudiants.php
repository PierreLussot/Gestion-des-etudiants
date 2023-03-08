<?php
require 'connexion_bdd.php';

$req = "SELECT * FROM etudiants";
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
    <table border="1">
        <tr>
            <th>code</th>
            <th>email</th>
            <th>photo</th>

        </tr>

        <?php while ($et = mysqli_fetch_assoc($rs)) :
            echo "<pre>";
            print_r($et);
            echo "</pre>";
        ?>
            <tr>
                <td><?= $et['nom'] ?></td>
                <td><?= $et['email'] ?></td>
                <td> <img src="images/<?= $et['photo'] ?>" alt=""> </td>
            </tr>
        <?php endwhile ?>




        <tr>
            <td>Photo</td>
            <td> <img src="images/<?= $nom_photo  ?>" alt=""> </td>
        </tr>
    </table>
</body>

</html>