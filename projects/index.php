
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global -->
	<?php require('../inc/header.inc.php'); ?>

	<!-- Page-specific -->
	<title>Projects</title>
	<!--<link rel="shortcut icon" href="../res/img/icons/ico/calc.ico" type="image/x-icon">-->
	<meta property="og:title" content="Projects">
	<meta property="og:description" content="Personal and group projects">
	<!--<meta property="og:image" content="/res/img/icons/png/computer.png">-->
</head>
<body>
<div class="page">  
<?php require('../inc/nav.inc.php') ?>

<div id="pagebody">
	<div id="content">
		<h2>Personal Projects</h2>
		<p>Projects I prefer to work on solo</p>
		<span class="name"><a href="http://weather.diskfloppy.me/"><b>weather.diskfloppy.me</b></a></span><br>
		<a href="/projects/weatherdata">A page to display data from my weather station</a><br><br>

		<span class="name"><a href="http://trivia.diskfloppy.me/"><b>trivia.diskfloppy.me</b></a></span><br>
		<a href="/projects/trivia-api">A REST API to get trivia questions</a><br>

		<h2>Group Projects (<a href="//ndfnet.com/">NDFNet</a> / <a href="//nickandfloppy.com/">nickandfloppy</a>)</h2>
		<p>Projects I do/have done with friends</p>
		<span class="name"><a href="//drivers.nickandfloppy.com/"><b>drivers.nickandfloppy.com</a></b> <small>(nickandfloppy)</small></span><br>
		<a href="http://www.nickandfloppy.com/projects/netdrivers/">Driver indexing and storage website</a><br><br>

		<span class="name"><a href="https://github.com/NDFNet/PlexBot"><b>PlexBot</b></a> <small>(NDFNet)</small></span><br>
		<a href="http://ndfnet.com/projects/plexbot/">A basic bot to play music from the configured Plex server in a Discord voice channel.</a><br><br>

		<span class="name"><a href="https://github.com/nickandfloppy/NetRunner"><b>NetRunner</b></a> <small>(nickandfloppy)</small></span><br>
		<a href="http://www.nickandfloppy.com/projects/netrunner/">A fork of Starman0620's WinBot, modified for use in nick and floppy's corner.</a><br>
	</div> <!-- content -->

	<div id="footer" class="pagefooter">
		<?php $file = __FILE__;require('../inc/footer.inc.php'); ?>
	</div> <!-- footer -->
</div> <!-- pagebody -->
</div> <!-- page -->
</body>
</html>
