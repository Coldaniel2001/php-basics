<?php
date_default_timezone_set('Europe/Madrid');
$fecha = new DateTime('');

//Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
echo $fecha->format('Y-m-d'). "\n";
echo "</br>";

//Get the current date in any format
echo $fecha->format('y-m-d h:i:s'). "\n";
echo "</br>";

//Get the current day
echo $fecha->format('d'). "\n";
echo "</br>";

//Get the current month in numerical format (1-12)
echo $fecha->format('m'). "\n";
echo "</br>";

//Get the current minute with leading zeros (00 - 59)
echo $fecha->format('i'). "\n";
echo "</br>";
?>