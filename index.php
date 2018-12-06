<!DOCTYPE html>
<html>
<head>
	<link href ="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/global.css"/>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/sign_in_out.js"></script>
    <script src="assets/js/send_message.js"></script>
    <script src ="assets/js/display_chat.js"></script>

	<title>chatbox</title>
</head>
<body>
	<div id ='chatbox'>
		<section id ='signInArea' style="width:500px;">
			<form  name='signIn' action='' onsubmit='return false' >
				<span id='InvalidUsername'>InvalidUsername</span>
				<input type ='text' size ='13px' name='username' id='username' placeholder='Enter username'/>
				<input type ='submit' id= 'userSignIn' value='signIn'/>
			</form>
		</section>

		<section id ='chatArea' style="width:500px;">
		</section>

		<section id ='messageTypingArea' style="width:500px;">
			<div id= 'signInToChat'>
				<button id='signInButton' type ='button'>sign In TO Enter Chat</button>
			</div>
			<div id='chatEnabled'>
				<form name='newmessage' class='newmessage' action='' onsubmit='return false'>
				   <section class='left style="width:500px;"'>
				   	<textarea style="resize: none; height: match-parent; width:493px;" name ='newMessageContent' id='newMessageContent' placeholder='Enter your message here'></textarea>
				   </section>
				   <section class='right' style="width:500px; height:25px;">
				   	<input type='submit' id='newMessageSend' value='send'/>
				   </section>
				</form>
			</div>
		</section>
	</div>
</body>
</html>

 
