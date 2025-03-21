<?php
// Built-in functions
// User-defined functions


//simple function implemetation
// function hello()  {
//     echo "hiii\n" ;
// }

// hello();

// function number($num1,$num2){
//    echo "The first argument passed in 1st parameter in $num1 \n" ;
//    echo "The second argument passed in 2st parameter in $num2  " ;
// };
// number(3,4);



// Pass by Value
// Pass by Reference


//Pass by value
//  function swap($arg1,$arg2){
//     $temp = $arg1;
//     $arg1 = $arg2;
//     $arg2 = $temp;
//     echo "\n num1 is $arg1\n" ;
//     echo " num2 is $arg2\n" ;

//  }
//  $num1=3;
//  $num2=4;
//  swap($num1,$num2);
//  echo "\n num1 is $num1\n" ;
//  echo " num2 is $num2\n" ;




 //Pass by reference
 //here original value is passed therefore original value gets altered
 //pass value using &

 function swapp(&$arg1,&$arg2) {
    echo "\n num1 is $arg1\n" ;
    echo " num2 is $arg2\n" ;
    $temp = $arg1;
    $arg1 = $arg2;
    $arg2 = $temp;
    echo "\n num1 is $arg1\n" ;
    echo " num2 is $arg2\n" ;
 }

 $a=3;
 $b=4;
 swapp($a,$b);
 echo "\n num1 is $a\n" ;
 echo " num2 is $b\n" ;

?>
