<?php

session_start();

include('includes/config.php');

if(isset($_POST['change'])){

     
     if($_SESSION["vercode"] != $_POST["vercode"]) {
          echo '<script>alert("Le code captcha est incorrect.");</script>';
     } else {
          $Email = $_POST['email'];
          $NumMobile = $_POST['mobile'];
          $Password = password_hash($_POST['password'], PASSWORD_DEFAULT);

          $query = "SELECT * FROM admin WHERE Email = :Email AND NumMobile = :NumMobile";
          $stmt = $dbh->prepare($query);
          $stmt->bindParam(':Email', $Email, PDO::PARAM_STR);
          $stmt->bindParam(':NumMobile', $NumMobile, PDO::PARAM_STR);
          $stmt->execute();

          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          if($result != 0){
               $maj = "UPDATE admin SET Password = :Password WHERE Email = :Email AND NumMobile = :NumMobile";
               $stmt = $dbh->prepare($maj);
               $stmt->bindParam(':Password', $Password, PDO::PARAM_STR);
               $stmt->bindParam(':EmailId', $EmailId, PDO::PARAM_STR);
               $stmt->bindParam(':MobileNumber', $MobileNumber, PDO::PARAM_STR);
               $stmt->execute();
          }

     }


}
?>

<!DOCTYPE html>
<html lang="FR">

<head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

     <title>Gestion des Inscriptions en ligne | Recuperation de mot de passe </title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

     <link href="assets/css/font-awesome.css" rel="stylesheet" />

     <link href="assets/css/style.css" rel="stylesheet" />

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
				<h1 class="text-center">RÉCUPÉRATION DE MOT DE PASSE</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form name="user-forgot-password.php" action="user-forgot-password.php" method="post" onsubmit="return valid()">
                         <div class="form-group">
						<label for="email">Adresse email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse email" required />
						<span id="email-availability-status"></span>
					</div>
					<div class="form-group">
						<label for="mobile">Numéro de portable</label>
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Entrez votre numéro de portable" required />
					</div>
					
					<div class="form-group">
						<label for="password">Nouveau mot de passe</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required />
					</div>
					<div class="form-group">
						<label for="confirm_password">Confirmez votre mot de passe</label>
						<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmez votre mot de passe" required />
						<span id="confirm-status"></span>
					</div>
					<div class="form-group">
						<label for="vercode">Code captcha</label>
						<input type="text" class="form-control" id="vercode" name="vercode" maxlength="5" placeholder="Entrez le code captcha" required />
						<img src="captcha.php" />
					</div>
					<div class="form-group">
						<button type="submit" name="change" id="change-btn" class="btn btn-primary">Envoi du changement</button>
					</div>
				</form>
			</div>
		</div>
	</div>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>