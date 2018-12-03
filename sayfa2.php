
<html>
<head>
<meta charset ="utf-8"/>
<link rel="stylesheet" href="mert.css"/>
<title>arttırma ve eksiltme</title>
</head>
<body class="mert">

<?php 
$i = 1 ;
echo("\$i değikeninin değerini 1 arttırmak için \$i++ ifadesi kullanılır" .$i++."<br/>");
echo($i."</br>");
echo("\$i değikeninin değerini 1 arttırmak için \$i++ ifadesi kullanılır" .++$i."<br/>");

echo("\$i değikeninin değerini 1 eksiltmek için \$i-- ifadesi kullanılır" .$i--."<br/>");
echo($i."</br>");
echo("\$i değikeninin değerini 1 eksiltmek için \--$i ifadesi kullanılır" .--$i."<br/>");
?>
</body>


</html>