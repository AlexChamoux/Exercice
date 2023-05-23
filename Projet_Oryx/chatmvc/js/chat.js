//create a new WebSocket object.
var msgBox = $('#message-box');
var wsUri = "ws://localhost:9000/server.php";
websocket = new WebSocket(wsUri);

websocket.onopen = function(ev) { // connection is open
	msgBox.append('<div class="system_msg" style="color:#bbbbbb">Welcome to my "Demo WebSocket Chat box"!</div>'); //notify user
}
// Message received from server
websocket.onmessage = function(ev) {
	var response = JSON.parse(ev.data); //PHP sends Json data

	var res_type = response.type; //message type
	var user_message = response.message; //message text
	var user_name = response.name; //user name
	var user_color = response.color; //color
	let message_room = response.room;

	if (message_room == $('#roomId').val()) { // Check if the message belongs to the current room
        switch (res_type) {
            case 'usermsg':
                msgBox.append('<div><span class="user_name" style="color:' + user_color + '">' + user_name + '</span> : <span class="user_message">' + user_message + '</span></div>');
                break;
            case 'system':
                msgBox.append('<div style="color:#bbbbbb">' + user_message + '</div>');
                break;
        }
        msgBox[0].scrollTop = msgBox[0].scrollHeight; //scroll message 
    } 

};

websocket.onerror = function(ev) {
	msgBox.append('<div class="system_error">Error Occurred - ' + ev.data + '</div>');
};
websocket.onclose = function(ev) {
	msgBox.append('<div class="system_msg">Connection Closed</div>');
};

//Message send button
$('#send-message').click(function() {
	send_message();
});

//User hits enter key 
$("#message").on("keydown", function(event) {
	if (event.which == 13) {
		send_message();
	}
});

//Send message
function send_message() {
	var message_input = $('#message'); //user message text
	var name_input = $('#name'); //user name
	let roomId = $('#roomId').val();
	let userColor = $('#userColor').val();

	if (name_input.val() == "") { //empty name?
		alert("Enter your Name please!");
		return;
	}
	if (message_input.val() == "") { //emtpy message?
		alert("Enter Some message Please!");
		return;
	}

	//prepare json data
	var msg = {
		message: message_input.val(),
		name: name_input.val(),
		color: userColor,
		room: roomId
	};
	
	store_message(msg);
	// Envoyer les données du message à la base de données
	//convert and send data to server
	websocket.send(JSON.stringify(msg));
	message_input.val(''); //reset message input
}

function store_message(msg) {
    let message = msg.message;
    /*console.log(message);*/
    let name = msg.name;
    /*console.log(name);*/
    let color = msg.color;
    /*console.log(color);*/
    let room = msg.room;
    console.log(room);

    $.ajax({
        type: "POST",
        url: window.location.href,
        data:{message: message, name: name, color: color, room: room}/*,
        success: function(response) {
            console.log("success:", response);
        },
        error: function(xhr, status, error) {
            console.log("error:", xhr, status, error);
        }*/
    });
}

function valid() {
	let password = document.querySelector(".password").value;
	let confirm_password = document.querySelector(".confirm_password").value;
	if (password != confirm_password) {
	alert("Les mots de passe ne sont pas identiques !");
	return false;
	} else {
	return true;
	}
};


function check_availability(email) {
	/*console.log(email);*/
	let mail = new Request(`check_availability.php?email=${email}`, {
				method: 'GET'
				});
   

	fetch(mail)
		.then(response => response.json())
		.then(data => {
			/*console.log(data);*/
			if (data.exists) {
				$('#result').html('Cet email est déjà utilisé.');
				$('#signup-btn').prop('disabled', true);
			} else {
				$('#result').html('');
				$('#signup-btn').prop('disabled', false);
			}
		  
		})
		/*.catch(error => console.error("Erreur : " + error));*/
};



