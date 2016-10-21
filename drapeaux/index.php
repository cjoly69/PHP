<?php session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeu questions/réponses</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="panel panel-default"style="width:50%; margin:0 auto;">
      <div class="panel panel-default">
        <div class="panel-heading ">
          <h3 class="text-center">Question #1</h3>
        </div>
      </div>
          <div class="panel panel-body center-block">
            <form class="" action="traitement.php" method="POST">
              <p class="text-center">
                Lequel de ces drapeaux est celui de l'Uruguay ?
              </p>
              <p>
                <?php
                $_SESSION['uruguay'] = "Bravo";
                ?>
              </p>

              <img src="img/argentine.png" style="width : 150px; margin:8px;"alt="drapeau de l'Argentine" /><input type="radio" name="pays" value="argentine" id="">
              <img src="img/paraguay.png" style="width : 150px; margin:8px;" alt="drapeau du Paraguay" /><input type="radio" name="pays" value="paraguay" id="">
              <img src="img/uruguay.svg.png" style="width : 175px; margin:8px;" alt="drapeau de l'Uruguay" /><input type="radio" name="pays" value="uruguay" id="">
              <div class="center-block" style="width : 50px; padding-bottom : 20px;">
                <button type="submit"class="btn btn-info">Valider</button>
              </div>

            </form>
          </div>


        </div>
  </body>
</html>
