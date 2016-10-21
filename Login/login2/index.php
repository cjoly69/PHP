<!-- d'après correction1 avec inclusion du header-->
<?php

// définition de constantes pour les données de l'utilisateur fictif.
// en "vrai" on récupérera ces données dans une base de données
define('USER_MAIL', "toto@gmail.com");
define('USER_PASS', "azerty");
define('USER_LASTNAME', "Dupont");
define('USER_FIRSTNAME', "Toto");

$errorMessage = '';
$savedLogin = '';

// vérification : est ce que le mot de passe et le login ont été transmis via POST
if (isset($_POST["login"]) && isset($_POST["password"])) {

    // si les infos d'identification ont été transmise
    // stockage du login / pass
    $login = $_POST["login"];
    $password = $_POST["password"];

    // vérification si infos transmises correspondent à infos attendues
    if ($login == USER_MAIL && $password == USER_PASS) {
        /* si correspondance :
            on crée un objet $user qui contient les infos qu'on connait pour l'utilisateur
         (comme si cela venait d'une base de données) */
        $user = [
            "nom" => USER_LASTNAME,
            "prenom" => USER_FIRSTNAME,
            "mail" => USER_MAIL
        ];
        $loginFailed = false;
    } else {
        // sinon si le login/pass ne correspondent pas on crée une variable pour indiquer
        $loginFailed = true;
        $savedLogin = 'value="'.$login.'"';
        $errorMessage = '<div class="alert alert-danger">Erreur d\'identification</div>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Identification</title>

    <!-- BOOTSTRAP & JQuery-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <style>
        #login-form {
            margin: 40px auto;
            width: 360px;
        }

        form {
            margin: 10px;
        }

        .fields {
            padding: 16px;
        }
        header{
            background: #2ce;
            color: white;
            width: 100%;
            height: 10vh;
        }
    </style>
</head>
<body>

  <header>
    <?php include('header.php'); ?>
  </header>


<?php
if (!isset($user)) {
    ?>
    <div id="login-form" class="panel panel-default">

        <div class="panel-heading">
            Identification
        </div>
        <div class="fields">

            <!-- si le login a échoué : afficher le message d'erreur -->
            <?php /*if (isset($loginFailed)) */ echo $errorMessage; ?>

            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div>

                    <label for="chpLogin">
                        Identifiant
                        <input id="chpLogin" type="text" name="login" <?php echo $savedLogin; ?>/>
                    </label>
                </div>
                <div>

                    <label for="chpPassword">
                        Mot de passe
                        <input id="chpPassword" type="password" name="password"/>
                    </label>
                </div>

                <button type="submit">Entrer</button>
            </form>
        </div>
    </div>
    <?php
} else // si l'identification a réussie
{
    echo "<header><a href=\"index.php\" style = \"width : auto; height : 20px; background-color: #CCC; float : right;margin-right : 10px;\">Déconnexion</a></header>";

    echo "<h1>Bienvenue " . $user['prenom'] . " " . $user['nom'] . "</h1>";
}
?>

</body>
</html>
