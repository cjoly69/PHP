<!-- le message de bienvenue après la connexion -->
<?php
echo "<header><a href=\"index.php\" style = \"width : auto; height : 20px; background-color: #CCC; float : right;margin-right : 10px;\">Déconnexion</a></header>";

echo "<h1>Bienvenue " . $user['prenom'] . " " . $user['nom'] . "</h1>";
?>
