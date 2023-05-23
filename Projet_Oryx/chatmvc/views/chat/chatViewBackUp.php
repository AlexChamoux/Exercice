<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../css/style.css" rel="stylesheet" />
</head>

<body>
	<div class="wrapper">
		<div class="room-wrapper">
			<?php
				$rooms = [
					"Bienvenue",
					"Veille technologique",
					"Divers",
					"Room 1",
					"Room 2"
				];

				foreach ($rooms as $index => $room) {
					echo "<a href='/Projet_Oryx/chatmvc/chat/chatIndex/" . ($index + 1) . "'>$room</a>";
				}
			?>
		</div>

		<?php
            $roomNames = [
                "Bienvenue",
                "Veille technologique",
                "Divers",
                "Room 1",
                "Room 2"
            ];

            $currentRoom = $_GET["id"] ?? 1;

            echo "<div id='room-message'>Vous discutez dans la room '" . $roomNames[$currentRoom - 1] . "'</div>";
        ?>

	<div class="chat-wrapper">
        
		<div id="message-box"></div>
		<div class="user-panel">
			<input type="text" name="name" id="name" value="<?php echo !empty($_SESSION['name']) ? $_SESSION['name'] : "Pas d'utilisateur"; ?>" maxlength="15" readonly/>
			<input type="text" name="message" id="message" placeholder="Type your message here..." maxlength="100" />
			<button name="send" id="send-message">Send</button>
		</div>
	</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="../../js/chat.js"></script>
</body>

</html>