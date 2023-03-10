<?php
$titre = "Gestion des etudiants";
require 'utilitaire/header.php';
?>
<div class="d-flex flex-row justify-content-center mt-5">
    <form action="valider.php" method="POST" enctype="multipart/form-data">
        <form class="mb-3">
            <div class="mb-3">
                <label class="form-label">Login</label>
                <input type="text" name="login" class="form-control">

            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="mdp" class="form-control">
            </div>

            <button type="submit" name="valider" class="btn btn-primary">Enregister</button>
        </form>
</div>
<?php
require 'utilitaire/footer.php';
?>