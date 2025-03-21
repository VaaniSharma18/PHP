<?php
$fruits = array("Type"=>"Fruits",1=>"Orange",2=>"Grapes",3=>"Banana");
print_r($fruits);//will print the keys and their associated values
var_dump($fruits);//will print keys, their associated values’ data type (and length in parenthesis) and the value itself
echo $fruits;//echo will simply print the data type instead.
echo " Length of \$fruits array is ".count($fruits);
#this is also a comment

//Adding Elements at the Start
$array = array(1,2,3);
array_unshift($array,4,5); //append the elememts at the start
print_r($array);

//Adding Elements at the End
array_push($array,6,7);//adds element at the end
print_r($array);

//Adding and Replacing Values at Random Position in an Array
// If an old key is used to assign a new value, the old value will be replaced.
// If a new key is used to assign a value, a new key will be created in the array.

$arr = [4,8,12];
$arr[23] = 16; //adding a new key and its assocaited value
print_r($arr);
$arr["value"] = 4;
print_r($arr);
$arr[2]=22; // replacing an old value at 2nd index
print_r($arr);

//Removing values
unset($arr[0]);
print_r($arr);
unset($arr['value']);//removing from associative array
print_r($arr);


//sorting arrays
//Sorting Indexed Arrays by value
$fruits = ['Rasberry', 'Orange', 'Apricot','Banana', 'Apple','Olive' ];
sort($fruits); //sort arrays in ascending order by value. //associated keys are not preserved during this
print_r($fruits);

//Sorting Associative Arrays 
$fruits = [1=>'Rasberry',2=> 'Orange',3=> 'Apricot',4=>'Banana', 5=>'Apple',6=>'Olive' ];
asort($fruits);   // asort sorts the associative array on values
print_r($fruits);
arsort($fruits);  //sort associative arrays in descending order based on their values
print_r($fruits);
ksort($fruits); //sort associative arrays in ascending order based on their keys
print_r($fruits);
krsort($fruits); //sort associative arrays in descscending order based on their keys
print_r($fruits);

//Merging arrays
//Indexed arrays
// $arr1=[1,2,3];
// $arr2=[4,5];
// $arr3=[6,7,8];
// print_r(array_merge($arr1,$arr2,$arr3));
// $arr4=['a','b'];
// $arr5=[7,8];
// $arr6=["vaani"];
// print_r(array_merge($arr4,$arr5,$arr6));

//Associative arrays
//If the input arrays have the same string keys, then the later value for that key will overwrite the previous one.
$arr1 = ["a"=>"red","b"=>"green"];
$arr2 = ["c"=>"blue","b"=>"yellow"];
$arr3 = ["e"=>3];
print_r(array_merge($arr1,$arr2,$arr3));

$arr4 =  ["a"=>"red","b"=>"green"];
array_unshift($arr4,1,2,3);
print_r($arr4);





 ?>
