<?php
$nom = isset($_POST['nom'])?$_POST['nom']: ' non renseigné';
echo "<h1>Votre nom est :".$nom."</h1>";
$prenom = isset($_POST['prenom'])?$_POST['prenom']: ' non renseigné';
echo "<h1>Votre prénom est :".$prenom."</h1>";
$ville = isset($_POST['ville'])? $_POST['ville']: ' Veuillez choisir une ville';
  echo "<h2>Domicile :".$ville."</h2>";
$majeur = isset($_POST['majeur'])? $_POST['majeur']: ' Vous êtes mineur';
  echo "<h2>Age :".$majeur."</h2>";
?>
