<?php
//$this - Refers to the current object inside a class method.
//self - Refers to the current class (used for static properties and methods).
//parent - Refers to the parent class when using inheritance.
//static - Similar to self, but resolves to the calling class in a hierarchy.

//An object’s property refers to a variable that belongs to an object and is stored inside it

//$this 
//The $this pseudo-variable is used inside non-static methods to reference the current instance of the class.
//$this cannot be used in static methods because static methods belong to the class, not an instance.
class Car {
    public $brand;  // This is a property (belongs to objects)

    public function setBrand($brand) {
        $this->brand = $brand;  // Assigns value to the object's property
    }

    public function getBrand() {
        return $this->brand;  // Retrieves the object's property value
    }
}

$car1 = new Car();  // Creating an object
$car1->setBrand("Toyota");  // Setting object property

$car2 = new Car();  // Another object
$car2->setBrand("Honda");  // Different value for another object

echo $car1->getBrand();  // Output: Toyota
echo "\n";
echo $car2->getBrand();  // Output: Honda



//self
//Used to access static properties or methods within the same class.
class MathOp{
    public static $pi = 3.14;
    
    public static function getPi(){
       return self::$pi;
    }
}

echo MathOp :: getPi();

//parent
//parent – Refers to the Parent Class
//Used when a class inherits another class.
//Calls parent class methods or properties.

class Animal {
    public function makeSound(){
        return "Some generic sound";
    }
}

class Dog extends Animal{
    public function makeSound()
    {
        return parent ::makeSound() . " and woof!";
    }
}

$dog = new Dog;
echo $dog -> makeSound();

//static
//static – Late Static Binding
//Works like self::, but it respects class inheritance.
// Useful when overriding static methods.

class Base{
    public static function whoAmI(){
        return static::class;
    }
}

class Child extends Base{

}

echo Child::whoAmI();

//self:: – Always refers to the class where the method is originally defined.
// static:: – Refers to the calling class, even if it is inherited.



//The Object Operator
// The -> symbol is a built-in construct in PHP that is used with the ＄this keyword to access contained methods and properties.

//The Scope Resolution Operator (::) in PHP is used to access static properties, static methods, constants, and parent class members without creating an instance of the class.

class Circle{
   //properties
   public $radius = 0;
   public static $pi = 3.14;

   //to get circumference
   public function getCircumference(){
    return 2 * self :: $pi * $this->radius;
   }

   // to get area
   public function getArea(){
    return self::$pi * ($this->radius)**2;
   }

   //to get diameter
   public function getDiameter(){
    return 2 *  $this->radius;
   }
}

$obj = new Circle;
$obj -> radius=3;

// Read the object properties values again to show the change
echo "radius is ". $obj->radius . "\n";
echo "Diamater is ". $obj->getDiameter() . "\n"; 
 
 
// Call the object methods
echo "Circumference is ". $obj->getCircumference(),"\n";
echo "Area is " .$obj->getArea()."\n"; 
echo "Value of pi is " .$obj::$pi;

/* Why Does $obj::$pi Work?
PHP allows accessing static properties using an instance (object) instead of a class name. So, the following will work:

php
Copy
Edit
echo $obj::$pi;  // ✅ Outputs: 3.14
However, PHP automatically converts $obj::$pi to Circle::$pi internally. */

// ?>