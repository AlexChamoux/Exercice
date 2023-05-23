<!DOCTYPE html>
<html lang="FR">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Gestion de bibliotheque en ligne</title>
	<!-- BOOTSTRAP CORE STYLE  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- FONT AWESOME STYLE  -->
	<link href="/css/style.css" rel="stylesheet" />
	<!-- CUSTOM STYLE  -->
	<link href="./css/style.css" rel="stylesheet" />
</head>

<body>

	<!-- On insere le titre de la page (LOGIN UTILISATEUR) -->
	<div class="container">
		<div class="row">
			<div class="col">
				<h3>LOGIN CHAT</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 offset-md-3">
				<form method="post">
					<div class="form-group">
						<label>Entrez votre pseudo</label>
						<input type="text" name="pseudo" pattern="^[A-Za-z0-9.+_@!?&§%]+$" maxlength="50" required>
					</div>
					<div class="form-group">
						<label>Entrez votre mot de passe</label>
						<input type="password" name="password" pattern="^[A-Za-z0-9.+_@!?&§%]+$" maxlength="150" required>
						<p>
							<a href="/Projet_Oryx/chatmvc/login/forgotPassword">Mot de passe oublié ?</a>
						</p>
					</div>
					<!-- <div class="form-group">
						<label>Code de vérification</label>
						<input type="text" name="vercode" required style="height:25px;">&nbsp;&nbsp;&nbsp;<img src="/Projet_Oryx/chatmvc/views/login/captcha.php">
					</div> -->
					<button type="submit" name="submit" class="btn btn-info">LOGIN</button>&nbsp;&nbsp;&nbsp;<a href="/Projet_Oryx/chatmvc/login/signup">Créer un compte</a>
				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>