<?php
	$file = "vote";
	$contents = date(DATE_RFC822) . "|" . $_SERVER['REMOTE_ADDR'] . "|" . $_POST['vote'] . "\n";
	file_put_contents($file, $contents, FILE_APPEND | LOCK_EX);
	header("Location: http://clixxie.de/comingsoon/nl/ty.html");
	die();
?>
