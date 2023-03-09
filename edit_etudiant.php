<?php
require 'connexion_bdd.php';
$getid = $_GET['id'];
$req = " SELECT * FROM etudiants WHERE  id = $getid";
$rs =  mysqli_query($connexion, $req);
$et = mysqli_fetch_assoc($rs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification etudiant</title>
</head>

<body>
    <form method="POST" action="modifier_etudiant.php?id=<?= $getid ?>" enctype="multipart/form-data">
        <table>

            <tr>
                <td>Nom:</td>
                <td><input type="text" name="nom" value="<?= $et['nom'] ?>" /></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?= $et['email'] ?>" /></td>
            </tr>
            <tr>
                <td>Photo:</td>

                <td><input type="file" name="photo" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="enregistrer" /></td>
            </tr>
        </table>
    </form>
</body>

</html>