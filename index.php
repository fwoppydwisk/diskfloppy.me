<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Global -->
	<?php require('./inc/head.html'); ?>

	<!-- Page-specific -->
	<title>~floppydisk</title>	
	<meta property="og:title" content="~floppydisk">
	<meta property="og:description" content="This is the personal homepage of floppydisk. Every now and then, I dabble in software/hardware projects, take pictures, or write blogposts.">
	<meta property="og:image" content="/favicon.png">
</head>

<body>
<div class="page">
<?php require('./inc/nav.php') ?>
<div id="pagebody">
	<div id="content">
		<!--<br><table class="banner"><tr><td class="banner"><b>Service Message:</b> This is more related to <a class="bannerlink" href="//www.nickandfloppy.com/">nickandfloppy.com</a> but our Gitea service is currently in the process of being migrated to a new VPS. Due to the lengthly migration process, <a class="bannerlink" href="//git.nickandfloppy.com/">git.nickandfloppy.com</a> may periodically be unavailable, though this isn't expected until the final transition.<br><br>~ nick and floppy</td></tr></table>-->
		<p>Hi!</p>
		<p>This is the personal homepage of <a href="./me/">floppydisk</a>. Every now and then, I
			dabble in software/hardware <a href="./projects/">projects</a>, take <a href="./pics/">pictures</a>, or write
			<a href="./interblag/">blogposts</a>.
		</p>

		<h1>Music <small>(that I like)</small></h1>
		<table class="skami">
			<tr>
				<td><img src="https://geo-media.beatsource.com/image_size/64x64/2/1/9/21919d1e-4c70-4525-864e-73be29a56f2c.jpg"></td>
				<td width="500"><pre class="music"><b>Title:</b>  Enjoy the Silence
<b>Album:</b>  The Singles 86>98
<b>Artist:</b> Depeche Mode
				</pre></td>
			</tr>
		</table>

		<!--<h1>Projects <small>(Individual project pages TBD)</small></h1>
		<p>Various Projects I've worked on</p>
		<h2>Personal Projects</h2>
		<p>Projects I prefer to work on solo</p>
		<div class="project">
			<span class="name"><a href="http://weather.diskfloppy.me/">weather.diskfloppy.me</a></span>
			<br>
			<a href="/projects/weatherdata">A page to display data from my weather station</a>
		</div>

		<div class="project">
			<span class="name"><a href="http://trivia.diskfloppy.me/">trivia.diskfloppy.me</a></span>
			<br>
			<a href="/projects/trivia-api">A REST API to get trivia questions</a>
		</div>

		<h2>Group Projects</h2>
		<p>Projects I do/have done with friends</p>
		<div class="project">
			<span class="name"><a href="https://drivers.nickandfloppy.com/">drivers.nickandfloppy.com</a> (<a href="http://drivers.nickandfloppy.com/">HTTP</a>)</span>
			<br>
			<a href="/projects/netdrivers/">Driver indexing and storage website</a>
		</div>

		<h1>News</h1>
		<p>No news... <i>yet!</i></p>-->

		<h1>Contact</h1>
		<p><strong>Mail</strong>: floppydisk05@aol.com<br>
			<strong>IRC</strong>: floppydisk @ r-type<br>
		</p>
		
		<h1>Elsewhere</h1>
		<p><strong>Twitter</strong>: <a href="https://twitter.com/floppydisk__">@floppydisk__</a><br>
			<strong>GitHub</strong>: <a href="https://github.com/floppydisk05">floppydisk05</a><br>
		</p>
	</div> <!-- content -->
	<div id="footer" class="pagefooter">
		<?php $file = __FILE__;require('./inc/footer.php'); ?>
	</div> <!-- footer -->
</div> <!-- pagebody -->
</div> <!-- page -->
</body>
</html>
