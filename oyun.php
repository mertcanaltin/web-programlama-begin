<!docytype html >
<html>
<head>
<meta charset="utf-8"/>
<title>if karar yapısı örnekleri2 </title>
</head>
<body>

<?php

$zar1=rand(1,6);
$zar2=rand(1,6);
echo("<img src =\"img/$zar1.png\"/alt=\"$zar1\"/>");
echo("<img src =\"img/$zar2.png\"/alt=\"$zar2\"/><br/>");
if($zar1 == $zar2)
	 echo("tebrikler çift attınız.");
 elseif($zar1>$zar2)
     echo("tebrikler ilk zar 2.den büyük");
	 else
		 echo("üzgünüm çift yada ilk zar büyük olmalıydı ");
?>


</body>
</html>