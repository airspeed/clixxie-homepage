<?php
	$file = "stats";
	$contents = date(DATE_RFC822) . "|" . $_SERVER['HTTP_REFERER'] . "|" . $_SERVER['HTTP_USER_AGENT'] . "\n";
	file_put_contents($file, $contents, FILE_APPEND | LOCK_EX);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fotob&uuml;cher im Web erstellen - so einfach wie noch nie!</title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body onLoad="">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="container">
	<div id="header" class="full">
		<div class="fltlft">
			<a target="_blank" href="http://clixxie.de">
			<div id="logo"></div>
			</a>
		</div>
		<div class="fltrt">
			<ul>
				<li><a target="_blank" href="http://www.clixxie-fotobuch.de/kontakt/">Kontakt</a></li>
				<li><a target="_blank" href="http://www.clixxie-fotobuch.de/impressum/">Impressum</a></li>
				<li><a target="_blank" href="http://facebook.com/clixxie"><img src="img/FB-f-Logo__blue_29.png" width="29" height="29" align="absmiddle" /></a></li>
				<li><a target="_blank" href="http://twitter.com/femory"><img src="img/Twitter_logo_blue.png" width="36" height="29" align="absmiddle" /></a></li>
				<li><a target="_blank" href="http://instagram.com/clixxie"><img src="img/Instagram_Icon_29.png" width="29" height="29" align="absmiddle" /></a></li>
			</ul>
		</div>
	</div>
	<div id="headline" class="full">Fotobücher im Web erstellen - <br />
		so einfach wie noch nie!
	</div>
	<div id="subline" class="full">Kein Download, keine komplizierten Layouts, kein stundenlanges<br />
	Gestalten - dein Fotobuch ist schon in 2 Minuten fertig.</div>
	
	<div id="inputarea" class="full">
		<div class="question full">Gefällt dir die Idee?</div>
		<div class="c50l">
			<a href="javascript:submitComingSoon('YES');">
			<div class="button green">Ja</div></a>
		</div>
		<div class="c50l">
			<a href="javascript:submitComingSoon('NO');">
			<div class="button red">Nein</div></a>
		</div>
	</div>
	<div id="socials" class="full">
<div class="fb-like" data-href="https://clixxie.de/comingsoon/nl" data-layout="button" data-action="like" data-show-faces="false" data-share="false" width="79" height="20"></div>
<a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</div>
	<a target="_blank" href="http://femory.de">
	<div id="footer" class="full">
	</div>
	</a>
</div>
<div style="display: none;">
	<form name="comingsoon" id="comingsoon" action="csp.php" method="post">
		<input type="text" id="vote" name="vote" value=""/>
	</form>
	<script type="text/javascript">
		/*
		 * Assigns the correct value to the text input
		 * and then submits the form.
		 */
		function submitComingSoon(/*string*/vote)
		{
			var input = document.getElementById('vote'),
			    comingSoon = document.getElementById('comingsoon');
			input.value = vote;
			comingSoon.submit();
		}
	</script>
</div>
</body>
</html>
