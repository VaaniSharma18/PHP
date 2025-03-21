<?php

// What is class and instance
// class Person{
//     public $name;
//     public $surname;
//     private $age;
// }

// $p = new Person();
// $p->name = 'Vaani';
// $p ->surname = 'Sharma';
// echo $p ->name;
// echo '<pre>';
// var_dump($p);
// echo '</pre>';

// $p1 = new Person();
// $p1->name = 'Koanrk';
// $p1 ->surname = 'Sharma';
// echo $p1 ->name;
// echo '<pre>';
// var_dump($p);
// echo '</pre>';

//without using constructor we have to do all this
class Person{
    public $name;
    public $surname;
    private $age;
    public static $counter=0;

    public function __construct($name,$surname) //constructors
    {
    $this->name = $name;
    $this->surname = $surname;
    self::$counter++;
    }

    public function setAge($age){ //setter
         $this->age = $age;
    }

    public function getAge(){ //getter
        return $this->age;
    }
   
    public static function getCounter(){
        return self::$counter;
    }
   
}

$p = new Person("Vaani","Sharma"); //object creation 1
$p->setAge("21"); //setting age
echo $p->getAge(); //getting age
echo '<pre>';
var_dump($p);
echo '</pre>';

$p1 = new Person('Koanrk','Sharma');//object creation 2
echo $p1 ->setAge("15");
echo $p1->getAge();
echo '<pre>';
var_dump($p1);
echo '</pre>';

echo Person::$counter;
echo Person::getCounter();


class Student extends Person{
   public string $student_id;

   public function __construct($name,$surname,$student_id)
   {
     $this->student_id = $student_id;
     parent::__construct($name,$surname);
   }

}
 $s = new Student("Vaani","Sharma","abcd");
echo '<pre>';
var_dump($s);
echo '</pre>';



// Create Person class in Person.php

// Create instance of Person

// Using setter and getter