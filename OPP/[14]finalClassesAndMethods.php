<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final Classes and final Methods</title>
</head>
<body>

<?php

/* When we use the final modifier, we are saying that this method or class cannot be inherited 
by other classes, nor can it be overridden in any subclass.
*/

use addition as GlobalAddition;

abstract class mathOperation
{
    protected $value1;
    protected $value2;

    protected function __construct($value1, $value2){
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    abstract public function getResult();
    abstract public function showResult();
}

final class addition extends mathOperation
{
    private $result;

    public function __construct($value1, $value2)
    {
        parent::__construct($value1, $value2);
    }

    final public function getResult()
    {
        $this->result = $this->value1 + $this->value2;
    }

    final public function showResult()
    {
        echo '<p>The result of the addition is '.$this->result.'</p>';
    }
}

/*
# Class additionComplex cannot extend final class addition
class additionComplex extends addition
{
    public function showResultv2()
    {
        parent::showResult();
    }

    # Method 'additionComplex::showResult()' cannot override final method
    public function showResult()
    {
        parent::showResult();
    }
}*/ 

$object1 = new addition(3,5);
$object1->getResult();
$object1->showResult();

?>

</body>
</html>