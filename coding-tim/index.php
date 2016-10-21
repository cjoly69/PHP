<?php session_start();
$_SESSION['counter'] = 0;

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- methode requete http -->
    <form class="" action="action.php" method="post">
      <h1>
        1. Quelle est la couleur du cheval blanc de Président Hollande?
      </h1>
      <fieldset>
      <input type="text" name="rps" placeholder="réponse" id="rps">
      </fieldset>
      <button type="submit" name="button">Valider</button>
    </form>
  </body>
</html>
