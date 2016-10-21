<?php
$nom = isset($_GET['nom'])?$_GET['nom']: 'non renseigné';
echo "<h1>Votre nom est :".$nom."</h1>";
