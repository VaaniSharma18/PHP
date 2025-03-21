<?php
  
// $val = 10;
// function gb(){
//   global $val;
//   echo "$val";
// }
// gb();

/* Write a PHP script that:
Declares a constant named SITE_NAME with a value "MyWebsite"
Uses the constant in a sentence: "Welcome to MyWebsite!"
Uses isset() and unset() to check if a variable is set */
// define("SITE_NAME","MyWebsite");
// echo "Welcome to " . SITE_NAME;
// $val = "Vaani";
// if(isset($val)){
//    echo "$val";
// }
// unset($val);
// echo "$val";
// $val;
// echo gettype($val);
//  echo round(10.3);
//  echo (int) 9.99;
//  echo  fmod(10,3);

/* Write a PHP script that:
Declares a float variable $price = 199.99
Rounds it to the nearest integer
Prints the rounded price */

// $price = 199.99;
// echo round($price);
// $number = 15.75;
// echo round($number,2);

/* Write a PHP script that:
Declares a variable $sentence = "Hello World"
Finds and prints the position of "World" in the string
Replaces "World" with "PHP" and prints the modified sentence */

// $sentence = "Hello World";
// echo strpos($sentence,"World");
// echo str_replace("World","PHP",$sentence);
// echo $sentence;

/* Write a PHP script that:
Declares a string "Apple, Banana, Cherry"
Uses explode() to split it into an array
Loops through the array and prints each fruit
*/
// $string = "Apple, Banana, Cherry";
// $arr = explode(",",$string);
// print_r($arr);
// foreach($arr as $i){
//   echo $i;
// }


/* Coding Practice
Write a PHP script that:
Creates an array with three numbers
Prints the second number */
// $arr = [1,2,3];
// echo $arr[1];

// in_array('2',$arr);


/* Write a PHP script that:
Creates an array with five colors
Removes the last color using array_pop()
Prints the modified array */
// $colors = array('Red','Blue','Pink','Green','Black');
// print_r($colors);
// array_pop($colors);
// print_r($colors);

/* Write a PHP script that:
Creates an associative array with student names as keys and marks as values
Prints the marks of a specific student */

// $array = ["Vaani"=>"PHP","Gajinder"=>"ios","Divay"=>"ios","Ajay"=>"webdev","Rajat"=>"backend","Sourabh"=>"android","Abhishek"=>"backend_devops"];
// print_r($array['Gajinder']);
// echo array_key_exists('aani',$array);
// print_r(array_flip($array));

/* Write a PHP script that:
Creates an associative array with country names as keys and their capitals as values
Loops through the array and prints each country with its capital */
// foreach($array as $keys=>$values){
//   echo $keys. " ".$values ;
//   echo "\n";
// }

// $json=json_encode($array);
// print_r(json_decode($json,true));

// $countries = ['Vaani'=>'10','Bhawna'=>'9.2','Prakriti'=>'8.4','Mottii'=>'2','Kanika'=>'10'];
// asort($countries);
// print_r($countries);


// function randomName(){
//     $n = 10;
//     $str = "1234567890qwertyuioplkjhgfdsazxcvbnmMNBVCXZASDFGHJKLPOIUYTREWQ";
//     $name="";
//     for($i=0;$i<$n;$i++){
//         $ch = rand(0,strlen($str)-1);
//         $name .= $str[$ch];
//     }
//     return $name;
// }

/* Write a PHP script that:
Checks if a number is positive, negative, or zero
Prints the result */
// function check($num){
//     if($num<0){
//         echo "$num is negative";
//     }
//     elseif($num==0){
//         echo "$num is zero";
//     }
//     else{
//         echo "$num is positive";
//     }
// }

// check(00000000000000000);

/* Write a PHP script that:
Takes a variable $grade (0-100)
Prints "A" if the grade is 90+, "B" for 80-89, "C" for 70-79, "F" otherwise */
// function check($grade){
//     if($grade>=90){
//         echo "A";
//     }
//     elseif($grade>=80){
//         echo "B";
//     }
//     elseif($grade>=70){
//         echo "C";
//     }
//     else{
//         echo "F";
//     }
// }

// check(13);

/* Write a PHP script that:
Takes a string variable $day
Uses a switch statement to print "Weekend" for "Saturday" and "Sunday", and "Weekday" otherwise */

// function check($day){
//     $str = strtolower($day);
//     switch($str){
//         case "sunday" :
//         case "saturday" :
//             echo "Weekend";
//             break;
            
//         case "monday" :
//         case "tuesday" :
//         case "wednesday":
//         case "thursday":
//         case "friday" :
//             echo "Weekday";
//             break;
       
//         default :    
//            echo "Invalid day";
//     }
// }
// check("monDay");

/* Write a PHP script that:
Uses a do-while loop
Prints numbers from 1 to 10 */
// $i=1;
// do{
//    echo $i;
//    echo "\n";
//    $i++;
// }while($i<=10);

/* Write a PHP script that:
Loops through an array using foreach
Prints each element */
// $arr = ['a','e','i','o','o'];
// foreach($arr as $i=>$a){
//     echo $a;
//     echo "\n";
// }

/* Write a PHP function that:
Takes a name as a parameter
Returns "Hello, [name]!" */
// function name($name){
//     echo "Hello, $name";
// }

// name("Vaani");

/* Write a PHP function that:
Takes an array of numbers
Returns the sum of the numbers */

// function arraySum($arr){
//     $sum=0;
//     foreach($arr as $i){
//         $sum+=$i;
//     }
//     echo "$sum";

// }

// arraySum([1,2,3,5]);

/* Write a PHP function that:
Uses an anonymous function to multiply numbers*/
// $multiply = function(...$a){
//     $m = 1;
//     foreach($a as $i){
//        $m *=$i;
//     }
//     echo "$m";
// };

// $multiply(1,2,3,4);
// ?>

