<?php 
    require 'app/app.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos articles</title>
    <link rel="icon"  type="image/x-icon" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="js/register.js"></script>
</head>
<body>
    <?php require 'partials/header.php'; ?>
<?php require_once("app/app.php"); ?>
<?php if(isset($errors)) var_dump($errors); ?>
<style>label { display:block}</style>
<form class="error-form register-form" action="?action=inscription" method="POST">

<!-- début du formulaire d'inscription -->

<h3>Inscription</h3>
    <label>Nom</label>
    <input class="form-label" type="text" name="nom" id="nom">
    <label>Prénom</label>
    <input type="text" name="prenom" id="prenom">
    <label>Date de naissance</label>
    <input class="form-label" type="date" name="dateDeNaissance" id="dateDeNaissance">
    <label for="">Adresse mail</label>
    <input class="form-label" type="email" name="email" id="email">
    <label>Identifiant</label>
    <input class="form-label" type="text" name="username" id="username">
    <label>Mot de passe</label>
    <input class="form-label" type="password" name="mdp" id="mdp">
    <label>Répétez votre mot de passe</label>
    <input class="form-label" type="password" name="mdpverif" id="mdpverif">
    <div>
    <button class="btn_register-login" type="submit">Je m'inscris</button>
    <div>
    <a href="login.php">Vous avez déjà un compte?</a>
    </div>
</form>
</div>
