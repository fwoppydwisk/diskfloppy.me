<!DOCTYPE html>
<html lang="en">

<head>
	<title>~floppydisk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" id="theme" href="./res/css/dark.css" type="text/css" />
	
    <meta property="og:type" content="website">
	<meta property="og:title" content="~floppydisk">
	<meta property="og:description" content="This is the personal homepage of floppydisk. Every now and then, I dabble in software/hardware projects, take pictures, or write blogposts.">
	<meta property="og:image" content="/favicon.png">
	
	<!--<script lang="javascript" href="/res/js/themeswap.js"></script>-->
	<script>
		function addStyleSheet(name, id) {
			var path = '/res/css/' + name + '.css';
			var old = document.getElementById(id);
			if (old && (old.href != path)) {
				old.href = path;
			}
		}
		var otherTheme = {
			'dark': 'light',
			'light': 'dark',
		};
		var currentTheme = localStorage.getItem('theme');
		if (!otherTheme.hasOwnProperty(currentTheme)) {
			currentTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
		}
		addStyleSheet(currentTheme, 'theme');

		function toggleTheme() {
			currentTheme = otherTheme[currentTheme] || 'light';
			localStorage.setItem('theme', currentTheme);
			addStyleSheet(currentTheme, 'theme');
		}
	</script>
</head>

<body>
<div class="page">
<?php require('header.php') ?>
<div id="pagebody">

			<div id="content">
				<p>Hi!</p>

				<p>This is the personal homepage of <a href="./me/">floppydisk</a>. Every now and then, I
					dabble in software/hardware <a href="./projects/">projects</a>, take <a href="./pics/">pictures</a>, or write
					<a href="./interblag/">blogposts</a>.
				</p>

				<h1>Projects</h1>

				<!--<p>Description</p>

				<h2>Public Transport Websites</h2>-->

				<div class="project">
					<span class="name"><a href="https://drivers.nickandfloppy.com/">drivers.nickandfloppy.com</a> (<a href="http://drivers.nickandfloppy.com/">HTTP</a>)</span>
					<br />
					<a href="/projects/netdrivers/">Driver indexing and storage website</a>
				</div>

				<div class="project">
					<span class="name"><a href="https://software.nickandfloppy.com/">software.nickandfloppy.com</a> (<a href="http://software.nickandfloppy.com/">HTTP</a>)</span>
					<br />
					<a href="/projects/softwarerewind/">Basically NetDrivers but with software</a>
				</div>

				<div class="project">
					<span class="name"><a href="http://weather.diskfloppy.me/">weather.diskfloppy.me</a></span>
					<br />
					<a href="/projects/weatherdata">A page to display data from my weather station</a>
				</div>

				<h1>News</h1>

				<p>No news... <i>yet!</i></p>

				<h1>Contact</h1>

				<p><strong>Mail</strong>: floppydisk05@aol.com<br />
					<strong>IRC</strong>: floppydisk @ r-type<br />
				</p>

				<h1>Elsewhere</h1>

				<p><strong>Twitter</strong>: <a href="https://twitter.com/floppydisk__">@floppydisk__</a><br />
					<strong>GitHub</strong>: <a href="https://github.com/floppydisk05">floppydisk05</a><br />
				</p>

			</div> <!-- content -->

			<div id="footer" class="pagefooter">
				<!-- Created <span class="date">Sat 26 Mar 2011 11:39:56 AM CET</span> -->
			</div> <!-- footer -->

		</div> <!-- pagebody -->

	</div> <!-- page -->

</body>

</html>
