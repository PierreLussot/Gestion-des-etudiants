<?php
require 'connexion_bdd.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link " href="saisie_etudiant.php">Ajouter</a>
                    <a class="nav-link" href="afficher_etudiants.php">Liste</a>
                </div>
            </div>

            <?php if (isset($_SESSION['niv'])) : ?>
                <form method="POST" class="d-flex me-3"  action="afficher_etudiants.php">
                    <input class="form-control me-2" type="search" name="motCle" placeholder="Rechercher" >
                    <button class="btn btn-outline-success" name="chercher" type="submit">Chercher</button>
                </form>
                <button class="btn btn-danger d-flex "><a class="nav-link" href="deconnexion.php">Deconnexion</a></button>
            <?php endif ?>
        </div>
    </nav>