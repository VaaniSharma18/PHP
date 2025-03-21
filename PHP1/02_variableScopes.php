<?php

// local variables
//cannot be accessed outside of the function they are declared in.
// function foo()
// {
//     $number = 10; //local variable
//     echo $number;
// }
// foo();


// global variables
// The variables defined outside of a function are referred to as global variables.
// A global variable can be accessed in any part of the program.
// You cannot assign a value to a variable in the same statement as the global keyword.

// $counter = 10; //this is global variablse for this function 
// echo "This is first $counter variable" ;
// function increment(){
//     global $counter;
//     $counter += 5;
//     echo "This is inside the function $counter" ;
// }

// increment();
// echo "This is outside the function $counter" ;

//using variable variables
function sum($x,$y){
return $x + $y;
}
$funcName = 'sum';
echo  $funcName(3,4);

?>

