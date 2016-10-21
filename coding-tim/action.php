<?php
  session_start();
  $rps = strtolower($_POST['rps']);
  //echo "<h1>$rps</h1>";

  $solution = "blanche";

  if ($rps===$solution) {
    echo "<h1>Bravo ! la couleur du cheval est bien ".$solution."</h1>";
    $_SESSION['counter']++;
    echo "<p>Score : ".$_SESSION['counter']." / 2</p>";
    // echo ""
  }
  else {
    echo "<h1>Perdu ! La réponse était ".$solution."</h1>";
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>page 2</title>
   </head>
   <body>
     <form class="" action="action2.php" method="post">
       <h1>
         2. Combien y a-t-il de nains dans le club des 7 nains de Président Hollande?
       </h1>
       <fieldset>
       <input type="text" name="rps" placeholder="réponse" id="rps">
       </fieldset>
       <button type="submit" name="button">Valider</button>
     </form>
   </body>
 </html>
