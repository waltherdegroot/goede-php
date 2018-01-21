<!DOCTYPE html>
<html>
	<head>
		<title>Good Day</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="./main.css">
	</head>
	<body>
		<?php

		$date = date("H:i");

		if($date > "06:00" && $date < "12:00"){
			echo '<h1 id="hey">Goede morgen!</h1>';
			echo '<p id="tijd">Het is nu ' . $date . '</p>';
			echo '<body style="background-image: url(./backgrounds/morning.png)">';

		}
		else if($date > "12:00" && $date < "18:00"){
			echo '<h1 id="hey">Goede middag!</h1>';
			echo '<p id="tijd">Het is nu ' . $date . '</p>';
			echo '<body style="background-image: url(./backgrounds/afternoon.png)">';
		}
		else if($date > "18:00" && $date < "23:59"){
			echo '<h1 id="hey">Goede avond!</h1>';
			echo '<p id="tijd">Het is nu ' . $date . '</p>';
			echo '<body style="background-image: url(./backgrounds/evening.png)">';
		}
		else if($date > "23:59" && $date < "06:00"){ 
			echo '<h1 id="hey">Goede Nacht!</h1>';
			echo '<p id="tijd">Het is nu ' . $date . '</p>';
			echo '<body style="background-image: url(./backgrounds/night.png)">';
		}
		?>
	</body>
</html>
