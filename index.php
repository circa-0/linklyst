<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- LINKLYST 1.00 | Created by Brad Linder | RAVEN I|I | https://circa.im -->

<head>
	<title>Linklyst | For listing all the links.</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="apple-touch-icon.png" rel="apple-touch-icon">
	<link rel='stylesheet' type='text/css' href='style.css' />
	<link rel='stylesheet' type='text/css' href='modern-normalize.css' />
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<!-- OG TAGS - Change all the below info accordingly. These tags are what determine how your site looks when shared via Facebook/Twitter/Discord/iMessage, etc. You don't want your site to show Linklyst info. -->
	<link rel="canonical" href="https://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>">
	<meta name="description" content="A template for listing all the links">
	<meta name="keywords" content="linklyst link tree social media">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="https://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>">
	<meta name="twitter:title" content="Linklyst">
	<meta name="twitter:description" content="A template for listing all the links.">
	<meta name="twitter:creator" content="@linklyst">
	<meta name="twitter:url" content="https://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>">
	<!-- Change the provided fb.jpg image to be your own or simply delete it if you don't have one -->
	<meta name="twitter:image:src" content="https://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>/fb.jpg">
	<meta name="twitter:image:height" content="600">
	<meta name="twitter:image:width" content="1200">
	<meta property="og:title" content="Linklyst">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>">
	<meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>/fb.jpg">
	<meta property="og:description" content="A template for listing all the links">
	<meta property="og:site_name" content="Linklyst" />
	<meta property="fb:app_id" content="583458272493011" />
	<link rel="apple-touch-icon" href="logo.png" />
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
	<div class="container">
		<div class="header">

			<span class="logo"><a href="/">
					<!-- Replace Linklyst with your name -->
					<span itemprop="name">Linklyst</span></a></span>
			<p class="subtitle">Find me on these platforms</p>
			<!-- Uncomment the below div if you have a logo you want shown. Most people don't, so it's disabled by default. -->
			<!-- <div class="header_img"><img src="logo.png" /></div> -->
		</div>
		<hr class="separator separator--dots" />
		<div class="main">
			<div class="blurb">This can be used for a short bio or message. Simply comment out the whole div if you don't want it.</div>
			<div>

				<a href="https://linklyst.io" target="_blank"><button class="btn btn-big"><img src="logo.png" class="iconimg"> Linklyst</button></a>

				<a href="https://raventhree.com" target="_blank"><button class="btn btn-big"><img src="logo.png" class="iconimg"> Custom Website</button></a>

			</div>

			<hr class="separator separator--dots" />

			<!-- The social platform links use Boxicons; Go to boxicons.com to find the icon you want and put in the <i> element -->

			<a href="https://github.com/circa-0/linklyst" target="_blank"><button class="btn btn-big"><i class="icon bx bxl-github Button-icon"></i>View on Github</button></a>

			<a href="https://twitch.tv/" target="_blank"><button class="btn btn-big"><i class="icon bx bxl-twitch Button-icon"></i>Follow on Twitch</button></a>

			<a href="https://twitter.com/" target="_blank"><button class="btn btn-big"><i class="icon bx bxl-twitter Button-icon"></i>Follow on Twitter</button></a>

			<a href="https://instagram.com/" target="_blank"><button class="btn btn-big"><i class="icon bx bxl-instagram Button-icon"></i>Follow on Instagram</button></a>

			<a href="https://facebook.com/" target="_blank"><button class="btn btn-big"><i class="icon bx bxl-facebook Button-icon"></i> Follow on Facebook</button></a>

			<a href="https://open.spotify.com/" target="_blank"><button class="btn btn-big"><i class="icon bx bxl-spotify Button-icon"></i>Listen on Spotify</button></a>

			<a href="https://youtube.com/" target="_blank"><button class="btn btn-big"><i class="icon bx bxl-youtube Button-icon"></i>Subscribe on YouTube</button></a>

		</div>
		<div class="footer">
			&copy; <a href="https://linklyst.io" target="_blank">Linklyst</a>.
		</div>
	</div>
</body>

</html>