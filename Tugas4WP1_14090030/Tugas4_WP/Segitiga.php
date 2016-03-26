<html>
<head>
<title>For dan While membentuk segitiga siku-siku</title>
<style>
body{
color:#000;
background:-webkit-linear-gradient(top,Turquoise,Hotpink,Violet,Lightcyan);
background:-moz-linear-gradient(top,Turquoise,Hotpink,Violet,Lightcyan);
background:-o-linear-gradient(top,Turquoise,Hotpink,Violet,Lightcyan);
background-attachment:fixed;
font-size:18px;
font-family: Lucida Calligraphy;
margin:0;
padding:18px;
}
h1 {
	text-align:center;
}
</style>
</head>
<body>
<h1>For dan While membentuk segitiga siku-siku</h1> 
<h2><marquee>-->>* By Novriani Hernawati *<<--</marquee></h2>
<h3>Tugas 4 -> WP1</h3>
<?php

for ($i=1; $i <=5 ; $i++) {
  $j=1;
  while ($j <= $i) {
    $j++;
    echo $i;
  }
  echo "<br/>";
}
 ?>
</body>