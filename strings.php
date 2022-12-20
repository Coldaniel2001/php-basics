<?php
$despedida = "adios"."</br>";
//condicion 1
print "hola"."</br>";

//condicion 2

print $despedida;

//condicion 3
$despedida .=" y hasta mañana"."</br>";
print $despedida;

//condicion 4
str_ireplace("ADIOS", "hola",$despedida);

//condicion 5
str_replace("adios", "hola",$despedida);

//condicion 6
str_repeat("+=", 15);

//condicion 7
strlen($despedida);

//condicion 8
strpos($despedida, 'o',3);

//condicion 9
strtoupper($despedida);

//condicion 10
strtolower($despedida);

//condicion 11
echo substr($despedida, 12);

?>