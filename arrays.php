<?php
//Define a simple array composed of text strings
$arrayStrings = ["hola", "adios", "nos vemos"];

//Define a simple array consisting of whole numbers and decimal numbers
$arrayNumbers =[1, 3, 5, 5.6, 3.1];

//Define a multidimensional array
$arrayMulti = [[3,4,6,7],["hola","adios"]];

//Execute the function that allows to obtain the length of an array
var_dump(count($arrayMulti[1])); 
echo "</br>";

//Execute the function that allows to obtain the combination of two arrays
print_r(array_merge($arrayStrings, $arrayNumbers));
echo "</br>";

//Execute the function that once is given an array return the last element of it
print_r(end($arrayNumbers));
echo "</br>";

//Execute the function that once is given an array add a new element to the array in question
array_push($arrayNumbers, 9, 8);
print_r($arrayNumbers);

?>