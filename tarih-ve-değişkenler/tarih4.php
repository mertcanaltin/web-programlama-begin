<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Tarih Fonksiyonları tarih oluşturma</title>
	</head>
	<body>
		<?php
			date_default_timezone_set("Europe/Istanbul");
			$tarih=mktime(8,0,0,10,29,1923);
			#mktime(saat,dakika,saniye,ay,gün,yıl)
			echo(date("d.m.Y l H:i:s",$tarih));

		?>
	</body>
</html>






