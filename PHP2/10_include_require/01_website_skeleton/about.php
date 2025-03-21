<?php 
// we can use another file in php by 2 ways
//1. using include - if there is an error it will give error and executes the code written in the file
//2. using require - if there an error code will not be executed



?>

<?php //include "index.php"  ?>
<?php //require "index.php" ?>
<?php //include_once "index.php" //includes the file once no matter how many times we write this statement?>
<?php //require_once "index.php" ?>



<?php include_once "partials/header.php"?>
    <h1>This is about section</h1>
<?php include_once "partials/footer.php";?>