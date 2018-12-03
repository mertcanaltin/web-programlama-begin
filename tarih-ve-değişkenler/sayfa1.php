<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Değişkene kıyaslamalı değer atama</title>
	</head>
	<body>
	<?php
		$a=10;
		$b=10;
		$c=($a==$b) ? $a : 50;
		echo("$c değeri aktarıldı.");
	?>
	</body>
</html>





