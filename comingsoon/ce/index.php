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
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="clixxie-csp.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$( '.btn-submit' ).click( function( ev )
	{
		var email = $( 'input[type=email]' ).val();
		if ( email.length )
			ClixxieCSP.saveEmail( email, function( msg ) {
				$( '.btn-submit' ).off();
				$( '.btn-submit' ).addClass( 'submitted' );
				$( '.btn-submit' ).text( 'Vielen Dank!' );
				$( 'input[type=email]' ).val( '' );
		});
	});
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57297430-1', 'auto');
  ga('send', 'pageview');
</script>
</head>

<body>
<div id="header">
	<div class="container">
		<div class="full equalize">
			<div id="header-logo">
			</div>
			<div id="header-links">
				<a href="#produkt">Produkt</a>
				<a href="#sofunktionierts">So funktioniert&acute;s</a>
				<a href="#kontakt">Folge uns</a>
				<a href="#impressum">Impressum</a>
			</div>
			<div id="header-socials">
				<ul>
					<a target="_blank" href="http://twitter.com/femory"><li><div class="header-social-twitter"></div></li></a>
					<a target="_blank" href="http://facebook.com/clixxie"><li><div class="header-social-facebook"></div></li></a>
					<a target="_blank" href="http://instagram.com/clixxie"><li><div class="header-social-instagram"></div></li></a>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="container">
		<div class="full equalize main">
			<div class="c30l book"></div>
			<div class="c40l computer"></div>
			<div class="c30l shortinfo">
				<p>Fotob&uuml;cher im Web erstellen - so einfach wie noch nie! Kein Download, keine komplizierten Layouts, kein stundenlanges Gestalten - dein Fotobuch ist schon in 2 Minuten fertig.</p>
				<a href="thankyou.html"><div class="button-buynow" style="margin-top: 20px;">Jetzt Starten</div></a>
			</div>
		</div>
		<div class="full equalize five-infos">
			<div class="c20l"><div class="five-infos-one"></div>Made in Germany</div>
			<div class="c20l"><div class="five-infos-two"></div>Top-Qualit&auml;t</div>
			<div class="c20l"><div class="five-infos-three"></div>Faire Preise</div>
			<div class="c20l"><div class="five-infos-four"></div>Multi-Plattform</div>
			<div class="c20l"><div class="five-infos-five"></div>Ausgezeichneter Kundenservice</div>
		</div>
	</div>
</div>
<div class="row orange" id="sofunktionierts">
	<a href="#sofunktionierts"><div class="scroller"></div></a>
	<div class="container">
		<div class="full">
			<h1>So funktioniert&acute;s:</h1>
			<h2>Fotobuch in nur 4 Schritten</h2>
			<div class="full equalize four-steps">
				<div class="c25l"><div class="four-steps-one"></div><p>Fotos ausw&auml;hlen von Festplatte, USB-Stick etc.</p></div>
				<div class="c25l"><div class="four-steps-two"></div><p>Fotobuch schnell &amp; unkompliziert erstellen!</p></div>
				<div class="c25l"><div class="four-steps-three"></div><p>Ganz einfach und sicher bestellen.</p></div>
				<div class="c25l"><div class="four-steps-four"></div><p>In wenigen Tagen im Briefkasten.</p></div>
			</div>
			<a href="thankyou.html"><div class="button-buynow">Jetzt Starten</div></a>
		</div>
	</div>
</div>

<div class="row" id="produkt">
	<a href="#produkt"><div class="scroller"></div></a>
	<div class="container">
		<h1>Produkt-Info</h1>
		<h2>Das Fotobuch gibt&acute;s in diesen Formaten:</h2>
		<div class="full equalize book-formats">
			<div class="c33l">	
				<h3>Compact</h3>
				<div class="produkt-buch c15"></div>
				<h3>Ab 13,50 €</h3>
				<ul><li>18,8&times;14,5 cm</li><li>Softcover</li><li>15 oder 30 Fotos</li><li>Druck einseitig oder beidseitig</li></ul>
			</div>
			<div class="c33l">
				<h3>Square</h3>
				<div class="produkt-buch sqr"></div>
				<h3>Ab 9,50 €</h3>
				<ul><li>15&times;15 cm</li><li>Softcover</li><li>15 oder 30 Fotos</li><li>Druck einseitig oder beidseitig</li></ul>
			</div>
			<div class="c33l">
				<h3>Pocket</h3>
				<div class="produkt-buch p15"></div>
				<h3>Ab 7,50 €</h3>
				<ul><li>10&times;10 cm</li><li>Softcover</li><li>15 oder 30 Fotos</li><li>Druck einseitig oder beidseitig</li></ul>
			</div>
		</div>
		<a href="thankyou.html"><div class="button-buynow">Jetzt Starten</div></a>
	</div>
</div>

<div class="row orange" id="kontakt">
	<a href="#kontakt"><div class="scroller"></div></a>
	<div class="container follow">
		<h1>Folge uns!</h1>
		<ul>
			<a target="_blank" href="http://twitter.com/femory"><li><div class="social-twitter"></div></li></a>
			<a target="_blank" href="http://facebook.com/clixxie"><li><div class="social-facebook"></div></li></a>
			<a target="_blank" href="http://instagram.com/clixxie"><li><div class="social-instagram"></div></li></a>
		</ul>
		<h1>Stay tuned!</h1>
		<h2>M&ouml;chtest du News zu clixxie-fotobuch erhalten?</h2>
		<div class="full" id="email-box">
			<div class="c70l">
				<input type="email" placeholder="Deine E-Mail Adresse"/>
			</div>
			<div class="c30l">
				<div class="btn-submit">Abschicken!</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<a href="#impressum"><div class="scroller"></div></a>
	<div class="container">
		<div class="logo-big"></div>
		<div class="image-book-big"></div>
	</div>
</div>

<div id="footer" class="row">
	<div class="container" id="impressum">
		<h1>Impressum</h1>
		<div class="full equalize">
			<div class="c33l">
				<p>femory GmbH &amp; Co. KG<br />
				Fraunhoferstra&szlig;e 6<br />
				D-80469 M&uuml;nchen<br />
				Telefon: +49 (0) 89 / 2000079320<br />
				E-Mail: <a href="mailto:kontakt@femory.de">kontakt@femory.de</a><br />
				<a target="_blank" href="http://femory.de">http://www.femory.de</a></p>
			</div>
			<div class="c33l">
				<p>femory GmbH &amp; Co. KG<br />
				Sitz in M&uuml;nchen<br />
				Registergericht: Amtsgericht M&uuml;nchen<br />
				Handelsregisternummer: HRA 91545<br />
				UST-ID: DE 259672907<br />
				</p>
			</div>
			<div class="c33l">
				<p>Komplement&auml;rin (vertretungsberechtigt):<br />
				meandis GmbH Sitz M&uuml;nchen<br />
				Registergericht: Amtsgericht M&uuml;nchen<br />
				Handelsregisternummer: HRB 156791<br />
				Gesch&auml;ftsf&uuml;hrung: Dipl.-Kfm. Jan Fischer, Regina Wagner
				</p>
			</div>
		</div>
		<div class="full equalize">
			<div class="c25l"></div>
			<div class="c50l">
				<h3>&nbsp;</h3><p>Inhaltlich Verantwortlicher gem&auml;&szlig; § 10 Absatz 3 MDStV: femory GmbH &amp; Co. KG &copy; Copyright 2009, femory GmbH &amp; Co. KG, M&uuml;nchen, Deutschland Alle Rechte vorbehalten.
				 Text, Bilder, Grafiken, Ton, Animationen und Videos sowie deren Anordnung auf der femory Website
				 unterliegen dem Schutz des Urheberrechts und anderer Schutzgesetze. Der Inhalt dieser Website darf nicht zu kommerziellen Zwecken kopiert, verbreitet, ver&auml;ndert oder Dritten zug&auml;nglich gemacht werden. Einige Seiten enthalten au&szlig;erdem Bilder, die dem Copyright Dritter unterliegen.</p>
			 </div>
			 <div class="c25l"></div>
		</div>
	</div>
</div>
</body>
</html>
