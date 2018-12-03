<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Adres satırı değikeni (QueryString)</title>
	</head>
	<body>
	<?php
		
		$deger=isset($_GET["a"])?$_GET["a"]:"";
		echo("$deger değeri adres satırından okundu.");
		
	?>
	</body>
</html>





