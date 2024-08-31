<?php
#  Basic syntax for declaring a class
class className{
    # Attributes
    private $value;
    # Constructor
    public function __construct($value)
    {
        $this->value = $value;
    }
    # Methods
    public function showValue(){
        echo "The value is: " . $this->value;
    }
}

# Objects
$object1 = new className('123419');
$object1->showValue();

$object2 = new className('Hi there!');
$object2->showValue();
?>