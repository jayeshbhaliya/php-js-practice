<?php                      
    class Car {
        public $name;
        public $color;
        const MILAGE = "milage of this car is around 15 km/lit.";
        public function __construct($name, $color) {
            $this->name =$name;
            $this->color = $color;
        }
        public function display() {
            echo "This is $this->name car with $this->color color !! \n";
            echo self::MILAGE;
            echo "<br>";

        }
        
       
        
    }
    class bmw extends Car {
        public function msg() {
            echo "That is bmw car new model. \n";
            echo "<br>";
        }
        public function speed(){
            echo "top speed of car is 180 Km/hr. \n";
            echo "<br>";

        }
    }

    
    $m01 = new bmw('m01','red');
    $m01->msg(); 
    echo bmw::MILAGE;
    $m01->speed();
    $m01->display();
    
?>