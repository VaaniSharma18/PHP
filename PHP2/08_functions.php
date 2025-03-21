<?php

// Function which prints "Hello I am Zura"
function name(){
    return "Hii I am Zura";
}

$name = name();
echo "$name" ;

// Function with argument
function arg($name){
  return $name ;
}
$name = arg("Vaani");
echo  "$name" ;

// Create sum of two functions
function sum($a,$b){
    return $a+$b;
}
$sum = sum(111,12);
echo "$sum" ;
// Create function to sum all numbers using ...$nums
function sums(...$nums){
  $sum=0;
   var_dump($nums);
   foreach($nums as $n){
    $sum +=$n;
   }
   return $sum;
}

echo sums(1,2,3,4,5,6,6,12);

// Arrow functions