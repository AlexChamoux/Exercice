<?php

class loginController{

    protected $ologinModel;

    public function __construct(){
        $this->ologinModel = new loginModel();
    }

    public function loginIndex(){     
        /*error_log("POST1 :".print_r($_POST, 1));*/
        if (isset($_POST['submit'])){
        /*error_log("POST2 :".print_r($_POST, 1));*/
        $uid = $this->ologinModel->existUser($_POST);
        /*error_log("userId uid :$uid");*/
        if ($uid > 0){
            /*error_log("session :".print_r($_SESSION, 1));*/
            header('location:../chatmvc/chat/chatIndex/1');
        }
        }

        require_once(ROOT . '/views/login/loginView.php');
    }

    public function signup(){
        /*error_log('coucou avant post signup');*/
        if(isset($_POST['login'])){
            /*error_log('coucou après post signup');*/
            $userId = $this->ologinModel->createUser($_POST);

            header('location:../login/loginIndex');
        }

        require_once(ROOT . '/views/login/signupView.php');
    }

    public function forgotPassword(){

        if(isset($_POST['change'])){

            $change = $this->ologinModel->changePassword($_POST);

            if($change != 0){}
            header('location:../login/loginIndex');
        }

        require_once(ROOT . '/views/login/forgotPasswordView.php');
    }
}


?>