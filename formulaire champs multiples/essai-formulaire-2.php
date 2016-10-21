<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire simple</title>
  </head>
  <body>
    <form class="" action="affichage.php" method="post">
      <input type="text" name="nom" value="nom">
      <input type="text" name="prenom" value="prénom">
      <label>Ville : </label>
      <input type="radio" name="ville" value="Paris" id="paris"><label for="paris">Paris</label>
      <input type="radio" name="ville" value="Lyon" id="lyon"><label for="lyon">Lyon</label>
      <input type="radio" name="ville" value="Marseille" id="marseille"><label for="marseille">Marseille</label>
      <input type="checkbox" name="majeur" value="majeur"><label for="majeur">Majeur</label>
      <button type="submit" name="button">Valider</button>
    </form>
  </body>
</html>
