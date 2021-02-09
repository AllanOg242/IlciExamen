<?php 
session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="public/css/style.css">
  <title>Document</title>
</head>
<body>
  <header class="text-center">
          <!-- Image and text -->
        <h1 class="text-left" style=""><a href="index.php">LIBRAIRIE ILCI-IESIG</a> 
          <?php if(isset($_SESSION['user'])) echo $_SESSION['user']['nom']." ".$_SESSION['user']['prenom']; ?>
        </h1>
       
       <?php if(isset($_SESSION['user']))
      { ?>
        <a href="/mesprojets/php ilci/ilciExamen/accueil" class="btn btn-success">Accueil</a>
        <a href="/mesprojets/php ilci/ilciExamen/article" class="btn btn-success">Article</a>
        <a href="/mesprojets/php ilci/ilciExamen/membre" class="btn btn-success">Membre</a>
        <a href="/mesprojets/php ilci/ilciExamen/gestDeconnexion" class="btn btn-success">Deconnexion</a>
       <?php
        } 
        else
      { ?>
        <a href="/mesprojets/php ilci/ilciExamen/gestInscription" class="btn btn-success">Inscription</a>
        <a href="/mesprojets/php ilci/ilciExamen/gestConnexion" class="btn btn-success">Connexion</a>   
     <?php } ?>

  </header><br/><br/>



  <main class="container-fluid">
