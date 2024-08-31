<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overwrite Constructor Function</title>
</head>
<body>
    
<?php

class operationv4
{
    protected $value1;
    protected $value2;
    protected $result;

    public function __construct($value1, $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function showResult()
    {
        echo '<p> The result is: '.$this->result.'</p>';
    }
}

class additionv4 extends operationv4
{
    protected $value3;

    public function __construct($value1,$value2,$value3)
    {
        /* To override the constructor function, we use the parent:: keyword 
        to call the parent class's constructor. */   
        parent::__construct($value1,$value2);
        $this->value3 = $value3;
    }

    public function getAddition()
    {
        $this->result = $this->value1+$this->value2+$this->value3;
    }
}

$object1 = new additionv4(3,4,3);
$object1->getAddition();
$object1->showResult();

?>

</body>
</html>