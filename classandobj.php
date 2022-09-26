<?php
class Cars {
    public $name;
    public $color;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    
    function __destruct()
    {
        echo "This is $this->name car with $this->color color.";
        echo "\ndestructor automatically call when script end.";
    }
    function __construct()
    {
        echo "constuctor run when create object \n";
    }
}

$bmw = new Cars();
$bmw->set_name("bmw"); 
$bmw->color = "black";

echo $bmw->get_name();
echo $bmw->name;
echo $bmw->color;
?>


