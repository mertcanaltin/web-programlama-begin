
<html>
<head>
<meta charset="UTF-8"/>
<title> Atama oparatorleri</title>
</head>
<body>

<?php
$a =5;
 echo("\$a=5; şeklinde atama yapılır <br/>");
 $a+=3;
 echo("\$a+=3; şeklinde atama yapılır ve sonuç olarak  \$a değişkenine $a değeri aktarılır <br/>");
  $a-=2;
 echo("\$a-=2; şeklinde atama yapılır ve sonuç olarak  \$a değişkenine $a değeri aktarılır <br/>");
  $a/=4;
 echo("\$a/=4; şeklinde atama yapılır ve sonuç olarak  \$a değişkenine $a değeri aktarılır <br/>");
  $a*=6;
 echo("\$a*=6; şeklinde atama yapılır ve sonuç olarak  \$a değişkenine $a değeri aktarılır <br/>");
  $a%=2;
 echo("\$a%=2; şeklinde atama yapılır ve sonuç olarak  \$a değişkenine $a değeri aktarılır <br/>");
  $a=2;
 echo("\$a-=2; şeklinde atama yapılır ve sonuç olarak  \$a değişkenine $a değeri aktarılır <br/>");
?>


<?php
  for ($i = 1; $i <= 10; $i++) {
    if(($i % 2) == 1)  //odd
      {echo "<div class=\"dark\">$i</div>";}
    else   //even
      {echo "<div class=\"light\">$i</div>";}
   }
?>


</body>
</html>