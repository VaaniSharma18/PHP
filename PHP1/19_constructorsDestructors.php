<?php
// constructor is used to initialize member variables when an object is declared
// automatically called at the time when the object of the class is declared.
// A constructor is a member function that is usually public.
// a constructor cannot return a value.


// class Shape
// {

//     public $sides = 0;

//     public $name = " ";

//     public function __construct($name, $sides)
//     { //defining a constructor
//         $this->sides = $sides; //initializing $this->sides to $sides
//         $this->name = $name; //initializing $this->name to $name
        
//     }

//     public function description()
//     { //method to display name and sides of a shape
//         echo "A $this->name with $this->sides sides.";
//     }

// }

// $myShape = new Shape("hexagon", 6); //making an object and passing values to the constructor
// $myShape->description(); // A shape with 6 sides

//destructor
//automatically invoked when an object is no longer needed.
//allows you to define final actions (e.g., closing database connections, deleting temporary files, etc.) before the object is removed from memory.
//No Parameters → A destructor does not accept any arguments.

//When is the Destructor Called?
// 1️⃣ Automatically at the End of Script
//2️⃣ When unset($obj) is Used
//3️⃣ When an Object is Overwritten
class Shape
{

    public $sides = 0;

    public $name = " ";

    public function __construct($name, $sides)
    { //defining a constructor
        $this->sides = $sides; //initializing $this->sides to $sides
        $this->name = $name; //initializing $this->name to $name
        
    }

    public function __destruct()
    { //destructor for Shape gets called at the end
        echo "Destructor Called!\n";
    }

    public function description()
    { //method to display name and sides of a shape
        echo "A $this->name with $this->sides sides.\n";
    }

}

$myShape = new Shape("hexagon", 6); //making an object and passing values to the constructor
$myShape->description(); // A shape with 6 sides


?>