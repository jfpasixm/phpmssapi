<?php

/* 
NNNN    NN OOOOOO TTTTTTTT EEEEEEE
NN NN   NN OO  OO    TT    EE
NN  NN  NN OO  OO    TT    EEEEE
NN   NN NN OO  OO    TT    EE
NN    NNNN OOOOOO    TT    EEEEEEE

before you can run this file, add first

	[COM_DOT_NET]
	extension=php_com_dotnet.dll

 at the end of your 'php.ini' file
 
 Xampp for Windows = (Drive Letter):\xampp\php\php.ini
 Wamp (Drive Letter):\wamp\bin\apache\apache(version)\bin\php.ini   ----(I'm not sure about this one because I'm using Xampp)
 
 For Installation:
	http://php.net/manual/en/com.installation.php
	
 If you get error(s), refer to this link:
	https://stackoverflow.com/questions/10678325/class-com-not-found/12050332
 */
@$submit = $_POST['process'];
@$word = $_POST['texttospeech'];

$voice = new COM("SAPI.SpVoice");

if($_SERVER["REQUEST_METHOD"] == "POST" and isset($submit) and !empty($word)){	
	$voice->Speak($word);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
		<meta name="robots" content="noindex, nofollow">
		<title>PHP Text to Speech</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="img/favicon.ico" type="image/png">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body onload="startTime()">
		<nav class="navbar-inverse" role="navigation">
			<a href="https://www.facebook.com/MrNiemand03" target="_blank">
				<img src="img/niemand.png" class="hederimg">
			</a>
			<div id="clockdate">
				<div class="clockdate-wrapper">
					<div id="clock"></div>
					<div id="date"><?php echo date('l, F j, Y'); ?></div>
				</div>
			</div>
		</nav>
		<div class="topmost">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<center>
							<strong class="panelinputtitle">PHP Text to Speech using Microsoft Speech API</strong>
						</center>
					</div>
					<div class="panel-body">
						<form method = "post">
							<div class = "form-group">
								<textarea class="form-control input-sm" rows="6" name="texttospeech" placeholder="Type your Text Here..."></textarea> 
							</div>
							<div class = "form-group">
								<input type = "submit" class = "btn btn-primary btn-block" name="process" value="Speak">
							</div>
						</form>
						<form method="post">
							<input type="hidden" name="texttospeech" value="Congratulations, you run PHP text to Speech using Microsoft Speech API. Remember, this script will run only on Microsoft Windows">
							<button type="submit" name="process" class="btn btn-danger btn-block">Click Me First</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>