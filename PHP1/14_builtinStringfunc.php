<?php
//Extracting or Replacing Substrings
//Single characters can be extracted using array (square brace) syntax as well as curly brace syntax. These two syntaxes will only return a single character from the string. If we need more than one character, we have to use the in-built substr function.
$string = "Hello World ";
echo $string[2];
echo "\n";
// echo $string{2}; not suppoted 
echo substr($string,2,1);
echo "\n";
echo substr($string,2,3);


// Finding Position of a Substring
echo "Occurence of Vaani in the string: " . strpos("Vaani Sharma","Vaani");
echo "\n";
echo "Occurence of Sharma in the string: " . strpos("Vaani Sharma","Sharma");
echo "\n";
echo "Occurence of sharma in the string: " . strpos("Vaani Sharma","sharma");//return false means empty string

//Replacing Characters in a String
$string[4] = 'V'; //it replaces the main string
echo $string;
$bar = substr_replace($string,"!",2,5);//The substr_replace function does not change the actual string
echo $bar , $string;

//replacing word in string
$my_str = "This is Vaani and Vaani is vaani and no one can change Vaani";
echo str_replace("Vaani","Konark",$my_str); //doesn't change the actual string
echo $my_str;
echo str_replace("Vaani","Konark",$my_str,$count);//You can optionally pass the fourth argument to the str_replace() function to know how many times the string replacements were performed
echo "$count";

//Calculating the Length of a String
echo "\n";
$length = "Hii i am length";
echo strlen($length);

//Counting the Number of Words in a String
echo "\n";
echo str_word_count($length);

//Reversing a String
echo "\n";
echo strrev($length);



?>