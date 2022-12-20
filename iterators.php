<?php
//for
for($i =  0; $i < 5; $i++){
    echo $i;
}
echo "</br>";

// foreach
$hola = array("manzana", "peras", "platano");
foreach($hola as $frutas){
    echo "$frutas ";
}
echo "</br>";

//while
$numero = 5;
$i = 0;
while( $i < $numero){
    $i++;
    echo($i);
}
echo "</br>";

//do while

$numero = 5;
$i = 0;
do{
    $i++;
    echo($i);
}while( $i < $numero);

?>