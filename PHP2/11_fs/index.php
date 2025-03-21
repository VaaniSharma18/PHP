<?php
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';
echo __LINE__ . '<br>';
// Create directory
// mkdir("test");
// Rename directory
// rename('test','fest');

// Delete directory
// rmdir('fest');

// Read files and folders inside directory
var_dump(scandir('./')). '<br>'; //scans current directory
echo '<br>';
var_dump(scandir('../')). '<br>'; //scans parent directory
echo '<br>';

// file_get_contents, file_put_contents
// echo file_get_contents('lorem.txt');
// echo file_put_contents('sample.txt','Hii this is me your favorite Vaani sharma anddddd'); //it will create the sample.txt if not exists 


// file_get_contents from URL
// $user_json = file_get_contents('https://jsonplaceholder.typicode.com/users'); //get data from the url
// echo $user_json;

// // $users = json_decode($user_json); //converts json to array //by default it converts the associative array into object
// $users = json_decode($user_json , true); // converts to associative array
// echo '<pre>';
// var_dump($users);
// echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
echo file_exists('sample.txt'); //true

// is_dir
echo is_dir('test');//false
// filemtime
// filesize
// disk_free_space
// file


//this is fully done