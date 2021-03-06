<?php
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('Strict-Transport-Security: "max-age=16070400"');
?><!DOCTYPE html>
<html lang="en">

<head>
	<link rel="apple-touch-icon" sizes="180x180" href="https://jacq.dev/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="https://jacq.dev/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="https://jacq.dev/favicon/favicon-16x16.png">
	<link rel="manifest" href="https://jacq.dev/favicon/site.webmanifest">
	<link rel="mask-icon" href="https://jacq.dev/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="https://jacq.dev/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="msapplication-config" content="https://jacq.dev/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">



	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>chatroom;</title>
	<link type="text/css" rel="stylesheet" href="stylesheet.css">
	<script type="text/javascript" src="app.js"></script>
	<script src="https://jacq.dev/themes.js"></script>
	<script src="https://jacq.dev/thememanager.js"></script>
	<!-- ver 1.1 -->
</head>

<body>
	<div id="wrapper">
		<nav>
			<a href="https://jacq.dev/">Home</a> |
			<a href="https://jacq.dev/splicer">Image Splicer</a>
		</nav>
		<h1>chatroom;</h1>
		<div class="grid">
			<div class="card messagesettings">
				<div class="title">User Settings</div>
				<div class="inputline">
					<!--<label for="ip">IP: </label>
					<input id="ip" type="text">-->

				</div>
				<div class="inputline">

				</div>
				<div class="gridded inputline">
					<label for="name">Name: </label>
					<input id="name" type="text">
					<input disabled type="button" id="connect" value="Connect"><input type="button" id="disconnect"
						value="Disconnect">
					<label for="namecolor">Name color: </label>
					<input id="namecolor" type="color">
					<label for="messagecolor">Message bg color: </label>
					<input id="messagecolor" type="color" value="#FDEFEF">
					<label for="textcolor">Message txt color: </label>
					<input id="txtcolor" type="color">
				</div>
			</div>
			<div class="card themesettings">
				<div class="title">Customise Theme</div>
				<div class="subtitle">Click on a color to change it</div>
				<div class="gridded inputline customtheme">
					<label for="col1"><input id="col1" type="color"></label>
					<label for="col2"><input id="col2" type="color"></label>
					<label for="col3"><input id="col3" type="color"></label>
					<label for="col4"><input id="col4" type="color"></label>
				</div>
				<div class="space title">Preset Themes</div>
				<div id="selector" class="flex">

				</div>
			</div>
			<div id="usersOnline" class="card">
				<div class="title">Currently online:</div>
				<div id="onlinelist">

				</div>
			</div>
			<div id="chat" class="card">

			</div>
			<div class="messageArea">
				<div class="gridded inputline">
					<label for="msg">Message:
						<input id="msg" type="text">
					</label>
					<input value="Send" id="send" type="button">
				</div>
			</div>
		</div>
	</div>
</body>

</html>