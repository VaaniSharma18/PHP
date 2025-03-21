
<?php
//This is simple for loop
// for ($x=0;$x<5;$x++) {
//    echo "Hii i am $x" ;
//    echo "\n";
// }

//Another way to use for loop
// $x=0;
// for(;$x<5;){
//     echo "Hii this is another way to use for loop $x" ;
//     echo "\n";
//     $x++;

// }

//Nested for loop 
$input=5;
 echo "How many missiles will you fire?\n";
 echo "I will fire $input missiles\n" ;

for($x=1;$x<=$input;$x++){
    for($y=3;$y>0;$y--){
           echo "$y ";
    }
    echo "Missile $x has launched";
    echo "\n";
}
echo "All $input missiles have been launched";




?>