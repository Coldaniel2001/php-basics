<?php
//for

for($i =  0; $i < 5; $i++){
    echo $i;
}

// foreach
$hola = array("manzana", "peras", "platano");
foreach($hola as $frutas){
    echo "$frutas ";
}

//while
$numero = 5;
$i = 0;
while( $i < $numero){
    $i++;
    echo($i);
}

//do while

$numero = 5;
$i = 0;
do{
    $i++;
    echo($i);
}while( $i < $numero);

?>