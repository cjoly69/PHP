<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>page 3</title>
  </head>
  <body>
    <?php
    $solution = [7, "sept"];
    $rps = strtolower($_POST['rps']);
    if ($rps!= "") {
      if ($rps == $solution[0] OR $rps == $solution[1]) {
        echo "<h1>Bravo ! Il y a ".$solution[0]." nains dans la troupe</h1>";
        $_SESSION['counter']++;
        echo "<p>Score : ".$_SESSION['counter']." / 2</p>";
      }else {
        echo "<h1>Perdu ! La réponse était ".$solution[0]."</h1>";
      }echo "<h2>Terminé</h2>";
    }

    ?>
  </body>
</html>
