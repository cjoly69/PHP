<?php
// header('location:index.php');
// Le programme n’acceptera qu’une seule réponse et affichera le nombre de bonnes réponses après la dernière question.
session_start();
$_SESSION['uruguay'] = "Bravo";
//$_SESSION[''] = "";

$checkPays = $_POST["pays"];
$uruguay = "uruguay";
if ($checkPays===$uruguay) {
  echo $_SESSION['uruguay'];
}else {
  echo 'Perdu';
}
 ?>
