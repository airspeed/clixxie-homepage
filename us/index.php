<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	$file = "stats";
	$contents = date(DATE_RFC822) . "|" . $_SERVER['HTTP_REFERER'] . "|" . $_SERVER['HTTP_USER_AGENT'] . "\n";
	file_put_contents($file, $contents, FILE_APPEND | LOCK_EX);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>clixxie goes U.S.</title>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<style type="text/css">
body {
	margin: 0; padding: 0;
	font-family:"Open Sans", sans-serif, HelveticaNeue, "Helvetica Neue LT", "Helvetica Neue", Helvetica, Arial;
	font-size: 24px;
	text-align:center;
	font-weight:200;
	color: #202020;
	background:#FFF;
	/*background-size:cover;*/
}
.headline {font-size: 36px;}
a {color: #333333; text-decoration: none; font-size: 16px;}
a:link {  }
a:visited {  }
a:focus {  }
a:hover { color: #000;}
a:active {  }
input {background:url(img/bg-input.png) center center no-repeat transparent; border: none; width: 260px; height: 30px; padding:10px 20px 10px 20px; font-size: 18px; font-weight: 400; font-family:"Open Sans", sans-serif }
input[type=submit] {height: 50px; width: 132px; background:url(img/btn-notify.png) center center no-repeat transparent; color: #fff; cursor: pointer;}
p {margin: 0; padding-bottom: 10px;}
#container {width: 888px; margin: 0 auto;}
.cell {padding: 0; background:url(img/bg-cell.png) center center repeat-x; position: relative;}
.cell-shadow {width: 888px; height: 16px; background: url(img/cell-shadow.png) top center repeat-x; position: absolute; top: 0px;}
.cell-bg {padding: 40px;}
.cell-bg.flexi {background:url(img/bg-flexi.png) left bottom no-repeat;}
.cell-bg.photo {background:url(img/bg-photo.png) right bottom no-repeat;}
.cell.header .cell-bg, .cell.footer .cell-bg {padding: 20px;}
.header img {margin-left: 40px; margin-right:30px;}
.buttons {width: 434px; height: 138px; margin: 0 auto; margin-bottom:24px; font-size: 16px; font-weight: 400}
.rnd-btn {width: 138px; height: 138px; background:url(img/btns-productchoice.png) no-repeat; float: left; cursor: pointer;}
.rnd-btn p {height: 138px; vertical-align:middle; line-height: 138px;}
.rnd-btn.ff {background-position:left top;}
.rnd-btn.fp {background-position:center top; margin-left: 10px; margin-right: 10px;}
.rnd-btn.fp p {line-height:27px}
.rnd-btn.pb {background-position:right top;}

/*Next 3 classes are examples, how the buttons should look, when user has clicked*/
.rnd-btn.ff:hover, .rnd-btn.ff.clicked {background-position:left bottom;}
.rnd-btn.fp:hover, .rnd-btn.fp.clicked {background-position:center bottom;}
.rnd-btn.pb:hover, .rnd-btn.pb.clicked {background-position:right bottom;}




.full{
	width:100%;
	display:table;
	table-layout:fixed;
}
.center {text-align: center;}
body { font-size: 16pt}
.headline { font-size: 26pt }
a { font-size: 12pt}
input { font-size: 14pt }
.buttons { font-size: 12pt}
.headline { font-size: 28pt; font-weight: 400 }
</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55690768-1', 'auto');
  ga('send', 'pageview');

</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="clixxie-us.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.ff').click(function( ev )
	{
		ClixxieUS.saveVote('FLEXIPHOTO');
		$('.ff, .fp, .pb').off('click');
		$(this).addClass('clicked');
	});
	$('.fp').click(function( ev )
	{
		ClixxieUS.saveVote('FLEXIPHOTO_PHOTOBOOK');
		$('.ff, .fp, .pb').off('click');
		$(this).addClass('clicked');
	});
	$('.pb').click(function( ev )
	{
		ClixxieUS.saveVote('PHOTOBOOK');
		$('.ff, .fp, .pb').off('click');
		$(this).addClass('clicked');
	});
	$('input[type=submit]').click(function( ev )
	{
		var email = $('input[type=email]').val();
		if (email.length)
			ClixxieUS.saveEmail(email);
	});
});
</script>
<meta name="viewport" content="width=888" />
</head>
<body>

<div id="container">
	<div class="cell header">
		<div class="cell-shadow"></div>
		<div class="cell-bg">
			<img src="img/logo_clixxie.png" width="128" height="56" align="absmiddle" /> goes <img src="img/flag_us.png" width="124" height="80" align="absmiddle" />
		</div>
	</div>
	<div class="cell">
		<div class="cell-shadow"></div>
		<div class="cell-bg flexi">
			<p><img src="img/img-flexiphoto.png" width="558" height="324" /></p>
			<p>The brand new photo decoration:<br />
				Print your pictures on a special foil and put them everywhere.<br />
				They stick without glue on smooth surfaces - it's amazing!
			</p>
		</div>
	</div>
	<div class="cell">
		<div class="cell-shadow"></div>
		<div class="cell-bg photo">
			<p><img src="img/img-photobook.png" width="558" height="304" /></p>
			<p>Easy as never before:<br />
			Turn your favourite memories into a beautiful photobook<br />
			within
				just 
				a few minutes - directly on your smartphone! </p>
</div>
	</div>
	<div class="cell">
		<div class="cell-shadow"></div>
		<div class="cell-bg">
			<p class="headline">Tell us which product you like!</p>
			<div class="buttons">
				<div class="rnd-btn ff">
					<p>Flexiphoto</p>
				</div>
				<div class="rnd-btn fp">
					<p><br />Flexiphoto<br />&amp;<br />Photobook<br /></p>
				</div>
				<div class="rnd-btn pb">
					<p>Photobook</p>
				</div>
			</div>
			<p>Also want to stay informed about the launch?</p>
			<input type="email" placeholder="Your Email address"/> <input type="submit" value="Notify me" />
		</div>
	</div>
	<div class="cell footer">
		<div class="cell-shadow"></div>
		<div class="cell-bg">
			<a href="http://www.clixxie-photobook.com/imprint">Imprint</a> &emsp; <a href="http://www.clixxie-photobook.com/contact/">Contact</a>
		</div>
</div>
</body>
</html>
