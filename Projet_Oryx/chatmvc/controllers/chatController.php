<?php

class chatController{

    protected $ochatModel;

    public function __construct(){
        $this->ochatModel = new chatModel();
    }

    public function chatIndex(){
        
        /*error_log("Session :".print_r($_SESSION['user_id'], 1));*/
        if (isset($_POST['message'])) {
            /*error_log("Post[data] :".print_r($_POST['message'], 1));*/
            $message = $_POST['message'];
            $user_id = $_SESSION['user_id'];
            $color = $_POST['color'];
            $room = $_POST['room'];
            $date = date('Y-m-d H:i:s');
    
            $this->ochatModel->insertMessage($message, $user_id, $color, $room, $date);
        }

        $url = $_SERVER['REQUEST_URI'];
        $urlParts = explode('/', $url);
        $roomId = end($urlParts);

        $userColor = $this->ochatModel->getUserColor($_SESSION['user_id']);

        $roomName = $this->ochatModel->getRoomName($roomId);
        $roomMessages = $this->ochatModel->getRoomMessages($roomId);

        require_once(ROOT . '/views/chat/chatView.php');
    }

    public function search(){
        if (!isset($_SESSION['user_id'])) {
           
            header("Location: ../login/loginView.php");
            exit();
        }
    
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
            error_log("search keyword :".print_r($keyword, 1));
            $searchResults = $this->ochatModel->rechercheMessage($keyword);
            error_log("searchResult :".print_r($searchResults, 1));
        } else {
            $searchResults = array(); 
        }
    
        require_once(ROOT . '/views/chat/searchView.php');
    }
}