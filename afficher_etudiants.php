<?php
$titre = "Liste des etudiants";
require 'utilitaire/header.php';
require 'connexion_bdd.php';


$req = "SELECT * FROM etudiants";
$rs =  mysqli_query($connexion, $req);

?>

<div class="d-flex flex-row justify-content-evenly flex-wrap mt-3 ">
    <?php while ($et = mysqli_fetch_assoc($rs)) : ?>

        <div class="card my-3" style="width: 18rem;">
            <img src="images/<?= $et['photo'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $et['nom'] ?> </h5>
                <p class="card-text"><?= $et['email'] ?></p>
                <a href="supprimer_etudiant.php?id=<?= $et['id'] ?>" class="btn btn-danger">Supprimer</a>
                <a href="edit_etudiant.php?id=<?= $et['id'] ?>" class="btn btn-warning">Modifier</a>
            </div>
        </div>

    <?php endwhile ?>
</div>







</body>
<?php require 'utilitaire/footer.php'; ?>

</html>