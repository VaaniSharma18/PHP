<?php

$age = 20;
$salary = 300000;
$money = "300000";

// Sample if
if($age<$salary){
  echo "age is smaller";
}
echo '<br>';
if($age===20){
    echo "1";
}
echo '<br>';



// Without circle braces
if($age===20) echo "1";
echo '<br>';



// Sample if-else
if($age<$salary){
    echo "age is smaller";
}else{
    echo "age is greater";
}

// Difference between == and ===
$age == 20; // true
$age == '20'; // true

$age === 20; // true
$age === '20'; // false


// if AND

// if OR

// Ternary if

// Short ternary
echo '<br>';
$myAge = $age ?: 18;
var_dump($myAge);


// Null coalescing operator
$myName = $name ?? "Paani";
$myName = isset($name) ? $name : "john";

// switch
$job = "vaani";
switch($job){
    case "editor":
    echo "editor";
    break;

    case "janitor":
    echo "janitor";
    break;
    
    case "teacher":
    echo "teacher";
    break;

    default:
    echo "not accepted" ;        
}