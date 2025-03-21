<?php
//Concatenation (.):
//Concatenation Assignment (.=)

//concatenation
$a = "a";
$b = "b";
$c = $a . $b;

echo $c, $a, $b ;

//concatenation assignment
//The difference between concatenation and concatenation assignment is similar to + and +=.
echo "\n";
$a = "a";
$a .= "b"; // $a => "ab"
echo $a;

?>