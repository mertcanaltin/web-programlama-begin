<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Tarih Fonksiyonları türkçe tarih bölümleri</title>
	</head>
	<body>
		<?php
			date_default_timezone_set("Europe/Istanbul");
			setlocale(LC_ALL, "tr_TR.UTF-8", "tr_TR", "tr", 'turkish');
			$tarih=mktime(8,0,0,10,30,1923);
			#mktime(saat,dakika,saniye,ay,gün,yıl)
			echo(date("d F Y l H:i:s",$tarih)."<br/>");
			/*tarih bölümlerini türkçe yazdırmak için setlocale(LC_TIME,"tr_TR");
			yeterli değildir. ayrıca date fonksiyonu yerine strftime fonksiyonun
			kullanılması gerekir*/
			echo(iconv('latin5','utf-8',strftime("%d %B %Y %A",$tarih)));
		?>
	</body>
</html>






