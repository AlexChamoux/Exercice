<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../css/style.css" rel="stylesheet" />
</head>

<body>
<div class="wrapper">

    <div class="room-wrapper">
    <a href="/Projet_Oryx/chatmvc/chat/chatIndex/1">Bienvenue</a></br>
    <a href="/Projet_Oryx/chatmvc/chat/chatIndex/2">Veille technologique</a></br>
    <a href="/Projet_Oryx/chatmvc/chat/chatIndex/3">Divers</a></br>
    <a href="/Projet_Oryx/chatmvc/chat/chatIndex/4">Room 1</a></br>
    <a href="/Projet_Oryx/chatmvc/chat/chatIndex/5">Room 2</a></br>
    <a href="/Projet_Oryx/chatmvc/chat/search/">Search</a>
    </div>

    <div class="chat-container">
        <div id="room-message">
            <?php echo 'Vous discutez sur la room "'.$roomName.'"'; ?>
        </div>

        <div class="chat-wrapper">
            <div id="message-box">
                <?php foreach (array_reverse($roomMessages) as $message) : ?>
                    <div>
                        <span class="user_name" style="color:<?php echo $userColor; ?>">
                            <?php echo $message['user_name'];?>
                            <?php echo $message['msg_date'];?>
                        </span> :
                        <span class="user_message">
                            <?php echo $message['msg_text']; ?>
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="user-panel">
                <input type="text" name="name" id="name" value="<?php echo !empty($_SESSION['name']) ? $_SESSION['name'] : "Pas d'utilisateur"; ?>" maxlength="15" readonly/>
                <input type="text" name="message" id="message" placeholder="Type your message here..." maxlength="100" />
                <button name="send" id="send-message">Send</button>
            </div>
        </div>
    </div>
    <input type="hidden" id="roomId" value="<?php echo $roomId; ?>">
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="../../js/chat.js"></script>
</body>

</html>