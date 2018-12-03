<!docytype html >
<html>
<head>
<meta charset="utf-8"/>
<title>swich karar yapısı       </title>
</head>   
<body>

<?php

$zar1=rand(1,6);
$zar2=rand(1,6);

echo("<img src =\"img/$zar1.png\"/alt=\"$zar1\"/>");
echo("<img src =\"img/$zar2.png\"/alt=\"$zar2\"/><br/>");


switch ($zar1 == $zar2) {
    case $zar1:
        echo("tebrikler çift attınız.");
        break;
}
switch ($zar1>$zar2) {
    case $zar2:
         echo("üzgünüm çift yada ilk zar büyük olmalıydı ");
        break;
}

















?>


</body>
</html>