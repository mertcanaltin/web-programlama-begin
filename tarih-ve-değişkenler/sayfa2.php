<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Adres satırı değikeni (QueryString)</title>
	</head>
	<body>
	<?php
		if(isset($_GET["a"])){
		$deger=$_GET["a"];
		echo("$deger değeri adres satırından okundu.");
		}
	?>
	</body>
</html>





