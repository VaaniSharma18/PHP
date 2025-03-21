<?php
//Recursion is a method of function calling in which a function calls itself during execution.
//must comprise of at least one base case i.e. a condition for termination of execution.

//factorial
function factorial($n){
  if($n==1 || $n==0){
     return 1;
  }
   else{
    return $n * factorial($n-1);
   }
}

 echo factorial(4);
?>