<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Adres satırı değikeni (QueryString)</title>
	</head>
	<body>
	<?php
		if(isset($_GET["a"],$_GET["b"])){
		$deger1=$_GET["a"];
		$deger2=$_GET["b"];
		echo("$deger1 ve $deger2 değerleri adres satırından okundu.");
		}
	?>
	</body>
</html>





