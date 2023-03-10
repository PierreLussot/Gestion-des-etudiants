<?php
require 'verification_session.php';
require 'verification_session_2.php';
$titre = "Saisi des etudiants";
require 'utilitaire/header.php';

?>
<div class="">
  <div class="d-flex flex-row justify-content-center mt-5">
    <form action="ajouter_etudiant.php" method="POST" enctype="multipart/form-data">
      <form class="mb-3">
        <div class="mb-3">
          <label class="form-label">Nom</label>
          <input type="text" name="nom" class="form-control">

        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Photo</label>
          <input type="file" name="photo" class="form-control">
        </div>

        <button type="submit" name="enregistrer" class="btn btn-primary">Enregister</button>
      </form>
  </div>
</div>
<?php
require 'utilitaire/footer.php';
?>