<?php $db = new PDO("sqlite:/mnt/data1/webdata/floppydisk/guestbook.db"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global -->
	<?php require('../inc/header.inc.php'); ?>

	<!-- Page-specific -->
	<title>Guestbook</title>
	<!--<link rel="shortcut icon" href="../res/img/icons/ico/calc.ico" type="image/x-icon">-->
	<meta property="og:title" content="Guestbook">
	<meta property="og:description" content="h">
	<!--<meta property="og:image" content="/res/img/icons/png/computer.png">-->
</head>
<body>
<div class="page">  
<?php require('../inc/nav.inc.php') ?>

<div id="pagebody">
	<div id="content">
		<br>
		<form action="submit.php" method="post">
			<fieldset>
				<legend>Add Entry</legend>
				<table class="form">
					<tr>
						<td class="form"><label for="name">Name: </label></td>
						<td class="form"><input type="text" name="name"></td>
					</tr>
					<tr>
						<td class="form"><label for="message">Message: </label></td>
						<td class="form"><textarea name="message"></textarea></td>
					</tr>
					<tr>
						<td class="form"><label for="showip">Show IP: </label></td>
						<td class="form"><input type="checkbox" name="showip" value="yes"></td>
					</tr>
					<tr>
						<td class="form"><label for="showinfo">Show info: </label></td>
						<td class="form"><input type="checkbox" name="showinfo" value="yes" checked></td>
					</tr>
					<tr>
						<td class="form" colspan="2"><input type="submit"></td>
					</tr>
				</table>
			</fieldset>
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

	</div> <!-- content -->

	<div id="footer" class="pagefooter">
		<?php $file = __FILE__;require('../inc/footer.inc.php'); ?>
	</div> <!-- footer -->
</div> <!-- pagebody -->
</div> <!-- page -->
</body>
</html>
