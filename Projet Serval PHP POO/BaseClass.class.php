<?php


class BaseClass{
    protected $_currentX;
    protected $_currentY;
    protected $_currentAngle; 
    protected $_dbh;
    protected $path;


    public function __construct() {
        $this->_dbh = new Database();
    }    

    public function getPath(){
        return $this->path;
    }

    public function getCurrentX(){
        return $this->_currentX;
    }

    public function setCurrentX(int $_currentX){
        $this->_currentX = $_currentX;
    }

    public function getCurrentY(){
        return $this->_currentY;
    }

    public function setCurrentY(int $_currentY){
        $this->_currentY = $_currentY;
    }

    public function getCurrentAngle(){
        return $this->_currentAngle;
    }

    public function setCurrentAngle(int $_currentAngle){
        $this->_currentAngle = $_currentAngle;
    }

    public function init(){
        $this->_currentX = 0;
        $this->_currentY = 1;
        $this->_currentAngle = 0;
    }
    
    public function checkForward(){
        $newX = $this->_currentX;
        $newY = $this->_currentY;

        switch($this->_currentAngle){
            case 0:
                $newX++;                
                break;
            case 90:
                $newY++;
                break;
            case 180:
                $newX--;
                break;
            case 270:
                $newY--;
                break;
        }
        
        return $this->_checkMove($newX, $newY, $this->_currentAngle);
    }

    public function checkBack(){
        $newX = $this->_currentX;
        $newY = $this->_currentY;

        switch($this->_currentAngle){
            case 0:
                $newX--;
                break;
            case 90:
                $newY--;
                break;
            case 180:
                $newX++; 
                break;
            case 270:
                $newY++;
                break;    
            }

        return $this->_checkMove($newX, $newY, $this->_currentAngle);
        
    }

    public function checkRight(){
        $newX = $this->_currentX;
        $newY = $this->_currentY;

        switch($this->_currentAngle){
            case 0:
                $newY--;
                break;
            case 90:
                $newX++;
                break;
            case 180:
                $newY++;
                break;
            case 270:
                $newX--;
                break;
        }
       
        return $this->_checkMove($newX, $newY, $this->_currentAngle);
    }

    public function checkLeft(){
        $newX = $this->_currentX;
        $newY = $this->_currentY;

        switch($this->_currentAngle){
            case 0:
                $newY++;
                break;
            case 90:
                $newX--;
                break;
            case 180:
                $newY--;
                break;
            case 270:
                $newX++;
                break;
        }
        
        return $this->_checkMove($newX, $newY, $this->_currentAngle);
    }
    

    private function _checkMove(int $newX, int $newY, int $_currentAngle){

        $stmt = $this->_dbh->prepare("SELECT * FROM map WHERE coordx=$newX AND coordy=$newY AND direction=$_currentAngle");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if(!empty($result)){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function goForward(){
        $newX = $this->_currentX;
        $newY = $this->_currentY;
        $newAngle = $this->_currentAngle;
        error_log('Ancienne donnée forward newX:'.$newX);
        error_log('Ancienne donnée forward newY:'.$newY);
        error_log('Ancienne donnée forward newAngle:'.$newAngle);
        switch($this->_currentAngle){
            case 0:
                $newX++;
                break;
            case 90:
                $newY++;
                break;
            case 180:
                $newX--;
                break;
            case 270:
                $newY--;
                break;
            
        }
        $this->_currentX = $newX;
        $this->_currentY = $newY;
        error_log('Nouvelle donnée forward newX:'.$newX);
        error_log('Nouvelle donnée forward newY:'.$newY);
        error_log('Nouvelle donnée forward newAngle:'.$newAngle);

        $stmt = $this->_dbh->prepare("SELECT m.id, i.map_id, i.path FROM images i JOIN map m ON i.map_id = m.id
                                        WHERE m.coordx = $newX AND m.coordy = $newY AND m.direction = $newAngle");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->path = "./images/".$result['path'];
        error_log("Chemin image forward:".$this->path);
        return $this->path;        
    }
    
    public function goBack(){
        $newX = $this->_currentX;
        $newY = $this->_currentY;
        $newAngle = $this->_currentAngle;
        error_log('Ancienne donnée back:'.$newX);
        error_log('Ancienne donnée back:'.$newY);
        switch($this->_currentAngle){
            case 0:
                $newX--;
                break;
            case 90:
                $newY--;
                break;
            case 180:
                $newX++; 
                break;
            case 270:
                $newY++;
                break;    
        }
        $this->_currentX = $newX;
        $this->_currentY = $newY;
        error_log('Nouvelle donnée back:'.$newX);
        error_log('Nouvelle donnée back:'.$newY);

        $stmt = $this->_dbh->prepare("SELECT m.id, i.map_id, i.path FROM images i JOIN map m ON i.map_id = m.id
                                        WHERE m.coordx = $newX AND m.coordy = $newY AND m.direction = $newAngle");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->path = "./images/".$result['path'];
        error_log("Chemin image back:".$this->path);
        return $this->path;
        
    }
    
    public function goRight(){
        $newX = $this->_currentX;
        $newY = $this->_currentY;
        $newAngle = $this->_currentAngle;
        error_log('Ancienne donnée right:'.$newX);
        error_log('Ancienne donnée right:'.$newY);
        switch($this->_currentAngle){
            case 0:
                $newY--;
                break;
            case 90:
                $newX++;
                break;
            case 180:
                $newY++;
                break;
            case 270:
                $newX--;
                break;
        }
        $this->_currentX = $newX;
        $this->_currentY = $newY;
        error_log('Nouvelle donnée right:'.$newX);
        error_log('Nouvelle donnée right:'.$newY);

        $stmt = $this->_dbh->prepare("SELECT m.id, i.map_id, i.path FROM images i JOIN map m ON i.map_id = m.id
                                        WHERE m.coordx = $newX AND m.coordy = $newY AND m.direction = $newAngle");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->path = "./images/".$result['path'];
        error_log("Chemin image right:".$this->path);
        return $this->path;
        
    }
    
    public function goLeft(){
        $newX = $this->_currentX;
        $newY = $this->_currentY;
        $newAngle = $this->_currentAngle;
        error_log('Ancienne donnée left:'.$newX);
        error_log('Ancienne donnée left:'.$newY);
        switch($this->_currentAngle){
            case 0:
                $newY++;
                break;
            case 90:
                $newX--;
                break;
            case 180:
                $newY--;
                break;
            case 270:
                $newX++;
                break;
        }
        $this->_currentX = $newX;
        $this->_currentY = $newY;
        error_log('Nouvelle donnée left:'.$newX);
        error_log('Nouvelle donnée left:'.$newY);

        $stmt = $this->_dbh->prepare("SELECT m.id, i.map_id, i.path FROM images i JOIN map m ON i.map_id = m.id
                                        WHERE m.coordx = $newX AND m.coordy = $newY AND m.direction = $newAngle");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->path = "./images/".$result['path'];
        error_log("Chemin image right:".$this->path);
        return $this->path;
        return $this->_currentX;
        return $this->_currentY;
    }

    public function turnRight(){
        $newX = $this->_currentX;
        $newY = $this->_currentY;
        $newAngle = $this->_currentAngle;
        error_log('Ancienne donnée turnRight newX:'.$newX);        
        error_log('ancienne donnée turnRight newY:'.$newY);
        error_log('ancienne donnée turnRight newAngle:'.$newAngle);
        switch($this->_currentAngle){
            case 0:
                $newAngle = 270;
                break;
            case 90:
                $newAngle = 0;
                break;
            case 180:
                $newAngle = 90;
                break;
            case 270:
                $newAngle = 180;
                break;
        }
        $this->_currentAngle = $newAngle;
        error_log('Nouvelle donnée turnRight newAngle:'.$newAngle);
        $stmt = $this->_dbh->prepare("SELECT m.id, i.map_id, i.path FROM images i JOIN map m ON i.map_id = m.id
                                        WHERE m.coordx = $newX AND m.coordy = $newY AND m.direction = $newAngle");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->path = "./images/".$result['path'];
        error_log("Chemin image turnRight:".$this->path);
        return $this->path;
    }

    public function turnLeft(){
        $newX = $this->_currentX;
        $newY = $this->_currentY;
        $newAngle = $this->_currentAngle;
        error_log('Ancienne donnée turnLeft newX:'.$newX);        
        error_log('Ancienne donnée turnLeft newY:'.$newY);
        error_log('Ancienne donnée turnLeft newAngle:'.$newAngle);
        switch($this->_currentAngle){
            case 0:
                $newAngle = 90;
                break;
            case 90:
                $newAngle = 180;
                break;
            case 180:
                $newAngle = 270;
                break;
            case 270:
                $newAngle = 0;
                break;
        }
        $this->_currentAngle = $newAngle;
        error_log('Nouvelle donnée turnLeft newAngle:'.$newAngle);
        $stmt = $this->_dbh->prepare("SELECT m.id, i.map_id, i.path FROM images i JOIN map m ON i.map_id = m.id
                                        WHERE m.coordx = $newX AND m.coordy = $newY AND m.direction = $newAngle");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->path = "./images/".$result['path'];
        error_log("Chemin image turnLeft:".$this->path);
        return $this->path;
    }

}

?>