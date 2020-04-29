<!DOCTYPE html>
<html>
<head>
	<title>Live Chat Using PHP and JS</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="menu">
		<h1>Simple Live Chat!</h1><hr/>
			<p class="welcome"><b>HI</b></p>
			<p class="logout"><a id="exit" href="#" class="btn btn-default">Exit Live Chat</a></p>
		<div style="clear: both"></div>
		</div>
		<div id="chatbox">
			<!-- main-chatbox -->
		</div>
	<form name="message" action="">
		<input name="usermsg" class="form-control" type="text" id="usermsg" placeholder="Create A Message" />
		<input name="submitmsg" class="btn btn-default" type="submit" id="submitmsg" value="Send" />
	</form>
	</div>
</body>
</html>