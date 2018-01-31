<?php
	date_default_timezone_set('Europe/Amsterdam');
	$date = date("H:i");
	$dagdeel = " ";
	$class = " ";

	if($date > "06:00" && $date < "12:00"){
			$dagdeel = "Goede morgen!";
			$class = "morgen";
		}
		else if($date > "12:00" && $date < "18:00"){
			$dagdeel = "Goede middag!";
			$class = "middag";
		}
		else if($date > "18:00" && $date < "23:59"){
			$dagdeel = "Goede avond!";
			$class = "avond";
		}
		else if($date > "23:59" && $date < "06:00"){ 
			$dagdeel = "Goede Nacht!";
			$class = "nacht";
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Good Day</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="./main.css">
	</head>
	<body class=<?=$class?>>
		<h1 id="hey"><?=$dagdeel?></h1>
		<p id="tijd">Het is nu <?=$date?></p>
	</body>
</html>
