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
    
</head>
<body>
    <?php require 'partials/header.php'; ?>
<?php require_once("app/app.php"); ?>
<?php if(isset($errors)) var_dump($errors); ?>
<style>label { display:block}</style>

<!-- début du formulaire de connexion -->

<form class="register-form" action="?action=login" method="POST">
    <h3>Connexion</h3>
    <label>Adresse mail</label>
    <input class="form-label" type="email" name="email">
    <label>Mot de passe</label>
    <input class="form-label" type="password" name="password">
    <div>
    <button class="btn_register-login" type="submit">Se connecter</button>
    </div>
    
</form>
