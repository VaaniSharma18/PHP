<?php
//Declaring Multidimensional Arrays
//syntax- $arrayName = array(array(), array()......array())
//syntax - $arrayName =  [[],[]] //2d array

//declaration using array method
$array = array("house",array("bed","chair","table"));
// var_dump($array);
print_r($array);
print_r($array[1]);
print_r($array[1][0]);

var_dump($array[1][0]);

//declaration using square brackets
$aarray = [[1,2,3],[4,5,6]];
print_r($aarray);
var_dump($aarray);

//Indexed Array of Associative Arrays
$aray = array(array("country"=>"india","currency"=>"rupey"),array("country"=>"usa","currency"=>"dollar"),array("country"=>"dubai","currency"=>"dhram"));
print_r($aray);
var_dump($aray[0]["country"]);
print_r($aray[0]["country"])
?>
