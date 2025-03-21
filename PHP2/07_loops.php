<?php

// // while
// $a = 0;
// while($a<4){
//    echo($a);
//    $a++;
// }

// // Loop with $counter


// // do - while
// $a = 0;
// do{
//    echo($a);
//    $a++;
// }while($a<4);

// // // for
// for($a=0;$a<4;$a++){
//     echo "a";
// }

// // // foreach

// $arr = [10,20,30,40,50,60,70,80];
// foreach( $arr as $element  ){
//    echo "$element" ;
// }
// echo '<br>';
// $arr = ["banana","apple","grapes","avocado"];
// foreach ($arr as $i => $foo){
//     echo $i . ' '. $foo . '<br>';
// }

// Iterate Over associative array.
$person = [
    "name" => "Vaani",
     "surname" => "sharma",
     "age" => 21 ,
     "hobbies" => ["singing","playing guitar","playing badminton"],
     "channel" => "SingWithVaani"
   
   ];

   foreach ($person as $key => $value){
       if(is_array($value)){
        echo "$key". " " . implode(",", $value);
       } else{
        echo "$key" . " " . "$value";
       }
        
   }