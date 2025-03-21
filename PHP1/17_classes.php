<?php
//Classes are the blueprints of objects. One of the big differences between functions and classes is that a class contains both data (variables) and functions to form a package. A class is a user-defined data type, which includes local methods and local variables.
//An object is an individual instance of the data structure defined by a class. We define a class once and then make many objects that belong to that class.


//Syntax for Defining Classes
class ab{
    //properties and methods defined
}


class Shape{
  public $sides = 0; // first property
  public $name= " "; // second property 
  
  public function description(){ //first method
    echo "A $this->name with $this->sides sides.";
  }
  
 
}

$obj = new Shape;
$obj -> sides=3;
$obj -> name="triangle";
$obj -> description();
echo "\n";

$obj -> sides=4;
$obj -> name="square";
$obj -> description();
?>