<?php
	$votefile = "vote";
	$mailfile = "email";
	$contents = date(DATE_RFC822) . "|" . $_SERVER['REMOTE_ADDR'] . "|";
	if (isset($_POST['vote'])) {
		$contents .= $_POST['vote'];
		$file = $votefile;
		$returnvalue = $_POST['vote'];
	} elseif (isset($_POST['email'])) {
		$contents .= $_POST['email'];
		$file = $mailfile;
		$returnvalue = $_POST['email'];
	}
	$contents .= "\n";
	file_put_contents($file, $contents, FILE_APPEND | LOCK_EX);
	echo $returnvalue;
?>
