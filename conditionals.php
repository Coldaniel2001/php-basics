<?php

//condicion 1:
$fecha = date('w');
$arrayFecha = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
if ($arrayFecha[$fecha] == 'Monday') {
    echo "We are on $arrayFecha[$fecha]</br>";
}

//condicion 2:
date_default_timezone_set('Europe/Madrid');
$fechaMonth = new DateTime('');
if ($fechaMonth->format('F') == 'October') {
    echo "We are in " . $fechaMonth->format('F') . "</br>";
} else {
    echo $fechaMonth->format('F') . "</br>";
}

//condicion 3:
date_default_timezone_set('Europe/Madrid');
$fechaMinute = new DateTime('');
if ($fechaMinute->format('i') < 10) {
    echo "the current minute is less than 10"."</br>";
} else if ($fechaMinute->format('i') > 15) {
    echo "the current minute is more than 15"."</br>";
} else {
    echo "does not meet any conditions"."</br>";
}

switch ($arrayFecha[$fecha]) {
    case "Sunday":
        echo "Today is Sunday"."</br>";
        break;
    case "Monday":
        echo "Today is Monday"."</br>";
        break;
    case "Tuesday":
        echo "Today is Wednesday"."</br>";
        break;
    case "Wednesday":
        echo "Today is Thursday"."</br>";
        break;
    case "Thursday":
        echo "Today is Wednesday"."</br>";
        break;
    case "Friday":
        echo "Today is Friday"."</br>";
        break;
    default:
        echo "Today is Saturday"."</br>";
        break;
}
