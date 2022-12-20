<?php
//Generate an instruction that makes use of "echo"
echo "Hola mundo";
echo "</br>";
//Generate an instruction that makes use of "print"
print "Adios mundo";
echo "</br>";
//Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential
$hola = "Soy Juan, encantado de conocerte";
print_r($hola, true);
$foo = array( 5, 0.0, "Hola", false, '' );
print_r($foo);
?>