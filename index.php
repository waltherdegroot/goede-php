<?php

$date = date("h:i");

if($date >"06:00" && $date < "12:00"){
	echo 'Goede morgen!';
	echo 'Het is nu ' . $date;
	echo '<body style="background-image: url(./backgrounds/morning.png)">';

}
else if($date >"12:00" && $date < "18:00"){
	echo 'Goede middag!';
	echo 'Het is nu ' . $date;
	echo '<body style="background-image: url(./backgrounds/afternoon.png)">';
}
else if($date >"18:00" && $date < "00:00"){
	echo 'Goede avond!';
	echo 'Het is nu ' . $date;
	echo '<body style="background-image: url(./backgrounds/evening.png)">';
}
else{
	echo 'Goede Nacht!';
	echo 'Het is nu ' . $date;
	echo '<body style="background-image: url(./backgrounds/evening.png)">';
}
?>