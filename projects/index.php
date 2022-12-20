
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global -->
	<?php require('../inc/header.inc.php'); ?>

	<!-- Page-specific -->
	<?php require_once('../inc/title.inc.php') ?>
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
		<h1>Personal Projects</h1>
		<p>Projects I prefer to work on solo</p>
		<span class="name"><a href="http://weather.diskfloppy.me/"><b>weather.diskfloppy.me</b></a></span><br>
		A page to display data from my weather station</a><br><br>

		<span class="name"><a href="http://trivia.diskfloppy.me/"><b>trivia.diskfloppy.me</b></a></span><br>
		A REST API to get trivia questions<br>

		<h1>Group Projects (<a href="//ndfnet.com/">NDFNet</a> / <a href="//nickandfloppy.com/">nickandfloppy</a>)</h1>
		<p>Projects I do/have done with friends</p>
		<span class="name"><a href="//drivers.nickandfloppy.com/"><b>drivers.nickandfloppy.com</a></b> <small>(nickandfloppy)</small></span><br>
		Driver indexing and storage website<br><br>

		<span class="name"><a href="https://github.com/NDFNet/PlexBot"><b>PlexBot</b></a> <small>(NDFNet)</small></span><br>
		A basic bot to play music from the configured Plex server in a Discord voice channel.<br><br>

		<span class="name"><a href="https://github.com/nickandfloppy/NetRunner"><b>NetRunner</b></a> <small>(nickandfloppy)</small></span><br>
		A fork of Starman0620's WinBot, modified for use in The Corner.<br>
	</div> <!-- content -->

	<div id="footer" class="pagefooter">
		<?php $file = __FILE__;require('../inc/footer.inc.php'); ?>
	</div> <!-- footer -->
</div> <!-- pagebody -->
</div> <!-- page -->
</body>
</html>
