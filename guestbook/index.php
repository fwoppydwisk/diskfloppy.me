<?php $db = new PDO("sqlite:/mnt/data1/webdata/floppydisk/guestbook.db"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global -->
	<?php require('../inc/head.html'); ?>

	<!-- Page-specific -->
	<title>Guestbook</title>
	<!--<link rel="shortcut icon" href="../res/img/icons/ico/calc.ico" type="image/x-icon">-->
	<meta property="og:title" content="Guestbook">
	<meta property="og:description" content="h">
	<!--<meta property="og:image" content="/res/img/icons/png/computer.png">-->
</head>
<body>
<div class="page">  
<?php require('../inc/nav.php') ?>

<div id="pagebody">
	<div id="content">
		<br>
		<form action="submit.php" method="post">
			<b>Nickname:</b> <input type="text" name="name"><br>
			<b>Message:</b> <textarea name="message"></textarea><br>
			<b>Show IP:</b><input type="checkbox" name="showip" value="yes"><br>
			<b>Show info:</b><input type="checkbox" name="showinfo" value="yes" checked><br>
			<br><input type="submit">
		</form>

		<?php
		// Pain
		$count_query = $db->prepare('SELECT COUNT(*) FROM Entries');
		$count_query->execute();
		$count = $count_query->fetch()[0];
		echo '<h1>Entries <small>(' . $count . ' total)</small></h1>';
		// Prepare SELECT statement.
		$select = "SELECT name, message, show_info, show_ip, ip, submitted, browser_info FROM Entries ORDER BY id DESC";
		$stmt = $db->prepare($select);

		// Execute statement.
		$stmt->execute(); // ID between 1 and 3.

		// Get the results.
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach($results as $row) {
			echo '<table border="1" width="500"><tr><td><pre>';
		    $submittedRaw = $row['submitted'];
		    $submittedDT = new DateTime("@$submittedRaw");
		    $submitted = $submittedDT->format('H:i:s - Y-m-d');
			
			$browser = get_browser(null, true);
			$sys = $browser['parent'] . ' (' . $browser['platform_description'] . ' ' . $browser['platform_version'] . ')';

		    echo 'Name:	' . $row['name'] . PHP_EOL;
			if ($row['show_ip']) echo 'IP:	' . $row['ip'] . PHP_EOL;
			if ($row['show_info']) echo 'Sys:	' . $row['browser_info'] . PHP_EOL;
			echo 'Date:	' . $submitted . PHP_EOL . PHP_EOL;
			echo $row['message'];
			echo '</pre></td></tr></table><br>';
		}
		?>
		</>
	</div> <!-- content -->

	<div id="footer" class="pagefooter">
		<!-- Created <span class="date">Sat 26 Mar 2011 03:11:41 PM CET</span> -->
	</div> <!-- footer -->
</div> <!-- pagebody -->
</div> <!-- page -->
</body>
</html>
