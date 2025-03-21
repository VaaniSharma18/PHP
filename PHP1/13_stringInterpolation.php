<?php
//The term interpolation refers to the insertion of a variable within a string. Interpolation works in double-quoted strings and the heredoc syntax only.
$name = "Vaani";
echo "Hii my name is $name" ;// name is replaced with vaani 
echo 'Hii my name is $name' ;// it will not work in single quotes

//Curly syntax
//In PHP you can also use the complex syntax, or the curly syntax which requires that you wrap your variable within curly braces {}.
$name = "Vaani";
echo "Hello {$name}Sharma!"; // Output: Hello VaaniSharma!
echo "Hello $nameSharma!";//this will give error

//interpolation doen'nt work with  unction calls, constants, or expressions inside a string.
//only works for variables, array elements, and object properties that start with $
// trying to interpolate a PHP expression
echo "1 + 2 = {1 + 2}\n";

// using a constant
define("HELLO_WORLD", "Hello World!!");
echo "My constant is {HELLO_WORLD}.\n";

// Example using a function
function say_hello() {
  return "Hello!";
};
echo "I say: {say_hello()}";


?>


