<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Php</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="panel panel-default"style="width:50%; margin:0 auto;">
      <div class="panel panel-success">
        <div class="panel-heading ">
          <h3>Identification</h3></div></div>
          <div class="panel panel-body">
            <form class="" action="traitement.php" method="post">
              <div class="form-group">
                <label for="id">Identifiant : </label>
                <input type="text" class="form-control" name="id">
              </div>
              <div class="form-group">
                <label for="pwd">Mot de passe : </label>
                <input type="password" class="form-control" name="pwd">
              </div>
              <button type="submit" class="btn btn-default">Entrer</button>
            </form>
          </div>
        </div>
  </body>
</html>
