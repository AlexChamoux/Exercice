<?php 
session_start();

include('includes/config.php');

if (isset($_SESSION['login']) && $_SESSION['login'] != '') {
	$_SESSION['login'] = '';
}

if (TRUE === isset($_POST['login'])) {
    if ($_POST['vercode'] != $_SESSION['vercode']) {
        echo "<script>alert('Code de vérification incorrect. Veuillez réessayer.');</script>";
	}else{
        $name = $_POST['name'];
		
		$query = "SELECT * FROM admin WHERE Nom = :Nom";
		$stmt = $dbh->prepare($query);
		$stmt->bindParam(':Nom', $name, PDO::PARAM_STR);
		$stmt->execute();
        error_log($_POST['password']);
		$result = $stmt->fetch(PDO::FETCH_OBJ);
        error_log(print_r($result, 1));
       
        error_log($result->Password);
        error_log(password_verify($_POST['password'], $result->Password));
        if (!empty($result) && password_verify($_POST['password'], $result->Password)) {
        $_SESSION['login'] = $_POST['name'];
        header("Location: pageadmin.php");
        } else {
            echo "<script>alert('Nom d\'utilisateur ou mot de passe incorrect. Veuillez réessayer.');</script>";
        }
        
        
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="./adminlogin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrateur</title>
</head>
<body>
    <header class="title">
        <h1>LOGIN ADMINISTRATEUR</h1>
    </header>
    <div class="form">
        <form method="post" action="adminlogin.php">
            <div class="form-group">
                <label>Nom</label>
                <input class="name" type="text" name="name" required>
            </div>
            <br>
            <div class="form-group">
						<label>Entrez votre mot de passe</label>
						<input class="password" type="password" name="password" required>
						<p>
							<a class="anchor" href="user-forgot-password.php">Mot de passe oublié ?</a>
						</p>
            </div>
            <br>
            <div class="form-group">
                <label>Code de vérification</label>
                <input type="text" name="vercode" required style="height:25px;">&nbsp;&nbsp;&nbsp;<img src="captcha.php">
            </div>
            <br>
            <button class="btn-login" type="submit" name="login" class="btn btn-info">LOGIN</button>&nbsp;&nbsp;&nbsp;<a class="anchor" href="signup.php">Je n'ai pas de compte</a>
        </form>
    </div>
</body>
</html>