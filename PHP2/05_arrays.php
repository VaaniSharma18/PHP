<?php

// $fruits = ['Banana','Apple','orange'];
// var_dump($fruits);

// echo $fruits[0];
// echo isset($fruits[3]);

// $fruits[] = 'Peach';
// var_dump($fruits);

// echo count($fruits);
// array_push($fruits,'grapes');        
// var_dump($fruits);

// echo array_pop($fruits);

// array_unshift($fruits,'vaani');

//  echo array_shift($fruits);
//  var_dump($fruits);

//  $string = "Banana,Apple,Grapes";
//  var_dump(explode(',',$string)); 
// echo implode(",",$fruits);

// echo in_array('Apple',$fruits);

$person = [
 "name" => "Vaani",
  "surname" => "sharma",
  "age" => 21 ,
  "hobbies" => ["singing","playing guitar","playing badminton"],
  "channel" => "SingWithVaani"

];

var_dump($person);

if(!isset($person['address'])){
    $person['address']="kunihar";
    var_dump($person);
}

echo($person['address'] ??='unknown');

var_dump(array_keys($person));
echo '<br>';
var_dump(array_values($person));