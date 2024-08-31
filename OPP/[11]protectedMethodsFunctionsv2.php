<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected Methods and Functions</title>
</head>
<body>

<?php

/* We can override methods using the parent:: keyword. When doing so, we cannot modify the parent method itself; 
we can only extend its functionality or call it as is. It's important to maintain the same method name, 
parameter count, parameter types, and return type as the parent class. 
*/

class operationv3
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

class additionv3 extends operationv3
{
    public function operation()
    {
        $this->result = $this->value1 + $this->value2;
    }

    public function showResult ()
    {
        echo '<p>Addition--------</p><br>';
        #here only call the parents method
        parent::showResult();
    }
}

$object1 = new additionv3();
$object1->inputValue1(5);
$object1->inputValue2(15);
$object1->operation();
$object1->showResult();

?>

</body>
</html>