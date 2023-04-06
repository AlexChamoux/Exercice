<?php
session_start();

include('includes/config.php');
$MDP = password_hash("aaa",PASSWORD_DEFAULT);
error_log($MDP);

if(isset($_POST["submit"])) {
    if($_SESSION["vercode"] != $_POST["vercode"]) {
        echo "<script>alert('Le code captcha saisi est incorrect. Veuillez réessayer.')</script>";
    } else {

        $Nom = $_POST["name"];
        $Password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $confirm_password = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);
        $NumMobile = $_POST['mobile'];
        $Email = $_POST["email"];
        

        
        
        $query = "INSERT INTO admin(Nom,Password,NumMobile,Email) VALUES(:Nom,:Password,:NumMobile,:Email)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':Nom',$Nom,PDO::PARAM_STR);
        $stmt->bindParam(':Password',$Password,PDO::PARAM_STR);
        $stmt->bindParam(':NumMobile',$NumMobile,PDO::PARAM_STR);
        $stmt->bindParam(':Email',$Email,PDO::PARAM_STR);
        $stmt->execute();

        $last_id = $dbh->lastInsertId();

        if ($last_id) {
            echo "<script>alert('Votre compte a été créé avec succès.')</script>";
            echo "<script>window.location.href = 'pageadmin.php';</script>";
            exit();
        } else {
            echo "<script>alert('Une erreur est survenue lors de la création de votre compte. Veuillez réessayer.')</script>";
            echo "<script>window.location.href = 'index.php';</script>";
            exit();
        }
}
}
?>

<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>Gestion des Inscriptions en Ligne | Signup</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <script type="text/javascript">
        function valid() {
        let password = document.getElementById("password").value;
        let confirm_password = document.getElementById("confirm_password").value;
        if (password != confirm_password) {
        alert("Les mots de passe ne sont pas identiques !");
        return false;
        } else {
        return true;
        }
        };

        
    </script>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">CREER UN COMPTE</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form name="signup" action="signup.php" method="post" onsubmit="return valid()">
					<div class="form-group">
						<label for="name">Nom complet</label>
						<input type="text" id="name" name="name" placeholder="Entrez votre nom complet" required />
					</div>
					<div class="form-group">
						<label for="mobile">Numéro de portable</label>
						<input type="text" id="mobile" name="mobile" placeholder="Entrez votre numéro de portable" required />
					</div>
					<div class="form-group">
						<label for="email">Adresse email</label>
						<input type="email" id="email" name="email" placeholder="Entrez votre adresse email" required />
						<span id="email-availability-status"></span>
					</div>
					<div class="form-group">
						<label for="password">Mot de passe</label>
						<input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required />
					</div>
					<div class="form-group">
						<label for="confirm_password">Confirmez votre mot de passe</label>
						<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmez votre mot de passe" required />
						<span id="confirm-status"></span>
					</div>
					<div class="form-group">
						<label for="vercode">Code captcha</label>
						<input type="text" id="vercode" name="vercode" maxlength="5" placeholder="Entrez le code captcha" required />
						<img src="captcha.php" />
					</div>
					<div class="form-group">
						<button type="submit" name="submit" id="signup-btn" class="btn btn-primary">Créer un compte</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
