<!-- 

// //double me as variable treat krega $name ko
// //single me simple text  isme hme concatenation use krni pdegi
// $string = "   Hello World   ";
// echo "0 - " . strlen($string) . '<br>';
// echo "1 - " .ltrim($string) . '<br>';
// echo "2 - " .rtrim($string) . '<br>';
// echo "3 - " .trim($string) . '<br>';
// echo "4 - " . str_word_count($string) . '<br>';
// echo "5 - " .strrev($string) . '<br>';
// echo "6 - " .strtoupper($string) . '<br>';
// echo "7 - " .strtolower($string) . '<br>';
// echo "8 - " .ucfirst('hello') . '<br>';
// echo "9 - " .lcfirst('HELLO') . '<br>';
// echo "10 - " .ucwords('hello world and php') . '<br>';
// echo "11 - " .strpos($string,'world') . '<br>';
// echo "12 - " .stripos($string,'world') . '<br>';
// echo "13 - " .str_replace('World','PHP',$string) . '<br>';
// echo "14 - " .str_ireplace('world','PHP',$string) . '<br>';
// echo "15 - " .substr($string,8,2) . '<br>';

// // echo "13 - " . . '<br>';
// // echo "14 - " . . '<br>';
$longText = "
Hello, my name is Vaani
I am 21,
I love my family

";
echo $longText . '<br>';
echo nl2br($longText).'<br>'; //to reserve the line breaks //it creates the br tag when it finds the new line

$longText = "
Hello, my name is <b>Vaani</b>
I am <b>21</b>,
I love my family

";
echo"1 - " .$longText .'<br>';
echo"2 - " .nl2br($longText) .'<br>';
echo"3 - " .htmlentities($longText ).'<br>';
echo"3 - " . nl2br(htmlentities($longText )).'<br>'; //if you want to spaces to be reserved  -->


<?php

// Create simple string
$string = "Hello, I am Zura"; // Extract TheCodeholic into variable
$string2 = 'Hello, I am Zura'; // Replace TheCodeholic with variable
echo $string . '<br>';
echo $string2 . '<br>';

// String concatenation
echo "Hello " . " World"; // Multiple concatenation . " and PHP";

// String functions
$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Change into world
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;

$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;


// Multiline text and line breaks
$longText = "
  Hello, my name is Zura
  I am 27,
  I love my daughter
";
echo $longText . '<br>' . PHP_EOL;
echo nl2br($longText) . '<br>' . PHP_EOL;

// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;


// https://www.php.net/manual/en/ref.strings.php