<?php

session_start();

if (isset($_POST['return'])) {
    header("Location: ".$_SERVER['HTTP_REFERER']);
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="inventaire.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaire</title>
</head>
<body>
    <table>
        <tr>
            <td><h2 id="titre">INVENTAIRE</h2></td>
            <td><button class="retour" onclick="window.location.href='index.php'">Retour</button></td>
        </tr>
</table>
    
    <div class="grid-container">
            <?php if(!empty($_SESSION['inventaire'])){ ?>
        <div class="grid-item">
            <img class="key-image" src="./images/clé-dorée.jpg" alt="Clé dorée">
        </div>
        <?php }else{ ?>
            <div class="grid-item"></div>
            <?php } ?>

        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>        
    </div>
</body>
</html>
