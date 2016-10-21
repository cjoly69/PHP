<!-- mail
mot de passe
confirmation de mot de passe
checkbox : j’ai pas lu mais je suis d’accord -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>form_inscr</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  </head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-color--grey-100">
    	<main class="mdl-layout__content">
    		<div class="mdl-card mdl-shadow--6dp">
    			<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
    				<h2 class="mdl-layout mdl-card__title-text">Inscription</h2>
    			</div>
    	  	<div class="mdl-card__supporting-text">
    				<form action="index.php" method="post">
    					<div class="mdl-textfield mdl-js-textfield">
    						<input class="mdl-textfield__input" type="text" id="username" />
    						<label class="mdl-textfield__label" for="username">Mail</label>
    					</div>
    					<div class="mdl-textfield mdl-js-textfield">
    						<input class="mdl-textfield__input" type="password" id="userpass1" />
    						<label class="mdl-textfield__label" for="userpass">Mot de passe</label>
    					</div>
              <div class="mdl-textfield mdl-js-textfield">
    						<input class="mdl-textfield__input" type="password" id="userpass2" />
    						<label class="mdl-textfield__label" for="userpass">Confirmez votre mot de passe</label>
    					</div>
              <label class="mdl-checkbox mdl-js-checkbox" for="checkbox1">
                <input type="checkbox" id="checkbox1" class="mdl-checkbox__input" checked>
                <span class="mdl-checkbox__label">J'adhère !</span>
             </label>
    				</form>
    			</div>
    			<div class=" mdl-layout mdl-card__actions mdl-card--border">
    				<button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Validez</button>
    			</div>
    		</div>
    	</main>
    </div>
  </body>
</html>
