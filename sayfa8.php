<!docytype html >
<html>
<head>
<meta charset="utf-8"/>
<title>FOR DÖNGÜSÜ   </title>
</head>   
<body style="    background: green;">

<table border="1"cellpadding="3"cellspacing="0">
<?php
$veri1=rand(10000000,99999999);
  for ($i = 1; $i <= 9999; $i++) {
    if(($i %2) == 1)  
      {echo "<tr><td>$veri1 SONUNA kadar yazdırma</tr></td>","<tr><td>$veri1 9999999 arası </td></tr>";
  echo "<tr><td>$veri1 rastgele veri</td></tr>";
  }
   
   }
?>


</body>
</html>