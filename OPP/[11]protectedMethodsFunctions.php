<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected Methods and Functions</title>
</head>
<body>

<?php

/* When overriding methods, we must preserve the method name, parameter count, parameter types, 
and return type as defined in the parent class.
*/

class operationv2
{
    protected $value1;
    protected $value2;
    protected $result;

    public function inputValue1($value1)
    {
        $this->value1 = $value1;
    }

    public function inputValue2($value2)
    {
        $this->value2 = $value2;
    }

    public function showResult ()
    {
        echo '<p>The result is: '.$this->result.'</p>';
    }

}

class additionv2 extends operationv2
{
    public function operation()
    {
        $this->result = $this->value1 + $this->value2;
    }

    public function showResult ()
    {
        echo '<p>The result is: '.$this->result.'</p>';
    }
}

$object1 = new additionv2();
$object1->inputValue1(5);
$object1->inputValue2(15);
$object1->operation();
$object1->showResult();

?>

</body>
</html>