
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global -->
	<?php require('../inc/header.inc.php'); ?>

	<!-- Page-specific -->
	<?php require_once('../inc/title.inc.php') ?>
	<link rel="shortcut icon" href="../res/img/icons/ico/help-book.ico" type="image/x-icon">
	<!--<meta property="og:image" content="/res/img/icons/png/computer.png">-->
</head>
<body>
<div class="page">  
<?php require('../inc/nav.inc.php') ?>

<div id="pagebody">
	<div id="content">
		<?php
		$banned_keywords = array("financial", "finance", "stymn", "world4news", "invest", "special offer", "viagra");
		$contains_keywords = array();
		$name = strip_tags($_POST["name"]);
		$msg = strip_tags($_POST["message"]);
		$prohibit = false;
		foreach ($banned_keywords as $keyword) {
			if (strpos(strtolower($msg), $keyword) !== false) {
				$prohibit = true;
				array_push($contains_keywords, $keyword);
			}
			if (strpos(strtolower($name), $keyword) !== false) {
				$prohibit = true;
				array_push($contains_keywords, $keyword);
			}
		}
		if (!$prohibit) {
			if ($msg === "" || $name === "" || strip_tags(htmlspecialchars_decode($msg)) === "") {
			    echo '<b>You must provide both a name and message!</b>';
			} else {
			    $db = new PDO("sqlite:/mnt/data1/webdata/floppydisk/guestbook.db");
			
			    $showinfo = isset($_POST["showinfo"]) ? true : false;
			    $showip = isset($_POST["showip"]) ? true : false;
			    $ip = $_SERVER['REMOTE_ADDR'];
			    $browser = get_browser(null, true);
			    $sys = $browser['parent'] . ' (' . $browser['platform_description'] . ' ' . $browser['platform_version'] . ')';
			
			    $data = array('name' => $name, 'message' => $msg, 'show_info' => $showinfo, 'show_ip' => $showip, 'ip' => $ip, 'submitted' => time(), 'sys' => $sys);
			
			    $insert = "INSERT INTO Entries (name, message, show_info, show_ip, ip, submitted, browser_info) VALUES (:name, :message, :show_info, :show_ip, :ip, :submitted, :browser)";
			    $stmt = $db->prepare($insert);
			    $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
			    $stmt->bindParam(':message', $data['message'], PDO::PARAM_STR);
			    $stmt->bindParam(':show_info', $data['show_info'], PDO::PARAM_STR);
			    $stmt->bindParam(':show_ip', $data['show_ip'], PDO::PARAM_STR);
			    $stmt->bindParam(':ip', $data['ip'], PDO::PARAM_STR);
			    $stmt->bindParam(':submitted', $data['submitted'], PDO::PARAM_STR);
			    $stmt->bindParam(':browser', $data['sys'], PDO::PARAM_STR);
			    $stmt->execute();
				echo '<b>Success!</b>';
			}
		} else {
			echo '<b>Your message could not be submitted as it (or your username) contains the following prohibited keywords:</b><br>'.PHP_EOL;
			echo '		<pre>'.join(', ', $contains_keywords).'</pre>'.PHP_EOL;
		}
		?>
		<br><br>
		<a href="/guestbook/">Back</a>
	</div> <!-- content -->

	<div id="footer" class="pagefooter">
		<?php $file = __FILE__;require('../inc/footer.inc.php'); ?>
	</div> <!-- footer -->
</div> <!-- pagebody -->
</div> <!-- page -->
</body>
</html>
