<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Gestion de bibliotheque en ligne | Signup</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- CUSTOM STYLE  -->
    <link href="/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>    
</head>

<body>

    <!--On affiche le titre de la page : CREER UN COMPTE-->
    <div class="container">
		<div class="row">
			<div class="col">
				<h3>CRÉER UN COMPTE</h3>
			</div>
		</div>
        <div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 offset-md-3">
				<form method="post" onsubmit="return valid()">
					<div class="form-group">
						<label>Entrez votre pseudo</label>
						<input type="text" name="pseudo" placeholder="Entrez votre nom complet" pattern="^[A-Za-z0-9 '-]+$" maxlength="40" required>
					</div>                    
                    <div class="form-group">
						<label>Email :</label>
						<input type="text" name="email" placeholder="Entrez votre adresse email" onBlur="check_availability(this.value)" pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$" maxlength="40" required>
					</div>
                    <div class="form-group">
						<label>Mot de passe :</label>
						<input type="password" name="password" class="password" placeholder="Entrez votre mot de passe" pattern="^[A-Za-z0-9.+_@!?&§%]+$" maxlength="20" required>
					</div>
                    <div class="form-group">
						<label>Confirmez mot de passe :</label>
						<input type="password" name="password" class="confirm_password" placeholder="Confirmez votre mot de passe" pattern="^[A-Za-z0-9.+_@!?&§%]+$" maxlength="20" required>
					</div>
                    <!-- <div class="form-group">
						<label>Code de vérification</label>
						<input type="text" name="vercode" placeholder="Entrez le code captcha" required style="height:25px;">&nbsp;&nbsp;&nbsp;<img src="captcha.php">
					</div> -->
                    <button type="submit" name="login" class="btn btn-info">ENREGISTRER</button>
                </form>
            </div>
        </div>        
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>