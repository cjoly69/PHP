<!-- /*si logins et pwd définis :
- juste : "bienvenue" + $identification = true
- faux : "erreur d'identification" + $identification = false*/ -->

<?php
$id = isset($_POST['id']);
$pwd = isset($_POST['pwd']);
if (!empty($id && $pwd) && $_POST['id'] === 'Cat') {
  echo "<h1>Bienvenue ".$_POST['id']."</h1>";
}
else{
  //echo "<h1>Erreur d'identification</h1>"; // 1ere version
  header ('location: index.php');
  echo '<script language="javascript">';
  echo 'alert("message successfully sent")';
  echo '</script>';
  //$delete = "<div class=\"alert alert-danger\" role=\"alert\">Erreur d'identification</div>";
}
?>
<!-- /*si $identification != true
affichage formulaire*/ -->
