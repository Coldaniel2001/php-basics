<?php
//Create a function that given two numbers returns the sum of both
function sum($a, $b){
    echo $a+$b;
}

sum(3,4);
echo "</br>";

//Create a function that given two numbers returns the multiplication of both
function multi($a, $b){
    echo $a*$b;
}

multi(3,4);
echo "</br>";

//Create a function that given two numbers returns the division of both
function divi($a, $b){
    echo $a/$b;
}

divi(3,4);
echo "</br>";

//Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.

function calculate($number1, $number2, $operation){
    if($operation == "+"){
        echo $number1+$number2;
    }
    if($operation == "*"){
        echo $number1*$number2;
    }
    if($operation == "/"){
        echo $number1/$number2;
    }
}

calculate(3,2,"+");
echo "</br>";
calculate(3,2,"*");
echo "</br>";
calculate(3,2,"/");
echo "</br>";
?>