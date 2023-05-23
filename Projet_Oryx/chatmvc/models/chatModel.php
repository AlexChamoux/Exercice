<?php
class ChatModel extends Model{

    public function __construct(){
        parent::__construct();
        $this->dbh = $this->getConnexion();
    }

    public function insertMessage($message, $user_id, $color, $room, $date){
        $stmt = $this->dbh->prepare("INSERT INTO messages (msg_text, msg_user_id, msg_color, msg_room_id, msg_date) VALUES (:message, :user_id, :color, :room, :date)");
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':color', $color, PDO::PARAM_STR);
        $stmt->bindParam(':room', $room, PDO::PARAM_INT);
        $stmt->bindParam(':date', $date, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function getRoomName($roomId){
        $stmt = $this->dbh->prepare("SELECT room_name FROM rooms WHERE room_id = :room_id");
        $stmt->bindParam(':room_id', $roomId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['room_name'];
    }

    public function getRoomMessages($roomId){
        $stmt = $this->dbh->prepare("SELECT m.*, u.user_name, u.user_color FROM messages m INNER JOIN users u ON m.msg_user_id = u.user_id
        WHERE m.msg_room_id = :room_id ORDER BY m.msg_date DESC LIMIT 10");
        $stmt->bindParam(':room_id', $roomId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }   

    public function rechercheMessage ($keyword){
        $stmt = $this->dbh->prepare("SELECT m.*, u.user_name, r.room_name
                                FROM messages m
                                INNER JOIN users u ON m.msg_user_id = u.user_id
                                INNER JOIN rooms r ON m.msg_room_id = r.room_id
                                WHERE MATCH(m.msg_text) AGAINST(:keyword)
                                ORDER BY m.msg_date DESC");
        $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        error_log("recherche result :".print_r($result, 1));
        return $result;        
    }

    public function getColorUser ($user){
        error_log('UserId de getColorUser:'.$user);
        $stmt = $this->dbh->prepare("SELECT user_color FROM users WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $user, PDO::PARAM_STR);
        $stmt->execute();
        $result2 = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result2;
    }

}