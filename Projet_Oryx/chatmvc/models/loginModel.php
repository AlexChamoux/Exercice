<?php

class loginModel extends Model {    
    

    public function __construct(){
        parent::__construct();
        $this->dbh = $this->getConnexion();
    }
   

    public function existUser($data){
        
        $pseudo = $this->valid_donnees($data['pseudo']);
        /*error_log('Pseudo :'.$data['pseudo']);*/
        $pwd = $this->valid_donnees($data['password']);        
        /*error_log('Pwd :'.$pwd);*/

        /*if ($_POST['vercode'] != $_SESSION['vercode']) {
            // Le code est incorrect on informe l'utilisateur par une fenetre pop_up
            echo "<script>alert('Code de vérification incorrect')</script>";
        } else {*/

            if(!empty($pseudo) && !empty($pwd)
            && strlen($pseudo) <= 50
            && strlen($pwd) <= 150
            && preg_match("#^[A-Za-z0-9 '-]+$#", $pseudo)
            && preg_match("#^[A-Za-z0-9.+_@!?&§%]+$#", $pwd)){

                $sql = "SELECT * FROM users WHERE user_name = :user_name";
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindParam(':user_name', $pseudo, PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                /*error_log("Result SELECT existUser :".print_r($result, 1));*/
                $_SESSION['name'] = $result['user_name'];
                $_SESSION['user_id'] = $result['user_id'];


                if(!empty($result) && password_verify($pwd, $result['user_password'])){
                    /*error_log('loginModel session :'.print_r($_SESSION, 1));*/
                    return $_SESSION;                    
                    /*return $result['user_id'];*/
                }else{
                    echo '<script>alert("Utilisateur inconnu");</script>';
                }
            }
        /*}*/
        
    }

    public function createUser($data){


        /*if ($_POST['vercode'] != $_SESSION['vercode']) {
            // Le code est incorrect on informe l'utilisateur par une fenetre pop_up
            echo "<script>alert('Code de vérification incorrect')</script>";
        } else {*/        

            $pseudo = $this->valid_donnees($data['pseudo']);
            /*error_log('createUser Pseudo :'.$pseudo);*/
            $email = $this->valid_donnees($data['email']);
            /*error_log('createUser mail :'.$email);*/
            $password = $this->valid_donnees($data['password']);
            /*error_log('createUser password :'.$password);*/
            $pwd = password_hash($password, PASSWORD_DEFAULT);
            /*error_log('createUser pwdHash :'.$pwd);*/
            $colors = ['#007AFF', '#FF7000', '#FF7000', '#15E25F', '#CFC700', '#CF1100', '#CF00BE', '#F00'];
            $color_pick = rand(0, count($colors) - 1);
            $userColor = $colors[$color_pick];

            if (!empty($pseudo) && !empty($email) && !empty($pwd)
                && strlen($pseudo) <= 50
                && strlen($email) <= 255
                && strlen($password) <= 150
                && preg_match("#^[A-Za-z0-9 '-]+$#", $pseudo)
                && preg_match("#^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$#", $email)
                && preg_match("#^[A-Za-z0-9.+_@!?&%]+$#", $password)){
                
                $query1 = "INSERT INTO users (user_name, user_password, user_email, user_color) VALUES (:pseudo, :pwd, :email, :color)";
                $stmt1 = $this->dbh->prepare($query1);
                $stmt1->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
                $stmt1->bindParam(':pwd', $pwd, PDO::PARAM_STR);
                $stmt1->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt1->bindParam(':color', $userColor, PDO::PARAM_STR);
                $stmt1->execute();
            }
        /*}*/
        
    }


    public function changePassword ($data){

        $email = $this->valid_donnees($data['email']);
        /*error_log("chgPwd email :.$email");*/
        $password = $this->valid_donnees($data['password']);
        /*error_log("chgPwd PWD :".$password);*/
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        if(!empty($email)
        && !empty($password)
        && strlen($email) <= 40
        && strlen($password) <= 20
        && preg_match("#^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$#", $email)
        && preg_match("#^[A-Za-z0-9.+_@!?&§%]+$#", $password)){

            $query = "SELECT * FROM users WHERE user_email = :email";
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            /*error_log("chgPwd result :".print_r($result, 1));*/
            // Si le resultat de recherche n'est pas vide
            if(!empty($result)){
                // On met a jour la table tblreaders avec le nouveau mot de passe
                /*error_log('chgPwd !empty result :'.print_r($result, 1));*/
                $query2 = "UPDATE users SET user_password = :password WHERE user_email = :email";
                $stmt2 = $this->dbh->prepare($query2);
                $stmt2->bindParam(':password', $passwordHash, PDO::PARAM_STR);
                $stmt2->bindparam(':email', $email, PDO::PARAM_STR);
                $stmt2->execute();
                
            }else{
                echo "<script>alert('Les données n'ont pas été mises à jours.')</script>";
            }
        }
    }

}

?>