<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Tarih Fonksiyonları yerel saat</title>
	</head>
	<body>
		<?php
			date_default_timezone_set("Europe/Istanbul");
			echo(date("d.m.Y l H:i:s",1));
			#1 rakamı saniye cinsinden tarihin başlangıcından 
			#geçen süreyi temsil eder
		?>
	</body>
</html>






