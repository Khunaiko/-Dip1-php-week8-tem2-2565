<?php
class Person
{
    public $name, $age; //1.properties
    
    function __construct($n = "Jeff Bezzon", $a = 55)
    {
        $this->name = $n;
        $this->age = $a;
    }

    function show() //2.method
    { 
        print("Name: ". $this->name . " Age: " . $this->age . "<br />");
    }
}
$obj1 = new Person(); //Object1
$obj2 = new person("Elon Mask",50); //Object2
$obj3 = new person("Tayior",60); //Object2
$obj1->show();
$obj2->show();
$obj3->show();
//$obj1->name = "Mark Zuckerberg";
//$obj1->age = 45;
//$obj1->show();
