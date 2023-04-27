<?php

session_start();

function chargerClasse($classe){
    require $classe . '.class.php';
}

spl_autoload_register('chargerClasse');

$_dbh = new Database();
$Base = new BaseClass();
$fpv = new FirstPersonView();
$fpt = new FirstPersonText();
$fpa = new FirstPersonAction();

// error_log(print_r($fpv, 1));

if(empty($_POST)){
$Base->init();
$fpv->init();
$fpt->init();

}else{
    $Base->setCurrentX($_POST['X']);
    $Base->setCurrentY($_POST['Y']);
    $Base->setCurrentAngle($_POST['Angle']);
    $fpv->setCurrentAngle($_POST['Angle']);
    $fpv->setAnimCompass($_POST['compass']);
    //error_log($_POST['compass']);
    
}
error_log("POST :".print_r($_POST, 1));

if(isset($_POST['action'])){error_log("doAction :".print_r($Base, 1));
    $fpa->doAction($Base); 
    $Base->finalAction();
    $fpt->getText($Base);
}


if(isset($_POST['turn-left'])){   
    $Base->turnLeft();
    $fpv->AnimCompass($Base);
}

if(isset($_POST['forward'])){  
    $Base->goForward();
}

if(isset($_POST['turn-right'])){    
    $Base->turnRight();
    $fpv->AnimCompass($Base);            
}

if(isset($_POST['left'])){    
     $Base->goLeft();        
}

if(isset($_POST['backward'])){   
    $Base->goBack();        
}

if(isset($_POST['right'])){    
     $Base->goRight();        
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
                <img src="<?php echo $Base->getPath(); ?>" class="image" alt="image du jeu">
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
                            <td><button type="submit" class="action" name="action" <?php if($fpa->checkAction($Base) == TRUE){
                                                                                echo 'enabled';
                                                                                }else{
                                                                                echo 'disabled';} ?> >X</button></td>
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
                    <input type="hidden" name="X" value="<?php echo $Base->getCurrentX(); ?>">
                    <input type="hidden" name="Y" value="<?php echo $Base->getCurrentY(); ?>">
                    <input type="hidden" name="Angle" value="<?php echo $Base->getCurrentAngle(); ?>">
                    <input type="hidden" name="compass" value="<?php echo $fpv->getAnimCompass(); ?>">
                </form>
            </div>
            <div>
            <img src="<?php echo $fpv->getAnimCompass(); ?>" class="compass" alt="boussole">
            </div>
        </div>
        <div id="text">
            <?php echo $fpt->getText($Base); /*error_log("Afficher Texte :".$fpt->getText($Base));*/ ?>
        </div>
    </div>
  </body>
</html>