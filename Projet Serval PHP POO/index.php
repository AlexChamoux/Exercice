<?php

function chargerClasse($classe){
    require $classe . '.class.php';
}

spl_autoload_register('chargerClasse');

$_dbh = new Database();
$Base = new BaseClass();

if(empty($_POST)){
    return $Base->init();
}

if(isset($_POST['turn-left'])){   
    return $Base->turnLeft();    
}

if(isset($_POST['forward'])){  
    return $Base->goForward();
}

if(isset($_POST['turn-right'])){    
    return $Base->turnRight();        
}

if(isset($_POST['left'])){    
    return $Base->goLeft();        
}

if(isset($_POST['backward'])){   
    return $Base->goBack();        
}

if(isset($_POST['right'])){    
    return $Base->goRight();        
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Titre</title>
  </head>
  <body>
    <div id="container">
        <div id="first-person-view">
            <!-- Affichage de la vue à la première personne -->
            <div>
                <img src="<?php echo $Base->goForward() ?>" class="image" alt="image du jeu">
            </div>
        </div>
        <div id="button-block-and-compass">
            <div id="button-block">
                <form method="post" action="index.php">
                    <table>
                        <tr>
                            <td><button type="submit" class="turn-left" name="turn-left">turn-left</button></td>
                            <td><button type="submit" class="forward" name="forward" <?php if($Base->checkForward() == TRUE){
                                                                                echo 'enabled';
                                                                                }else{
                                                                                echo 'disabled';} ?> 
                                                                                >▲</button></td>                        
                            <td><button type="submit" class="turn-right" name="turn-right">turn-right</button></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td><button type="submit" class="left" name="left" <?php if($Base->checkLeft() == TRUE){
                                                                                echo 'enabled';
                                                                                }else{
                                                                                echo 'disabled';} ?>  
                                                                                >◄</button></td>
                            <td><button type="submit" class="action" name="action">X</button></td>
                            <td><button type="submit" class="right" name="right" <?php if($Base->checkRight() == TRUE){
                                                                                echo 'enabled';
                                                                                }else{
                                                                                echo 'disabled';} ?> 
                                                                                >►</button></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" class="backward" name="backward" <?php if($Base->checkBack() == TRUE){
                                                                                echo 'enabled';
                                                                                }else{
                                                                                echo 'disabled';} ?> 
                                                                                >▼</button></td>
                        </tr>            
                    </table>
                </form>
            </div>
            <div>
                <img src="./assets/compass.png" id="compass" alt="boussole">
            </div>
        </div>
        <div id="text">
            <!-- Affichage du texte -->
        </div>
    </div>
  </body>
</html>