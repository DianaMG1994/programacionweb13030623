<?php
$d= $_GET['Dia'];

$m= $_GET['Mes'];

$a= $_GET['Año'];

$arreglodias=array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');

if ($m>2)
{
	$m=$m-2;
} 
elseif($m<=2)
{
	$m=$m+10; 
	$a=$a-1;   
}	

	$c=$a/100;   
	$e=$a%100; 

	$b=(13*$m-1)/5+$e/4+$c/4; 

    $f=($b+$e+$d-2*$c)%7; 

$dia=$f;
echo "dia anterior $arreglodias[$f]";
echo "<br>";
if ($f==6) {
$f=0;
	# code...
}else{
	$f=$f+1;
}
echo "Ese dia $arreglodias[$f]";
$f=$dia;
echo "<br>";
if ($f==5) {
$f=0;
	# code...
}else{
	$f=$f+2;
}

if ($f==8) {
$f=1;
	
}

echo "El dia siguiente  $arreglodias[$f]";
  
?>

<!DOCTYPE html>
<html>
<body></body>
</html>

