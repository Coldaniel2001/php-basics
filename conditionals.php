<?php

//Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, 
//it shows a message of “We are on Monday”.
$fecha = date('w');
$arrayFecha = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
if ($arrayFecha[$fecha] == 'Monday') {
    echo "We are on $arrayFecha[$fecha]</br>";
}

//Create a simple condition that evaluates whether the current month is October. 
//If the condition is met, it shows a message of the type "We are in October". 
//Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
date_default_timezone_set('Europe/Madrid');
$fechaMonth = new DateTime('');
if ($fechaMonth->format('F') == 'October') {
    echo "We are in " . $fechaMonth->format('F') . "</br>";
} else {
    echo $fechaMonth->format('F') . "</br>";
}

//If the current minute is less than 10. Displays a message of type "the current minute is less than 10", 
//if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". 
//If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
date_default_timezone_set('Europe/Madrid');
$fechaMinute = new DateTime('');
if ($fechaMinute->format('i') < 10) {
    echo "the current minute is less than 10"."</br>";
} else if ($fechaMinute->format('i') > 15) {
    echo "the current minute is more than 15"."</br>";
} else {
    echo "does not meet any conditions"."</br>";
}

//Create a switch type control structure to display a different message depending on the current day of the week. 
//You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.
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
